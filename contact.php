<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Rangeway Energy</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --sunset-coral: #F09060;
            --golden-highway: #FFB366;
            --mountain-charcoal: #2A2A2A;
            --coastal-cream: #F5DEB3;
            --ocean-deep: #1a3a4a;
            --fog-gray: #B8B8B8;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: var(--coastal-cream);
            background: var(--mountain-charcoal);
        }

        /* Toast Notification */
        .toast {
            position: fixed;
            top: 100px;
            right: 20px;
            background: linear-gradient(135deg, var(--sunset-coral), var(--golden-highway));
            color: var(--mountain-charcoal);
            padding: 1.2rem 1.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(240, 144, 96, 0.4);
            z-index: 10000;
            display: flex;
            align-items: center;
            gap: 1rem;
            min-width: 300px;
            max-width: 500px;
            transform: translateX(600px);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .toast.show {
            transform: translateX(0);
            opacity: 1;
        }

        .toast.error {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: white;
        }

        .toast-icon {
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .toast-content {
            flex: 1;
        }

        .toast-title {
            font-weight: 700;
            font-size: 1rem;
            margin-bottom: 0.2rem;
        }

        .toast-message {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .toast-close {
            background: none;
            border: none;
            color: inherit;
            font-size: 1.3rem;
            cursor: pointer;
            padding: 0;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0.7;
            transition: opacity 0.3s;
        }

        .toast-close:hover {
            opacity: 1;
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(42, 42, 42, 0.95);
            backdrop-filter: blur(20px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
        }

        .nav-container {
            max-width: 1600px;
            margin: 0 auto;
            padding: 1.2rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-text {
            font-size: 1.6rem;
            font-weight: 800;
            letter-spacing: 0.1em;
            background: linear-gradient(135deg, var(--sunset-coral), var(--golden-highway));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            color: var(--coastal-cream);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }

        .nav-links a:hover {
            color: var(--golden-highway);
        }

        .nav-cta {
            background: linear-gradient(135deg, var(--sunset-coral), var(--golden-highway));
            color: var(--mountain-charcoal);
            padding: 0.8rem 1.8rem;
            border-radius: 12px;
            font-weight: 600;
        }

        .social-icons {
            display: flex;
            gap: 1rem;
        }

        .social-icons a {
            color: var(--coastal-cream);
            font-size: 1.2rem;
            transition: all 0.3s;
        }

        .social-icons a:hover {
            color: var(--golden-highway);
        }

        /* Hero */
        /* Hero */
.hero {
    margin-top: 82px;
    min-height: 82vh;
    display: flex;
    align-items: center;
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                      url('images/waystation-exterior2-jt.jpg');
    background-position: center 30%;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

@media (max-width: 768px) {
    .hero {
        background-attachment: scroll !important;
        background-position: center center !important;
        min-height: 40vh;
    }
}
        .hero-content {
            max-width: 1600px;
            margin: 0 auto;
            padding: 4rem 2rem;
            text-align: center;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 900;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8);
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.5rem;
            color: var(--golden-highway);
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
        }

        /* Sections */
        section {
            padding: 6rem 0;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 4rem;
            align-items: start;
        }

        .contact-info h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, var(--golden-highway), var(--sunset-coral));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .contact-info p {
            color: var(--fog-gray);
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 2rem;
        }

        .info-card {
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            margin-bottom: 1.5rem;
        }

        .info-card h4 {
            color: var(--golden-highway);
            margin-bottom: 0.8rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .info-card p {
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }

        .info-card a {
            color: var(--coastal-cream);
            text-decoration: none;
            transition: color 0.3s;
        }

        .info-card a:hover {
            color: var(--golden-highway);
        }

        .contact-form {
            padding: 2.5rem;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .contact-form h3 {
            font-size: 1.8rem;
            color: var(--golden-highway);
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--coastal-cream);
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.8rem 1rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            color: var(--coastal-cream);
            font-family: inherit;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--golden-highway);
            background: rgba(255, 255, 255, 0.08);
        }

        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }

        .btn-submit {
            background: linear-gradient(135deg, var(--sunset-coral), var(--golden-highway));
            color: var(--mountain-charcoal);
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(240, 144, 96, 0.4);
        }

        .btn-submit:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .social-connect {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .social-connect h4 {
            color: var(--golden-highway);
            margin-bottom: 1rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .social-link {
            padding: 0.8rem 1.5rem;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            color: var(--coastal-cream);
            text-decoration: none;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .social-link:hover {
            background: rgba(255, 255, 255, 0.05);
            border-color: var(--golden-highway);
            color: var(--golden-highway);
            transform: translateY(-2px);
        }

        /* Footer */
        footer {
            background: rgba(0, 0, 0, 0.4);
            color: var(--coastal-cream);
            padding: 3rem 0 2rem;
        }

        .footer-content {
            max-width: 1600px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h4 {
            margin-bottom: 1rem;
            color: var(--golden-highway);
        }

        .footer-section p, .footer-section a {
            color: var(--fog-gray);
            text-decoration: none;
            line-height: 1.8;
            transition: color 0.3s;
            display: block;
        }

        .footer-section a:hover {
            color: var(--coastal-cream);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(245, 222, 179, 0.1);
            color: var(--fog-gray);
            max-width: 1600px;
            margin: 0 auto;
            padding-left: 2rem;
            padding-right: 2rem;
        }

        /* Hamburger Menu */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 5px;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background: var(--coastal-cream);
            margin: 3px 0;
            transition: all 0.3s;
            border-radius: 2px;
        }

        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(8px, 8px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -7px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hamburger {
                display: flex;
            }

            .nav-links {
                display: flex !important;
                position: fixed;
                top: 82px;
                right: -100%;
                width: 280px;
                height: calc(100vh - 82px);
                background: rgba(42, 42, 42, 0.98);
                backdrop-filter: blur(20px);
                flex-direction: column;
                padding: 2rem;
                gap: 1.5rem;
                transition: right 0.3s ease;
                box-shadow: -4px 0 20px rgba(0, 0, 0, 0.5);
                overflow-y: auto;
            }

            .nav-links.active {
                right: 0;
            }

            .nav-links a {
                font-size: 1.1rem;
                padding: 0.5rem 0;
                border-bottom: 1px solid rgba(245, 222, 179, 0.1);
            }

            .social-icons {
                flex-direction: row;
                padding-top: 1rem;
                border-top: 1px solid rgba(245, 222, 179, 0.2);
            }

            .nav-cta {
                margin-top: 1rem;
                text-align: center;
                padding: 1rem 2rem !important;
                display: block;
            }

            /* Mobile Hero Fix */
            .hero {
                background-attachment: scroll !important;
                min-height: 40vh;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }

            .social-links {
                flex-direction: column;
            }

            .toast {
                right: 10px;
                left: 10px;
                min-width: auto;
            }
        }
    </style>
</head>
<body>
    <!-- Toast Container -->
    <div id="toast" class="toast">
        <span class="toast-icon">✓</span>
        <div class="toast-content">
            <div class="toast-title">Success!</div>
            <div class="toast-message">Your message has been sent.</div>
        </div>
        <button class="toast-close" onclick="hideToast()">×</button>
    </div>

    <?php include 'header.php'; ?>

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
                        <p>2661 Market Street STE 85787</p>
                        <p>San Francisco, CA 94114</p>
                    </div>

                    <div class="info-card">
                        <h4>📧 Email</h4>
                        <p><a href="mailto:hello@rangeway.energy">hello@rangeway.energy</a></p>
                        <p><a href="mailto:invest@rangeway.energy">invest@rangeway.energy</a> (Investment inquiries)</p>
                    </div>

                    <div class="info-card">
                        <h4>📞 Phone</h4>
                        <p><a href="tel:6504206300">(650) 420-6300</a></p>
                    </div>

                    <div class="social-connect">
                        <h4>Connect With Us</h4>
                        <div class="social-links">
                            <a href="https://x.com/rangewayenergy" target="_blank" class="social-link">
                                <span>𝕏</span> X (Twitter)
                            </a>
                            <a href="https://instagram.com/rangewayenergy" target="_blank" class="social-link">
                                <span>📷</span> Instagram
                            </a>
                            <a href="https://linkedin.com/company/rangeway-energy" target="_blank" class="social-link">
                                <span>in</span> LinkedIn
                            </a>
                            <a href="https://youtube.com/@rangewayenergy" target="_blank" class="social-link">
                                <span>▶</span> YouTube
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <h3>Send Us A Message</h3>
                    <form action="contact-handler.php" method="POST" id="contactForm">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone">
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" required>
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
                            <textarea id="message" name="message" required></textarea>
                        </div>

                        <button type="submit" class="btn-submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
        // Toast notification functions
        function showToast(title, message, isError = false) {
            const toast = document.getElementById('toast');
            const toastIcon = toast.querySelector('.toast-icon');
            const toastTitle = toast.querySelector('.toast-title');
            const toastMessage = toast.querySelector('.toast-message');
            
            // Set content
            toastTitle.textContent = title;
            toastMessage.textContent = message;
            
            // Set icon and style
            if (isError) {
                toast.classList.add('error');
                toastIcon.textContent = '✕';
            } else {
                toast.classList.remove('error');
                toastIcon.textContent = '✓';
            }
            
            // Show toast
            toast.classList.add('show');
            
            // Auto-hide after 5 seconds
            setTimeout(() => {
                hideToast();
            }, 5000);
        }
        
        function hideToast() {
            const toast = document.getElementById('toast');
            toast.classList.remove('show');
            
            // Clean URL after hiding toast
            setTimeout(() => {
                if (window.location.search) {
                    window.history.replaceState({}, document.title, window.location.pathname);
                }
            }, 400);
        }
        
        // Check URL parameters on page load
        window.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            
            if (urlParams.get('success') === '1') {
                showToast(
                    'Message Sent!', 
                    'Thank you for contacting us. We\'ll get back to you within 24 hours.',
                    false
                );
                
                // Reset form
                document.getElementById('contactForm').reset();
            } else if (urlParams.get('error') === '1') {
                showToast(
                    'Error', 
                    'There was a problem sending your message. Please try again or email us directly.',
                    true
                );
            } else if (urlParams.get('error') === 'invalid_email') {
                showToast(
                    'Invalid Email', 
                    'Please provide a valid email address.',
                    true
                );
            }
        });
        
        // Form submission handling
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('.btn-submit');
            submitBtn.disabled = true;
            submitBtn.textContent = 'Sending...';
        });

        function toggleMenu() {
            const navLinks = document.getElementById('navLinks');
            const hamburger = document.querySelector('.hamburger');
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('active');
        }

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            const navLinks = document.getElementById('navLinks');
            const hamburger = document.querySelector('.hamburger');
            const nav = document.querySelector('nav');
            
            if (!nav.contains(event.target) && navLinks.classList.contains('active')) {
                navLinks.classList.remove('active');
                hamburger.classList.remove('active');
            }
        });

        // Close menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function() {
                const navLinks = document.getElementById('navLinks');
                const hamburger = document.querySelector('.hamburger');
                navLinks.classList.remove('active');
                hamburger.classList.remove('active');
            });
        });
    </script>
</body>
</html>