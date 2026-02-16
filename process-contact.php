<?php
/**
 * Contact Form Handler
 * Processes contact form submissions with Cloudflare Turnstile verification
 */

// Disable error display immediately to prevent JSON corruption
@ini_set('display_errors', 0);
@ini_set('log_errors', 1);
error_reporting(E_ALL);

// Load Configuration & Secrets
require_once __DIR__ . '/includes/config.php';

// Create submissions backup directory
$submissionsDir = __DIR__ . '/submissions';
if (!is_dir($submissionsDir)) {
    @mkdir($submissionsDir, 0755, true);
    // Protect directory with .htaccess
    @file_put_contents($submissionsDir . '/.htaccess', "Deny from all");
}

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    exit('Method not allowed');
}

// Configuration
// Configuration
$recipientEmail = defined('FORM_RECIPIENT') ? FORM_RECIPIENT : 'info@dtpainter.com';
$turnstileSecretKey = defined('TURNSTILE_SECRET_KEY') ? TURNSTILE_SECRET_KEY : '';

// Validate required fields
$requiredFields = ['name', 'email', 'phone', 'service', 'message'];
$errors = [];

foreach ($requiredFields as $field) {
    if (empty($_POST[$field])) {
        $errors[] = ucfirst($field) . ' is required';
    }
}

// Validate email format
if (!empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email address';
}

// Verify Cloudflare Turnstile
$turnstileResponse = $_POST['cf-turnstile-response'] ?? '';

if (empty($turnstileResponse)) {
    $errors[] = 'Please complete the security verification';
} else {
    // Verify with Cloudflare
    $verifyUrl = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
    $verifyData = [
        'secret' => $turnstileSecretKey,
        'response' => $turnstileResponse,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];

    $ch = curl_init($verifyUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($verifyData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $verifyResult = curl_exec($ch);
    curl_close($ch);

    $verifyJson = json_decode($verifyResult, true);

    if (!$verifyJson['success']) {
        $errors[] = 'Security verification failed. Please try again.';
    }
}

// If there are errors, return them
if (!empty($errors)) {
    header('Content-Type: application/json');
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'errors' => $errors
    ]);
    exit;
}

// Sanitize input data
$name = htmlspecialchars(trim($_POST['name']));
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$phone = htmlspecialchars(trim($_POST['phone']));
$service = htmlspecialchars(trim($_POST['service']));
$city = htmlspecialchars(trim($_POST['city'] ?? 'Not specified'));
$message = htmlspecialchars(trim($_POST['message']));

// === CRITICAL: Save to file first (fail-safe backup) ===
$submissionData = [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'service' => $service,
    'city' => $city,
    'message' => $message,
    'submitted_at' => date('Y-m-d H:i:s'),
    'ip_address' => $_SERVER['REMOTE_ADDR'] ?? 'Unknown',
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'
];

$filename = $submissionsDir . '/submission_' . date('Ymd_His') . '_' . uniqid() . '.json';
$fileSaved = @file_put_contents($filename, json_encode($submissionData, JSON_PRETTY_PRINT));

// === Attempt to send email (non-critical - don't fail if it doesn't work) ===
$emailSuccess = false;
try {
    // Compose email
    $subject = "New Quote Request from $name - $service";

    $emailBody = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background-color: #DC0000; color: white; padding: 20px; text-align: center; }
            .content { background-color: #f9f9f9; padding: 20px; border: 1px solid #ddd; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #DC0000; }
            .footer { margin-top: 20px; padding: 15px; background-color: #1a1a1a; color: #999; text-align: center; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>New Quote Request</h1>
            </div>
            <div class='content'>
                <div class='field'><span class='label'>Name:</span> $name</div>
                <div class='field'><span class='label'>Email:</span> $email</div>
                <div class='field'><span class='label'>Phone:</span> $phone</div>
                <div class='field'><span class='label'>Service:</span> $service</div>
                <div class='field'><span class='label'>City:</span> $city</div>
                <div class='field'><span class='label'>Message:</span><br>" . nl2br($message) . "</div>
                <div class='field'><span class='label'>Submitted:</span> " . date('F j, Y g:i A') . "</div>
                <div class='field'><span class='label'>IP:</span> {$_SERVER['REMOTE_ADDR']}</div>
            </div>
            <div class='footer'>
                DT Painter, LLC | Licensed & Insured CC #13-P-18294-X<br>
                2500 NW 115th Dr, Coral Springs, FL 33065
            </div>
        </div>
    </body>
    </html>
    ";

    // Use server domain for From header
    $serverDomain = str_replace('www.', '', $_SERVER['SERVER_NAME'] ?? 'localhost');

    $headers = [
        'From: DT Painter Website <noreply@' . $serverDomain . '>',
        'Reply-To: ' . $email,
        'Content-Type: text/html; charset=UTF-8',
        'X-Mailer: PHP/' . phpversion()
    ];

    // Attempt email (suppress errors)
    $emailSuccess = @mail($recipientEmail, $subject, $emailBody, implode("\r\n", $headers));
    
    // Attempt auto-reply (best effort)
    if ($emailSuccess) {
        $autoReplySubject = "Thank you for contacting DT Painter!";
        $autoReplyBody = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #DC0000; color: white; padding: 20px; text-align: center; }
                .content { background-color: #f9f9f9; padding: 20px; border: 1px solid #ddd; }
                .footer { margin-top: 20px; padding: 15px; background-color: #1a1a1a; color: #999; text-align: center; font-size: 12px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h1>Thank You, $name!</h1>
                </div>
                <div class='content'>
                    <p>Thank you for contacting DT Painter. We've received your quote request for <strong>$service</strong> and will respond within 24 hours.</p>
                    <p>In the meantime, if you have an urgent question, please don't hesitate to call us at <strong>(954) 250-7399</strong>.</p>
                    <p><strong>What happens next?</strong></p>
                    <ul>
                        <li>We'll review your project details</li>
                        <li>One of our specialists will contact you to discuss your needs</li>
                        <li>We'll schedule a free, no-obligation on-site consultation</li>
                        <li>You'll receive a detailed written quote</li>
                    </ul>
                    <p>We look forward to transforming your space with our factory-finish expertise!</p>
                    <p><strong>Damian Toffani</strong><br>Owner, DT Painter LLC</p>
                </div>
                <div class='footer'>
                    DT Painter, LLC | Licensed & Insured CC #13-P-18294-X<br>
                    2500 NW 115th Dr, Coral Springs, FL 33065<br>
                    Phone: (954) 250-7399 | Email: info@dtpainter.com
                </div>
            </div>
        </body>
        </html>
        ";
        
        $autoReplyHeaders = [
            'From: DT Painter <noreply@' . $serverDomain . '>',
            'Content-Type: text/html; charset=UTF-8',
            'X-Mailer: PHP/' . phpversion()
        ];
        
        @mail($email, $autoReplySubject, $autoReplyBody, implode("\r\n", $autoReplyHeaders));
    }
} catch (Exception $e) {
    // Log but don't fail
    error_log("Email error: " . $e->getMessage());
}

// === ALWAYS return success (leads are saved to file) ===
header('Content-Type: application/json');
echo json_encode([
    'success' => true,
    'message' => 'Thank you! We\'ll contact you within 24 hours.'
]);
