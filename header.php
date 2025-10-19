<?php
/**
 * Rangeway Energy - Header Component
 * Includes meta tags, navigation, and external resource links
 */

// Load configuration
require_once __DIR__ . '/config.php';

// Get current page name
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$meta = get_page_meta($current_page);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title><?php echo htmlspecialchars($meta['title']); ?></title>
    <meta name="title" content="<?php echo htmlspecialchars($meta['title']); ?>">
    <meta name="description" content="<?php echo htmlspecialchars($meta['description']); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($meta['keywords']); ?>">
    <meta name="author" content="Rangeway Energy">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo SITE_URL . '/' . ($current_page === 'index' ? '' : $current_page . '.php'); ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL . '/' . ($current_page === 'index' ? '' : $current_page . '.php'); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($meta['title']); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($meta['description']); ?>">
    <meta property="og:image" content="<?php echo $meta['og_image']; ?>">
    <meta property="og:site_name" content="<?php echo SITE_NAME; ?>">

    <!-- Twitter Card -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo SITE_URL . '/' . ($current_page === 'index' ? '' : $current_page . '.php'); ?>">
    <meta property="twitter:title" content="<?php echo htmlspecialchars($meta['title']); ?>">
    <meta property="twitter:description" content="<?php echo htmlspecialchars($meta['description']); ?>">
    <meta property="twitter:image" content="<?php echo $meta['og_image']; ?>">
    <meta name="twitter:site" content="@rangewayenergy">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "<?php echo SITE_NAME; ?>",
        "url": "<?php echo SITE_URL; ?>",
        "logo": "<?php echo SITE_URL; ?>/banner.png",
        "description": "<?php echo SITE_TAGLINE; ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?php echo CONTACT_ADDRESS_STREET; ?>",
            "addressLocality": "<?php echo CONTACT_ADDRESS_CITY; ?>",
            "addressRegion": "<?php echo CONTACT_ADDRESS_STATE; ?>",
            "postalCode": "<?php echo CONTACT_ADDRESS_ZIP; ?>",
            "addressCountry": "US"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "<?php echo CONTACT_PHONE; ?>",
            "contactType": "Customer Service",
            "email": "<?php echo CONTACT_EMAIL; ?>"
        },
        "sameAs": [
            "<?php echo SOCIAL_TWITTER; ?>",
            "<?php echo SOCIAL_INSTAGRAM; ?>",
            "<?php echo SOCIAL_LINKEDIN; ?>",
            "<?php echo SOCIAL_YOUTUBE; ?>"
        ]
    }
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- External Stylesheets -->
    <link rel="stylesheet" href="<?php echo asset_url('assets/css/main.css'); ?>">

    <?php if (ENABLE_ANALYTICS): ?>
    <!-- Analytics -->
    <script src="https://tinylytics.app/embed/<?php echo TINYLYTICS_ID; ?>.js" defer></script>
    <?php endif; ?>
</head>

<!-- Skip to main content for accessibility -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<nav role="navigation" aria-label="Main navigation">
    <div class="nav-container">
        <a href="index.php" aria-label="Rangeway Energy Home">
            <img src="https://rangeway.energy/banner.png" alt="Rangeway Energy" style="height: 60px; width: auto; display: block;" />
        </a>

        <button class="hamburger"
                onclick="toggleMenu()"
                aria-label="Toggle navigation menu"
                aria-expanded="false"
                aria-controls="navLinks">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="nav-links" id="navLinks">
            <a href="index.php" <?php echo ($current_page === 'index') ? 'aria-current="page"' : ''; ?>>Home</a>
            <a href="about.php" <?php echo ($current_page === 'about') ? 'aria-current="page"' : ''; ?>>About</a>
            <a href="locations.php" <?php echo ($current_page === 'locations') ? 'aria-current="page"' : ''; ?>>Locations</a>
            <a href="https://rangeway.app" target="_blank" rel="noopener noreferrer">Pathfinder Rewards</a>
            <a href="contact.php" <?php echo ($current_page === 'contact') ? 'aria-current="page"' : ''; ?>>Contact</a>
            <div class="social-icons" role="list" aria-label="Social media links">
                <a href="<?php echo SOCIAL_TWITTER; ?>" target="_blank" rel="noopener noreferrer" aria-label="Follow us on X (Twitter)">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank" rel="noopener noreferrer" aria-label="Follow us on Instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="<?php echo SOCIAL_LINKEDIN; ?>" target="_blank" rel="noopener noreferrer" aria-label="Follow us on LinkedIn">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="<?php echo SOCIAL_YOUTUBE; ?>" target="_blank" rel="noopener noreferrer" aria-label="Subscribe to our YouTube channel">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
