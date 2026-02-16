<?php
/**
 * Contact Form Handler
 * Processes contact form submissions with Cloudflare Turnstile verification
 */

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    exit('Method not allowed');
}

// Configuration
$recipientEmail = 'info@dtpainter.com'; // Change to your actual email
$turnstileSecretKey = 'YOUR_TURNSTILE_SECRET_KEY'; // Replace with your actual Turnstile secret key

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
            <div class='field'>
                <span class='label'>Name:</span> $name
            </div>
            <div class='field'>
                <span class='label'>Email:</span> $email
            </div>
            <div class='field'>
                <span class='label'>Phone:</span> $phone
            </div>
            <div class='field'>
                <span class='label'>Service Interest:</span> $service
            </div>
            <div class='field'>
                <span class='label'>City:</span> $city
            </div>
            <div class='field'>
                <span class='label'>Message:</span><br>
                " . nl2br($message) . "
            </div>
            <div class='field'>
                <span class='label'>Submitted:</span> " . date('F j, Y g:i A') . "
            </div>
            <div class='field'>
                <span class='label'>IP Address:</span> {$_SERVER['REMOTE_ADDR']}
            </div>
        </div>
        <div class='footer'>
            DT Painter, LLC | Licensed & Insured CC #13-P-18294-X<br>
            2500 NW 115th Dr, Coral Springs, FL 33065
        </div>
    </div>
</body>
</html>
";

// Email headers
$headers = [
    'From: DT Painter Website <noreply@dtpainter.com>',
    'Reply-To: ' . $email,
    'Content-Type: text/html; charset=UTF-8',
    'X-Mailer: PHP/' . phpversion()
];

// Send email
$emailSent = mail($recipientEmail, $subject, $emailBody, implode("\r\n", $headers));

// Send auto-reply to customer
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
            
            <p><strong>Damian Toffani</strong><br>
            Owner, DT Painter LLC</p>
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
    'From: DT Painter <info@dtpainter.com>',
    'Content-Type: text/html; charset=UTF-8',
    'X-Mailer: PHP/' . phpversion()
];

mail($email, $autoReplySubject, $autoReplyBody, implode("\r\n", $autoReplyHeaders));

// Return success response
header('Content-Type: application/json');
echo json_encode([
    'success' => true,
    'message' => 'Thank you! We\'ll contact you within 24 hours.'
]);
