<?php
/**
/**
 * DT Painter - Configuration File
 * Contains site-wide settings and constants
 */

// Function to safely load environment variables
if (!defined('allowed')) define('allowed', true);

// Include secrets if available
if (file_exists(__DIR__ . '/secrets.php')) {
    include_once __DIR__ . '/secrets.php';
}

// Define defaults if not set (for development/git clones)
if (!defined('TURNSTILE_SITE_KEY')) define('TURNSTILE_SITE_KEY', '');
if (!defined('TURNSTILE_SECRET_KEY')) define('TURNSTILE_SECRET_KEY', '');
if (!defined('FORM_RECIPIENT')) define('FORM_RECIPIENT', 'info@dtpainter.com');

// Site Information
define('SITE_NAME', 'DT Painter');
define('SITE_TAGLINE', 'Expert Painting Services in Coral Springs, FL');
define('SITE_PHONE', '(954) 250-7399');
define('SITE_EMAIL', 'info@dtpainter.com'); // Replace with actual

// Social Media (update with actual links)
define('SOCIAL_FACEBOOK', 'https://www.facebook.com/dtpainter');
define('SOCIAL_INSTAGRAM', 'https://www.instagram.com/dtpainterllc/');
define('SOCIAL_LINKEDIN', 'https://www.linkedin.com/company/dt-painter-llc-/about/');

// Business Info for Schema
define('BUSINESS_ADDRESS', '2500 NW 115th Dr, Coral Springs, FL 33065');
define('BUSINESS_HOURS', 'Mo-Fr 08:00-18:00, Sa 09:00-14:00');

// Cloudinary Configuration
define('CLOUDINARY_CLOUD_NAME', 'dnwirrcev');
define('CLOUDINARY_LOGO_ID', 'dt-painter-coral-springs-logo_bnldfl');


// Helper function to get asset path
function asset($path) {
    return '/assets/' . ltrim($path, '/');
}

// Helper function to get current year
function currentYear() {
    return date('Y');
}
