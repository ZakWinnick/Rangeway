<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Rangeway Energy</title>
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
        .hero {
            margin-top: 82px;
            min-height: 60vh;
            display: flex;
            align-items: center;
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                              url('https://rangeway.energy/images/waystation-exterior1-shasta.jpg');
            background-position: center 100%;
            background-size: 100%;
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
        }

        .section-header p {
            font-size: 1.2rem;
            color: var(--fog-gray);
            max-width: 800px;
            margin: 0 auto;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            margin-bottom: 4rem;
            position: relative;
        }

        .content-grid::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 10%;
            bottom: 10%;
            width: 1px;
            background: linear-gradient(
                to bottom,
                transparent,
                rgba(240, 144, 96, 0.3) 20%,
                rgba(240, 144, 96, 0.3) 80%,
                transparent
            );
            transform: translateX(-50%);
        }

        .content-text h3 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: var(--golden-highway);
            position: relative;
            padding-bottom: 0.8rem;
        }

        .content-text h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--sunset-coral), var(--golden-highway));
            border-radius: 2px;
        }

        .content-text p {
            font-size: 1.1rem;
            color: var(--fog-gray);
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .value-card {
            padding: 2rem;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .value-card:hover {
            background: rgba(255, 255, 255, 0.06);
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(240, 144, 96, 0.25);
            border-color: rgba(240, 144, 96, 0.2);
        }

        .value-card:hover .value-icon {
            transform: scale(1.1) translateY(-3px);
        }

        .value-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            display: inline-block;
        }

        .value-card h4 {
            font-size: 1.3rem;
            color: var(--golden-highway);
            margin-bottom: 0.8rem;
        }

        .value-card p {
            color: var(--fog-gray);
            line-height: 1.7;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .alt-bg {
            background: rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }

        .alt-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(240, 144, 96, 0.4) 50%,
                transparent
            );
        }

        .alt-bg::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(240, 144, 96, 0.4) 50%,
                transparent
            );
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
                background-position: center center !important;
                min-height: 50vh;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .content-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .content-grid::before {
                display: none;
            }

            .values-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    
    <?php include 'header.php'; ?>

    <section class="hero">
        <div class="hero-content">
            <h1>About Rangeway Energy</h1>
            <p>Reimagining EV charging for America's scenic highways</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="content-grid">
                <div class="content-text">
                    <h3>Our Mission</h3>
                    <p>We're building America's premier scenic-corridor EV charging network—one that transforms charging from an inconvenience into a welcome part of the journey.</p>
                    <p>While others race to cover urban areas, we're focused on the places where EV charging matters most: the beautiful highways that connect us to national parks, coastal drives, and mountain retreats.</p>
                </div>
                <div class="content-text">
                    <h3>Our Approach</h3>
                    <p>We guarantee climate-controlled indoor comfort at every location. No more waiting in parking lots exposed to the elements—our lounges offer genuine hospitality.</p>
                    <p>Our regional cluster model combines full-service Basecamps with automated Waystations, delivering 99% uptime through shared infrastructure and rapid response teams.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="alt-bg">
        <div class="container">
            <div class="section-header">
                <h2>Why Scenic Corridors Matter</h2>
                <p>The future of EV travel depends on reliable charging where it's needed most</p>
            </div>

            <div class="content-text" style="max-width: 900px; margin: 0 auto;">
                <p style="font-size: 1.1rem; text-align: center; margin-bottom: 2rem;">Today, 55% of EV drivers avoid scenic routes due to charging anxiety. That's 1.9 million California EV owners who can't confidently explore Death Valley, the Pacific Coast Highway, or the Sierra Nevada.</p>
                <p style="font-size: 1.1rem; text-align: center; margin-bottom: 2rem;">We're changing that. By strategically placing reliable, hospitality-focused charging stations along America's most beautiful drives, we're making electric road trips not just possible, but preferable.</p>
                <p style="font-size: 1.1rem; text-align: center;">The scenic corridor charging market is worth $780M-$2.4B today and growing to $3-9B by 2030. We're capturing it with a proven operational model and hospitality DNA.</p>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header">
                <h2>Our Values</h2>
                <p>The principles that guide everything we do</p>
            </div>
            
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">🎯</div>
                    <h4>Reliability First</h4>
                    <p>We commit to 99% uptime at our Basecamps and 98% at our Waystations. Our 24/7 network operations center and rapid response teams ensure you can count on us.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">🤝</div>
                    <h4>Hospitality-Driven</h4>
                    <p>Every detail—from climate-controlled lounges to quality food and beverage—reflects our commitment to making charging a positive experience, not just a functional necessity.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">🌱</div>
                    <h4>Sustainability Focused</h4>
                    <p>Our locations feature solar canopies and battery storage. We're not just enabling electric travel—we're doing it with minimal environmental impact.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">🏔️</div>
                    <h4>Journey-Centered</h4>
                    <p>We choose locations that celebrate the beauty of the American landscape. Charging at Rangeway means experiencing the views, not avoiding them.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">🔧</div>
                    <h4>Operational Excellence</h4>
                    <p>Our regional cluster model isn't just smart economics—it's how we deliver rapid maintenance response and network-wide reliability at scale.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">🌟</div>
                    <h4>Community First</h4>
                    <p>We partner with local suppliers, hire local staff, and design our locations to become gathering places for both travelers and residents.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
        // Menu toggle functionality
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