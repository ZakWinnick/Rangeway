<?php
/**
 * Rangeway Energy - Configuration File
 * Centralized configuration for SEO, site settings, and metadata
 */

// Site-wide settings
define('SITE_NAME', 'Rangeway Energy');
define('SITE_TAGLINE', 'Premium EV Charging for America\'s Scenic Routes');
define('SITE_URL', 'https://rangeway.energy');
define('SITE_DOMAIN', 'rangeway.energy');

// Contact information
define('CONTACT_EMAIL', 'hello@rangeway.energy');
define('CONTACT_PHONE', '(650) 420-6300');
define('CONTACT_PHONE_RAW', '6504206300');
define('CONTACT_ADDRESS_STREET', '2661 Market Street STE 85787');
define('CONTACT_ADDRESS_CITY', 'San Francisco');
define('CONTACT_ADDRESS_STATE', 'CA');
define('CONTACT_ADDRESS_ZIP', '94114');

// Social media links
define('SOCIAL_TWITTER', 'https://x.com/rangewayenergy');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/rangewayenergy');
define('SOCIAL_LINKEDIN', 'https://linkedin.com/company/rangewayenergy');
define('SOCIAL_YOUTUBE', 'https://youtube.com/@rangewayenergy');

// Page metadata
$page_meta = [
    'index' => [
        'title' => 'Rangeway Energy | Premium EV Charging for America\'s Scenic Routes',
        'description' => 'America\'s premier scenic-corridor EV charging network. Climate-controlled indoor comfort at every location. Ultra-fast charging meets hospitality-grade amenities along Death Valley, Pacific Coast Highway, and more.',
        'keywords' => 'EV charging, electric vehicle charging, scenic route charging, Death Valley EV charging, Baker California charging station, premium EV amenities',
        'og_image' => SITE_URL . '/images/waystation-exterior1-az.jpg'
    ],
    'about' => [
        'title' => 'About Us | Rangeway Energy - Reimagining EV Charging',
        'description' => 'We\'re building America\'s premier scenic-corridor EV charging network. Indoor comfort guaranteed at every location. Learn about our mission to make EV road trips preferable, not just possible.',
        'keywords' => 'about Rangeway Energy, EV charging network, scenic corridor charging, climate-controlled EV charging',
        'og_image' => SITE_URL . '/images/waystation-exterior1-shasta.jpg'
    ],
    'contact' => [
        'title' => 'Contact Us | Rangeway Energy',
        'description' => 'Get in touch with Rangeway Energy. Whether you\'re an investor, partner, or EV traveler, we\'d love to hear from you. Located in San Francisco, CA.',
        'keywords' => 'contact Rangeway Energy, EV charging inquiries, investment opportunities, partnership inquiries',
        'og_image' => SITE_URL . '/images/waystation-exterior2-jt.jpg'
    ],
    'locations' => [
        'title' => 'Our Locations | Rangeway Energy - Baker Basecamp & Network',
        'description' => 'Explore our Baker Basecamp location and regional Waystations. 6-8 ultra-fast chargers, 3,000 sq ft climate-controlled lounge, 24/7 operations. Gateway to Death Valley and the LA-Vegas corridor.',
        'keywords' => 'Rangeway locations, Baker California charging, Death Valley EV charging, LA to Vegas charging stations, ultra-fast charging',
        'og_image' => SITE_URL . '/images/baker-exterior1.jpg'
    ],
    'team' => [
        'title' => 'Our Team | Rangeway Energy',
        'description' => 'Meet the team building America\'s premier scenic-route charging network. Experienced leadership in hospitality, energy infrastructure, and operational excellence.',
        'keywords' => 'Rangeway team, EV charging leadership, careers at Rangeway Energy',
        'og_image' => SITE_URL . '/images/waystation-exterior-pch.jpg'
    ]
];

// Get metadata for a specific page
function get_page_meta($page) {
    global $page_meta;
    return isset($page_meta[$page]) ? $page_meta[$page] : $page_meta['index'];
}

// Analytics and tracking
define('TINYLYTICS_ID', '9_N5xEnQSTdibXFSDoqf');
define('ENABLE_ANALYTICS', true);

// Rate limiting settings for contact form
define('RATE_LIMIT_ENABLED', true);
define('RATE_LIMIT_MAX_ATTEMPTS', 3);
define('RATE_LIMIT_WINDOW', 3600); // 1 hour in seconds

// Security settings
define('CSRF_TOKEN_NAME', 'rangeway_csrf_token');
define('SESSION_NAME', 'rangeway_session');

// Asset versioning for cache busting
define('ASSET_VERSION', '1.0.0');

// Helper function to generate versioned asset URLs
function asset_url($path) {
    return $path . '?v=' . ASSET_VERSION;
}
