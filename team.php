<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team | Rangeway Energy</title>
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
    min-height: 45vh; /* Reduced from 50vh */
    display: flex;
    align-items: center;
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                      url('images/waystation-exterior-pch.jpg');
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

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }

        .team-card {
            padding: 2.5rem;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            text-align: center;
            transition: all 0.3s;
        }

        .team-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.05);
            box-shadow: 0 20px 40px rgba(240, 144, 96, 0.2);
        }

        .team-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--sunset-coral), var(--golden-highway));
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            border: 3px solid rgba(255, 255, 255, 0.1);
        }

        .team-card h3 {
            font-size: 1.5rem;
            color: var(--golden-highway);
            margin-bottom: 0.5rem;
        }

        .team-card .title {
            font-size: 1rem;
            color: var(--fog-gray);
            margin-bottom: 1rem;
            font-style: italic;
        }

        .team-card p {
            color: var(--fog-gray);
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .team-links {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        .team-links a {
            color: var(--coastal-cream);
            font-size: 1.3rem;
            transition: all 0.3s;
        }

        .team-links a:hover {
            color: var(--golden-highway);
            transform: translateY(-2px);
        }

        .join-team {
            background: rgba(255, 255, 255, 0.03);
            padding: 3rem;
            border-radius: 20px;
            text-align: center;
            border: 2px dashed rgba(240, 144, 96, 0.3);
            margin-top: 3rem;
        }

        .join-team h3 {
            font-size: 2rem;
            color: var(--golden-highway);
            margin-bottom: 1rem;
        }

        .join-team p {
            font-size: 1.2rem;
            color: var(--fog-gray);
            margin-bottom: 2rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--sunset-coral), var(--golden-highway));
            color: var(--mountain-charcoal);
            padding: 1.2rem 2.5rem;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s;
            display: inline-block;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(240, 144, 96, 0.4);
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

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .team-grid {
                grid-template-columns: 1fr;
            }
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

    /* Add any other mobile styles your page needs here */
}
    </style>
</head>
<body>
   <?php include 'header.php'; ?>

    <section class="hero">
        <div class="hero-content">
            <h1>Meet Our Team</h1>
            <p>The people building America's premier scenic-route charging network</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header">
                <h2>Leadership Team</h2>
                <p>A diverse team with deep expertise in hospitality, energy infrastructure, and operational excellence</p>
            </div>
            
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-photo">👤</div>
                    <h3>Founder & CEO</h3>
                    <p class="title">Leading Operations & Strategy</p>
                    <p>Building Rangeway with a vision to make scenic route EV travel not just possible, but preferable.</p>
                    <div class="team-links">
                        <a href="https://linkedin.com" target="_blank" title="LinkedIn">in</a>
                        <a href="https://x.com" target="_blank" title="X">𝕏</a>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-photo">🔧</div>
                    <h3>Chief Operations Officer</h3>
                    <p class="title">Network Operations & Reliability</p>
                    <p>Ensuring 99% uptime through operational excellence and strategic maintenance planning.</p>
                    <div class="team-links">
                        <a href="https://linkedin.com" target="_blank" title="LinkedIn">in</a>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-photo">💡</div>
                    <h3>Chief Technology Officer</h3>
                    <p class="title">Technology & Infrastructure</p>
                    <p>Building the technical infrastructure that powers our reliable, monitored charging network.</p>
                    <div class="team-links">
                        <a href="https://linkedin.com" target="_blank" title="LinkedIn">in</a>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-photo">🎯</div>
                    <h3>Chief Marketing Officer</h3>
                    <p class="title">Brand & Growth</p>
                    <p>Bringing the Rangeway story to life and building our community of Pathfinder members.</p>
                    <div class="team-links">
                        <a href="https://linkedin.com" target="_blank" title="LinkedIn">in</a>
                        <a href="https://instagram.com" target="_blank" title="Instagram">📷</a>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-photo">🏗️</div>
                    <h3>Director of Development</h3>
                    <p class="title">Site Development & Real Estate</p>
                    <p>Securing the prime scenic corridor locations that make our network unique.</p>
                    <div class="team-links">
                        <a href="https://linkedin.com" target="_blank" title="LinkedIn">in</a>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-photo">☕</div>
                    <h3>Director of Hospitality</h3>
                    <p class="title">Guest Experience & Amenities</p>
                    <p>Creating the warm, welcoming spaces that define the Rangeway experience.</p>
                    <div class="team-links">
                        <a href="https://linkedin.com" target="_blank" title="LinkedIn">in</a>
                    </div>
                </div>
            </div>

            <div class="join-team">
                <h3>Join Our Team</h3>
                <p>We're growing our team of Trailkeepers and looking for passionate individuals who want to shape the future of EV charging.</p>
                <a href="contact.html" class="btn-primary">View Open Positions</a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>