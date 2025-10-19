<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <script src="https://tinylytics.app/embed/9_N5xEnQSTdibXFSDoqf.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Rangeway Energy | Premium EV Charging for America's Scenic Routes</title>
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

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(42, 42, 42, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
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
            background-clip: text;
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
            position: relative;
        }

        .nav-links a:hover {
            color: var(--golden-highway);
        }

        .nav-cta {
            background: linear-gradient(135deg, var(--sunset-coral), var(--golden-highway)) !important;
            color: #FFFFFF !important;
            padding: 0.8rem 1.8rem;
            border-radius: 12px;
            font-weight: 700;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3) !important;
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
            transform: translateY(-2px);
        }

        /* Hero Section */
        /* Hero Section */
.hero {
    margin-top: 82px;
    min-height: 85vh; /* Reduced from 100vh */
    display: flex;
    align-items: center;
    position: relative;
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                      url('https://rangeway.energy/images/waystation-exterior1-az.jpg');
    background-position: center 40%;
    background-size: cover;
    background-repeat: no-repeat;
}

        .hero-content {
            max-width: 1600px;
            margin: 0 auto;
            padding: 4rem 2rem;
            text-align: center;
        }

        .hero h1 {
            font-size: 4.5rem;
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8);
        }

        .hero .tagline {
            font-size: 1.8rem;
            margin-bottom: 2rem;
            color: var(--golden-highway);
            font-weight: 300;
            font-style: italic;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
        }

        .hero p {
            font-size: 1.4rem;
            margin-bottom: 3rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            color: white;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
        }

        .hero-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-primary, .btn-secondary {
            padding: 1.2rem 2.5rem;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s;
            display: inline-block;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--sunset-coral), var(--golden-highway));
            color: var(--mountain-charcoal);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(240, 144, 96, 0.4);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 2px solid var(--golden-highway);
            backdrop-filter: blur(10px);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }

        /* Sections */
        section {
            padding: 6rem 0;
        }

        .container {
            max-width: 1600px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-header h2 {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--golden-highway), var(--sunset-coral));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-header p {
            font-size: 1.2rem;
            color: var(--fog-gray);
            max-width: 800px;
            margin: 0 auto;
        }

        /* Features Grid */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
        }

        .feature-card {
            padding: 2.5rem;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            background: rgba(255, 255, 255, 0.05);
            box-shadow: 0 20px 40px rgba(240, 144, 96, 0.2);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--golden-highway);
        }

        .feature-card p {
            color: var(--fog-gray);
            line-height: 1.8;
        }

        /* Location Showcase */
        .location-showcase {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url('') center/cover;
            background-attachment: fixed;
        }

        .location-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .location-text h2 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: white;
        }

        .location-text p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: var(--coastal-cream);
            line-height: 1.8;
        }

        .location-stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .stat-box {
            padding: 1.5rem;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--golden-highway), var(--sunset-coral));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: block;
        }

        .stat-label {
            color: var(--fog-gray);
            font-size: 0.9rem;
        }

        /* Network Types Section */
        .network-types-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: start;
        }

        .network-type-card {
            padding: 3rem;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.03);
            border: 2px solid rgba(255, 179, 102, 0.3);
        }

        .network-type-icon {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
        }

        .network-type-card h3 {
            font-size: 2rem;
            color: var(--golden-highway);
            margin-bottom: 1rem;
        }

        .network-type-card > p {
            font-size: 1.1rem;
            color: var(--fog-gray);
            line-height: 1.8;
            margin-bottom: 2rem;
        }

        .network-features {
            display: grid;
            gap: 1rem;
        }

        .network-feature-item {
            display: flex;
            align-items: start;
            gap: 1rem;
        }

        .network-feature-item .emoji {
            color: var(--sunset-coral);
            font-size: 1.3rem;
        }

        .network-feature-item strong {
            color: var(--coastal-cream);
            display: block;
        }

        .network-feature-item span {
            color: var(--fog-gray);
            font-size: 0.95rem;
        }

        .comfort-guarantee {
            text-align: center;
            margin-top: 3rem;
            padding: 2rem;
            background: rgba(240, 144, 96, 0.1);
            border-radius: 16px;
            border: 1px solid rgba(240, 144, 96, 0.2);
        }

        .comfort-guarantee p:first-of-type {
            font-size: 1.3rem;
            color: var(--coastal-cream);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .comfort-guarantee p:last-of-type {
            font-size: 1.05rem;
            color: var(--fog-gray);
            max-width: 800px;
            margin: 0 auto;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--sunset-coral), var(--golden-highway));
            color: var(--mountain-charcoal);
        }

        .cta-section h2 {
            color: var(--mountain-charcoal);
            font-size: 3rem;
            margin-bottom: 1.5rem;
            background: none !important;
            -webkit-background-clip: unset !important;
            -webkit-text-fill-color: var(--mountain-charcoal) !important;
            background-clip: unset !important;
        }

        .cta-section p {
            color: var(--ocean-deep);
            font-size: 1.3rem;
            margin-bottom: 2.5rem;
        }

        .cta-btn {
            color: var(--mountain-charcoal);
            border-color: var(--mountain-charcoal);
            margin: 0.5rem;
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

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero .tagline {
                font-size: 1.2rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .location-content {
                grid-template-columns: 1fr;
            }

            .location-stats {
                grid-template-columns: 1fr;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .network-types-grid {
                grid-template-columns: 1fr;
            }

            .cta-btn {
                display: block;
                width: calc(100% - 2rem);
                max-width: 320px;
                margin: 0 auto 1rem auto;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Rangeway Energy</h1>
            <p class="tagline">Where charging becomes part of your journey</p>
            <p>America's premier scenic-corridor EV charging network. Climate-controlled indoor comfort at every location. Ultra-fast charging meets hospitality-grade amenities.</p>
            <div class="hero-buttons">
                <a href="locations.php" class="btn-primary">Explore Our Network</a>
                <a href="https://fieldnotes.rangeway.energy" target="_blank" class="btn-secondary">Subscribe to Field Notes</a>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header">
                <h2>The Rangeway Difference</h2>
                <p>Premium charging experiences designed for the journey, not just the destination</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🏔️</div>
                    <h3>Indoor Comfort Guaranteed</h3>
                    <p>Every Rangeway location features climate-controlled lounges. No more waiting in parking lots—experience true hospitality while you charge.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3>Ultra-Fast Charging</h3>
                    <p>State-of-the-art DC fast charging infrastructure delivers the power you need to get back on the road quickly.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🎯</div>
                    <h3>99% Uptime Commitment</h3>
                    <p>24/7 network monitoring and rapid response teams ensure you can count on us when you need us most.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🌄</div>
                    <h3>Scenic Destinations</h3>
                    <p>Strategically located along America's most beautiful highways. Make charging a highlight of your journey.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">☕</div>
                    <h3>Premium Amenities</h3>
                    <p>Quality food and beverage, spotless restrooms, and comfortable seating. Charging reimagined.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🤝</div>
                    <h3>Pathfinder Rewards</h3>
                    <p>Join our membership program for exclusive discounts, priority access, and special perks designed for road warriors.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="location-showcase">
        <div class="container">
            <div class="location-content">
                <div class="location-text">
                    <h2>Baker Basecamp (Opening Soon)</h2>
                    <p>Our flagship regional hub anchors the gateway to Death Valley and the LA-Vegas corridor. This full-service Basecamp features ultra-fast charging, a premium café, and climate-controlled lounges designed for travelers exploring one of America's most iconic landscapes.</p>
                    <p>Located at the gateway to Death Valley National Park, which welcomes over 1.1 million visitors annually, the Baker Basecamp also houses our regional Network Operations Center, providing 24/7 monitoring and maintenance support.</p>
                    
                    <div class="location-stats">
                        <div class="stat-box">
                            <span class="stat-number">6-8</span>
                            <span class="stat-label">Ultra-Fast Chargers</span>
                        </div>
                        <div class="stat-box">
                            <span class="stat-number">3,000</span>
                            <span class="stat-label">Sq Ft Indoor Lounge</span>
                        </div>
                        <div class="stat-box">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Staffed Operations</span>
                        </div>
                        <div class="stat-box">
                            <span class="stat-number">99%</span>
                            <span class="stat-label">Uptime Guarantee</span>
                        </div>
                    </div>
                    
                    <a href="locations.php" class="btn-primary" style="margin-top: 2rem;">View Location Details</a>
                </div>
                <div class="location-image" style="padding-left: 2rem;">
                    <img src="images/baker-exterior2.jpg" alt="Baker Basecamp - Architectural rendering showing climate-controlled lounge and ultra-fast charging stations" style="width: 100%; height: 100%; object-fit: cover; border-radius: 20px; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);">
                </div>
            </div>
        </div>
    </section>

    <section style="background: rgba(0, 0, 0, 0.2);">
        <div class="container">
            <div class="section-header">
                <h2>How Our Network Works</h2>
                <p>Baker is just the beginning—we're building two types of locations to serve you on every scenic route</p>
            </div>
            
            <div class="network-types-grid">
                <!-- Basecamps -->
                <div class="network-type-card">
                    <div class="network-type-icon">🏕️</div>
                    <h3>Basecamps</h3>
                    <p>Our flagship destination hubs feature everything you need for a premium road trip experience.</p>
                    
                    <div class="network-features">
                        <div class="network-feature-item">
                            <span class="emoji">⚡</span>
                            <div>
                                <strong>6-8 ultra-fast chargers</strong>
                                <span>High-power DC fast charging</span>
                            </div>
                        </div>
                        
                        <div class="network-feature-item">
                            <span class="emoji">🏔️</span>
                            <div>
                                <strong>3,000 sq ft indoor lounge</strong>
                                <span>Climate-controlled comfort</span>
                            </div>
                        </div>
                        
                        <div class="network-feature-item">
                            <span class="emoji">☕</span>
                            <div>
                                <strong>Premium café & restrooms</strong>
                                <span>Quality food & hospitality-grade facilities</span>
                            </div>
                        </div>
                        
                        <div class="network-feature-item">
                            <span class="emoji">👥</span>
                            <div>
                                <strong>Staffed 24/7</strong>
                                <span>Friendly Trailkeepers ready to help</span>
                            </div>
                        </div>
                        
                        <div class="network-feature-item">
                            <span class="emoji">🎯</span>
                            <div>
                                <strong>99% uptime guarantee</strong>
                                <span>Regional monitoring hub</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Waystations -->
                <div class="network-type-card">
                    <div class="network-type-icon">📍</div>
                    <h3>Waystations</h3>
                    <p>Automated charging stops that deliver the same indoor comfort promise in a streamlined format.</p>
                    
                    <div class="network-features">
                        <div class="network-feature-item">
                            <span class="emoji">⚡</span>
                            <div>
                                <strong>2-3 ultra-fast chargers</strong>
                                <span>Same high-power charging technology</span>
                            </div>
                        </div>
                        
                        <div class="network-feature-item">
                            <span class="emoji">🏔️</span>
                            <div>
                                <strong>Climate-controlled lounge</strong>
                                <span>Comfortable indoor space—no parking lot waits</span>
                            </div>
                        </div>
                        
                        <div class="network-feature-item">
                            <span class="emoji">🤖</span>
                            <div>
                                <strong>Automated retail & facilities</strong>
                                <span>24/7 self-service convenience</span>
                            </div>
                        </div>
                        
                        <div class="network-feature-item">
                            <span class="emoji">📡</span>
                            <div>
                                <strong>Monitored by nearby Basecamp</strong>
                                <span>Rapid response support when needed</span>
                            </div>
                        </div>
                        
                        <div class="network-feature-item">
                            <span class="emoji">🎯</span>
                            <div>
                                <strong>98% uptime commitment</strong>
                                <span>Reliable charging you can count on</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="comfort-guarantee">
                <p>🏔️ Our Promise: Indoor Comfort at Every Location</p>
                <p>Whether you stop at a full-service Basecamp or an automated Waystation, you'll always find a climate-controlled lounge where you can escape the elements and recharge—yourself and your EV.</p>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="section-header">
                <h2>Join the Journey</h2>
                <p>Be part of building America's premier scenic-route charging network</p>
            </div>
            
            <div style="text-align: center;">
                <a href="https://investors.rangeway.energy" target="_blank" class="btn-secondary cta-btn">Investor Portal</a>
                <a href="https://fieldnotes.rangeway.energy" target="_blank" class="btn-secondary cta-btn">Subscribe to Field Notes</a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
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