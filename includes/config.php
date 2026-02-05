<?php
/**
 * DT Painter - Configuration File
 * Contains site-wide settings and constants
 */

// Site Information
define('SITE_NAME', 'DT Painter');
define('SITE_TAGLINE', 'Expert Painting Services in Coral Springs, FL');
define('SITE_PHONE', '(954) 555-1234'); // Replace with actual
define('SITE_EMAIL', 'info@dtpainter.com'); // Replace with actual

// Social Media (update with actual links)
define('SOCIAL_FACEBOOK', '');
define('SOCIAL_INSTAGRAM', '');
define('SOCIAL_GOOGLE', '');

// Business Info for Schema
define('BUSINESS_ADDRESS', 'Coral Springs, FL');
define('BUSINESS_HOURS', 'Mo-Fr 08:00-18:00, Sa 09:00-14:00');

// Helper function to get asset path
function asset($path) {
    return '/assets/' . ltrim($path, '/');
}

// Helper function to get current year
function currentYear() {
    return date('Y');
}
