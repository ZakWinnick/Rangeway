<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
    <link rel="stylesheet" href="<?php echo asset_url('assets/css/contact.css'); ?>">
</head>
<body>

<!-- Toast Container -->
<div id="toast" class="toast">
    <span class="toast-icon">✓</span>
    <div class="toast-content">
        <div class="toast-title">Success!</div>
        <div class="toast-message">Your message has been sent.</div>
    </div>
    <button class="toast-close" onclick="hideToast()" aria-label="Close notification">×</button>
</div>

<main id="main-content">
    <section class="hero">
        <div class="hero-content">
            <h1>Get In Touch</h1>
            <p>Let's talk about the future of EV charging</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Contact Information</h2>
                    <p>Whether you're an investor, potential partner, or EV traveler interested in our network, we'd love to hear from you.</p>

                    <div class="info-card">
                        <h4>📍 Address</h4>
                        <p><?php echo CONTACT_ADDRESS_STREET; ?></p>
                        <p><?php echo CONTACT_ADDRESS_CITY . ', ' . CONTACT_ADDRESS_STATE . ' ' . CONTACT_ADDRESS_ZIP; ?></p>
                    </div>

                    <div class="info-card">
                        <h4>📧 Email</h4>
                        <p><a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a></p>
                        <p><a href="mailto:invest@rangeway.energy">invest@rangeway.energy</a> (Investment inquiries)</p>
                    </div>

                    <div class="info-card">
                        <h4>📞 Phone</h4>
                        <p><a href="tel:<?php echo CONTACT_PHONE_RAW; ?>"><?php echo CONTACT_PHONE; ?></a></p>
                    </div>

                    <div class="social-connect">
                        <h4>Connect With Us</h4>
                        <div class="social-links">
                            <a href="<?php echo SOCIAL_TWITTER; ?>" target="_blank" rel="noopener noreferrer" class="social-link">
                                <span>𝕏</span> X (Twitter)
                            </a>
                            <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank" rel="noopener noreferrer" class="social-link">
                                <span>📷</span> Instagram
                            </a>
                            <a href="<?php echo SOCIAL_LINKEDIN; ?>" target="_blank" rel="noopener noreferrer" class="social-link">
                                <span>in</span> LinkedIn
                            </a>
                            <a href="<?php echo SOCIAL_YOUTUBE; ?>" target="_blank" rel="noopener noreferrer" class="social-link">
                                <span>▶</span> YouTube
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <h3>Send Us A Message</h3>
                    <form action="contact-handler.php" method="POST" id="contactForm">
                        <!-- Honeypot field - hidden from users, visible to bots -->
                        <div class="honeypot" aria-hidden="true">
                            <label for="website">Website (leave blank)</label>
                            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" required aria-required="true">
                        </div>

                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required aria-required="true">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone">
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" required aria-required="true">
                                <option value="">Select a topic...</option>
                                <option value="general">General Inquiry</option>
                                <option value="investment">Investment Opportunity</option>
                                <option value="partnership">Partnership</option>
                                <option value="press">Press & Media</option>
                                <option value="careers">Careers</option>
                                <option value="support">Customer Support</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" required aria-required="true"></textarea>
                        </div>

                        <button type="submit" class="btn-submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>

<script src="<?php echo asset_url('assets/js/contact.js'); ?>"></script>

</body>
</html>
