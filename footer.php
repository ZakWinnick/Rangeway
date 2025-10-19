<?php
/**
 * Rangeway Energy - Footer Component
 * Includes footer content and external JavaScript
 */

// Load configuration if not already loaded
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}
?>
<footer>
    <div class="footer-content">
        <div class="footer-section">
            <h4><?php echo SITE_NAME; ?></h4>
            <p><?php echo SITE_TAGLINE; ?>.</p>
            <p style="margin-top: 1rem;">Building the network EV travelers deserve.</p>
        </div>
        <div class="footer-section">
            <h4>Network</h4>
            <a href="locations.php">Our Locations</a>
            <a href="https://rangeway.app" target="_blank" rel="noopener noreferrer">Pathfinder Rewards</a>
            <a href="about.php">About Us</a>
        </div>
        <div class="footer-section">
            <h4>Company</h4>
            <a href="https://investors.rangeway.energy" target="_blank" rel="noopener noreferrer">Investor Portal</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="footer-section">
            <h4>Connect</h4>
            <p><?php echo CONTACT_ADDRESS_STREET; ?></p>
            <p><?php echo CONTACT_ADDRESS_CITY . ', ' . CONTACT_ADDRESS_STATE . ' ' . CONTACT_ADDRESS_ZIP; ?></p>
            <p style="margin-top: 1rem;"><a href="tel:<?php echo CONTACT_PHONE_RAW; ?>"><?php echo CONTACT_PHONE; ?></a></p>
            <p><a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a></p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
    </div>
</footer>

<!-- External JavaScript -->
<script src="<?php echo asset_url('assets/js/main.js'); ?>"></script>
