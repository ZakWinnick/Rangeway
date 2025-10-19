<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Locations | Rangeway Energy</title>
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
    min-height: 65vh; /* Reduced from 70vh */
    display: flex;
    align-items: center;
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                      url('https://rangeway.energy/images/baker-exterior1.jpg');
    background-position: center 45%;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

@media (max-width: 768px) {
    .hero {
        background-attachment: scroll !important;
        background-position: center center !important;
        min-height: 50vh;
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
            max-width: 800px;
            margin: 0 auto;
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

        .location-hero {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            margin-bottom: 4rem;
        }

        .location-info h2 {
            font-size: 3rem;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--golden-highway), var(--sunset-coral));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .location-info .status {
            display: inline-block;
            padding: 0.5rem 1rem;
            background: rgba(240, 144, 96, 0.2);
            border: 1px solid var(--sunset-coral);
            border-radius: 8px;
            color: var(--sunset-coral);
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .location-info p {
            font-size: 1.2rem;
            color: var(--fog-gray);
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .quick-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-top: 2rem;
        }

        .stat-badge {
            padding: 1rem;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .stat-badge .number {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--golden-highway);
            display: block;
        }

        .stat-badge .label {
            font-size: 0.9rem;
            color: var(--fog-gray);
        }

        .map-placeholder {
            height: 500px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 1rem;
        }

        .map-placeholder .icon {
            font-size: 4rem;
        }

        .map-placeholder p {
            color: var(--fog-gray);
            font-size: 1.1rem;
        }

        .features-showcase {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .feature-box {
            padding: 2rem;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s;
        }

        .feature-box:hover {
            background: rgba(255, 255, 255, 0.05);
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(240, 144, 96, 0.2);
        }

        .feature-box .icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .feature-box h4 {
            font-size: 1.2rem;
            color: var(--golden-highway);
            margin-bottom: 0.5rem;
        }

        .feature-box p {
            color: var(--fog-gray);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--golden-highway), var(--sunset-coral));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .section-header p {
            font-size: 1.1rem;
            color: var(--fog-gray);
        }

        .alt-bg {
            background: rgba(0, 0, 0, 0.2);
        }

        .amenities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
        }

        .amenity-item {
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 12px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .amenity-item .icon {
            font-size: 2rem;
            margin-bottom: 0.8rem;
        }

        .amenity-item p {
            color: var(--coastal-cream);
            font-weight: 500;
        }

        /* Network Coverage Styles */
        .network-cards-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: start;
        }

        .network-location-card {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 20px;
            overflow: hidden;
            border: 2px solid rgba(255, 179, 102, 0.3);
        }

        .network-location-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .network-card-content {
            padding: 2rem;
        }

        .network-card-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .network-card-header span {
            font-size: 2.5rem;
        }

        .network-card-header h3 {
            font-size: 1.8rem;
            color: var(--golden-highway);
            margin: 0;
        }

        .network-card-content > p {
            color: var(--fog-gray);
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .network-stats-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.8rem;
        }

        .network-stat-item {
            padding: 0.8rem;
            background: rgba(255, 179, 102, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        .network-stat-item .value {
            color: var(--golden-highway);
            font-weight: 700;
            font-size: 1.3rem;
        }

        .network-stat-item .label {
            color: var(--fog-gray);
            font-size: 0.85rem;
        }

        .network-comfort-box {
            margin-top: 3rem;
            padding: 2.5rem;
            background: rgba(240, 144, 96, 0.1);
            border-radius: 16px;
            border: 1px solid rgba(240, 144, 96, 0.2);
            text-align: center;
        }

        .network-comfort-box h4 {
            color: var(--golden-highway);
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .network-comfort-box p {
            font-size: 1.1rem;
            color: var(--fog-gray);
            line-height: 1.8;
            max-width: 900px;
            margin: 0 auto;
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

            /* Mobile Hero Fixes */
            .hero {
                background-attachment: scroll !important;
                min-height: 50vh;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .location-hero {
                grid-template-columns: 1fr;
            }

            .quick-stats {
                grid-template-columns: 1fr;
            }

            .features-showcase {
                grid-template-columns: 1fr;
            }

            .amenities-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .network-cards-grid {
                grid-template-columns: 1fr;
            }

            .map-placeholder {
                height: 300px;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <section class="hero">
        <div class="hero-content">
            <h1>Our Locations</h1>
            <p>Starting with Baker Basecamp—the hub for our regional network in the Mojave and Death Valley corridor</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="location-hero">
                <div class="location-info">
                    <span class="status">🔨 Under Development</span>
                    <h2>Baker, California</h2>
                    <p>Our flagship regional hub anchors one of America's most iconic scenic corridors. Located at the gateway to Death Valley National Park, which welcomes over 1.1 million visitors annually, Baker Basecamp provides 24/7 support for travelers exploring the Mojave Desert and Death Valley.</p>
                    <p>This full-service location features ultra-fast charging, a premium café with local partners, and climate-controlled indoor lounges designed for the journey.</p>
                    
                    <div class="quick-stats">
                        <div class="stat-badge">
                            <span class="number">6-8</span>
                            <span class="label">Ultra-fast chargers</span>
                        </div>
                        <div class="stat-badge">
                            <span class="number">3,000</span>
                            <span class="label">Square feet</span>
                        </div>
                        <div class="stat-badge">
                            <span class="number">99%</span>
                            <span class="label">Uptime guarantee</span>
                        </div>
                        <div class="stat-badge">
                            <span class="number">24/7</span>
                            <span class="label">Staffed operations</span>
                        </div>
                    </div>
                </div>

                <div class="map-placeholder">
                    <div class="icon">🗺️</div>
                    <p>Interactive map coming soon</p>
                    <p style="font-size: 0.9rem;">Baker, CA • I-15 & CA-127</p>
                </div>
            </div>
        </div>
    </section>

    <!-- MOVED: Explore the Region section - Now right after Baker intro -->
    <section class="alt-bg">
        <div class="container">
            <div class="section-header">
                <h2>Explore the Region</h2>
                <p>Baker Basecamp is your gateway to unforgettable desert adventures</p>
            </div>

            <div style="max-width: 900px; margin: 0 auto; text-align: center;">
                <p style="font-size: 1.2rem; color: var(--fog-gray); line-height: 1.8; margin-bottom: 2rem;">
                    From Baker, explore Death Valley's otherworldly landscapes, witness sunrise at Zabriskie Point, or cruise the historic LA-Vegas corridor. Our location puts you at the heart of the Mojave Desert's most spectacular scenery.
                </p>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 3rem;">
                    <div>
                        <h4 style="color: var(--golden-highway); font-size: 1.5rem; margin-bottom: 0.5rem;">30 min</h4>
                        <p style="color: var(--fog-gray);">to Death Valley entrance</p>
                    </div>
                    <div>
                        <h4 style="color: var(--golden-highway); font-size: 1.5rem; margin-bottom: 0.5rem;">90 miles</h4>
                        <p style="color: var(--fog-gray);">to Las Vegas</p>
                    </div>
                    <div>
                        <h4 style="color: var(--golden-highway); font-size: 1.5rem; margin-bottom: 0.5rem;">180 miles</h4>
                        <p style="color: var(--fog-gray);">to Los Angeles</p>
                    </div>
                    <div>
                        <h4 style="color: var(--golden-highway); font-size: 1.5rem; margin-bottom: 0.5rem;">1.1M</h4>
                        <p style="color: var(--fog-gray);">annual park visitors</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header">
                <h2>Basecamp Features</h2>
                <p>Full-service amenities designed for the journey</p>
            </div>

            <div class="features-showcase">
                <div class="feature-box">
                    <div class="icon">⚡</div>
                    <h4>Ultra-Fast Charging</h4>
                    <p>6-8 high-power DC fast chargers with dynamic power management for optimal charging speeds.</p>
                </div>

                <div class="feature-box">
                    <div class="icon">🏔️</div>
                    <h4>Climate-Controlled Lounge</h4>
                    <p>3,000 sq ft indoor space with comfortable seating, perfect for escaping the desert heat.</p>
                </div>

                <div class="feature-box">
                    <div class="icon">☕</div>
                    <h4>Premium Café</h4>
                    <p>Quality food and beverage featuring local roasters and regional suppliers.</p>
                </div>

                <div class="feature-box">
                    <div class="icon">🚻</div>
                    <h4>Premium Restrooms</h4>
                    <p>Spotless, clean, well-maintained restrooms with family facilities.</p>
                </div>

                <div class="feature-box">
                    <div class="icon">📡</div>
                    <h4>Always Available</h4>
                    <p>24/7 support and monitoring ensures reliable charging when you need it most.</p>
                </div>

                <div class="feature-box">
                    <div class="icon">🌞</div>
                    <h4>Solar Canopy</h4>
                    <p>Solar power generation with battery storage for sustainable operations.</p>
                </div>

                <div class="feature-box">
                    <div class="icon">💥</div>
                    <h4>Staffed Support</h4>
                    <p>Friendly Trailkeepers available to assist with charging, directions, and local recommendations.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="alt-bg">
        <div class="container">
            <div class="section-header">
                <h2>Two Ways to Charge</h2>
                <p>Basecamps and Waystations work together to keep you moving on scenic routes</p>
            </div>

            <div style="max-width: 900px; margin: 0 auto 4rem auto; text-align: center;">
                <p style="font-size: 1.2rem; color: var(--fog-gray); line-height: 1.8;">
                    Baker Basecamp will anchor our regional network, providing full-service hospitality. 
                    Surrounding Waystations offer the same indoor comfort in a streamlined, automated format—perfect for quick charging stops.
                </p>
            </div>

            <div class="network-cards-grid">
                <!-- Baker Basecamp Card -->
                <div class="network-location-card">
                    <img src="images/baker-exterior2.jpg" alt="Baker Basecamp rendering">
                    <div class="network-card-content">
                        <div class="network-card-header">
                            <span>🏕️</span>
                            <h3>Baker Basecamp</h3>
                        </div>
                        <p>
                            Full-service destination with staffed operations, premium café, and 3,000 sq ft climate-controlled lounge. 
                            The complete road trip experience.
                        </p>
                        <div class="network-stats-grid">
                            <div class="network-stat-item">
                                <div class="value">6-8</div>
                                <div class="label">Chargers</div>
                            </div>
                            <div class="network-stat-item">
                                <div class="value">Café</div>
                                <div class="label">Premium</div>
                            </div>
                            <div class="network-stat-item">
                                <div class="value">3,000</div>
                                <div class="label">Sq Ft Lounge</div>
                            </div>
                            <div class="network-stat-item">
                                <div class="value">24/7</div>
                                <div class="label">Staffed</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Waystation Card -->
                <div class="network-location-card">
                    <img src="images/waystation-exterior-alamo2.jpg" alt="Waystation concept rendering">
                    <div class="network-card-content">
                        <div class="network-card-header">
                            <span>📍</span>
                            <h3>Regional Waystations</h3>
                        </div>
                        <p>
                            Automated locations with climate-controlled lounges and ultra-fast charging. 
                            Same comfort guarantee, streamlined experience.
                        </p>
                        <div class="network-stats-grid">
                            <div class="network-stat-item">
                                <div class="value">2-3</div>
                                <div class="label">Chargers</div>
                            </div>
                            <div class="network-stat-item">
                                <div class="value">Indoor</div>
                                <div class="label">Lounge</div>
                            </div>
                            <div class="network-stat-item">
                                <div class="value">Always</div>
                                <div class="label">Open</div>
                            </div>
                            <div class="network-stat-item">
                                <div class="value">Auto</div>
                                <div class="label">Retail</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="network-comfort-box">
                <h4>The Same Comfort Guarantee, Two Formats</h4>
                <p>
                    Whether you stop at Baker Basecamp for the full hospitality experience or charge at a regional Waystation 
                    for a quick top-up, you'll always find our signature climate-controlled indoor lounge. No parking lot waits, 
                    no matter which location you choose.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header">
                <h2>On-Site Amenities</h2>
                <p>Everything you need for a comfortable charging stop</p>
            </div>

            <div class="amenities-grid">
                <div class="amenity-item">
                    <div class="icon">☕</div>
                    <p>Specialty Coffee</p>
                </div>
                <div class="amenity-item">
                    <div class="icon">🥪</div>
                    <p>Fresh Grab & Go</p>
                </div>
                <div class="amenity-item">
                    <div class="icon">🛋️</div>
                    <p>Lounge Seating</p>
                </div>
                <div class="amenity-item">
                    <div class="icon">📶</div>
                    <p>High-Speed WiFi</p>
                </div>
                <div class="amenity-item">
                    <div class="icon">🚻</div>
                    <p>Premium Restrooms</p>
                </div>
                <div class="amenity-item">
                    <div class="icon">👨‍👩‍👧‍👦</div>
                    <p>Family Facilities</p>
                </div>
                <div class="amenity-item">
                    <div class="icon">🅿️</div>
                    <p>Ample Parking</p>
                </div>
                <div class="amenity-item">
                    <div class="icon">🛍️</div>
                    <p>Local Retail</p>
                </div>
                <div class="amenity-item">
                    <div class="icon">🗺️</div>
                    <p>Trip Planning</p>
                </div>
                <div class="amenity-item">
                    <div class="icon">🌡️</div>
                    <p>Climate Control</p>
                </div>
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