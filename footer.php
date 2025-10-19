<footer>
    <div class="footer-content">
        <div class="footer-section">
            <h4>Rangeway Energy</h4>
            <p>Premium EV charging for America's scenic routes.</p>
            <p style="margin-top: 1rem;">Building the network EV travelers deserve.</p>
        </div>
        <div class="footer-section">
            <h4>Network</h4>
            <a href="locations.php">Our Locations</a>
            <a href="https://rangeway.app" target="_blank">Pathfinder Rewards</a>
            <a href="about.php">About Us</a>
        </div>
        <div class="footer-section">
            <h4>Company</h4>
            <!-- <a href="team.php">Our Team</a> -->
            <a href="https://investors.rangeway.energy" target="_blank">Investor Portal</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="footer-section">
            <h4>Connect</h4>
            <p>2661 Market Street STE 85787</p>
            <p>San Francisco, CA 94114</p>
            <p style="margin-top: 1rem;"><a href="tel:6504206300">(650) 420-6300</a></p>
            <p><a href="mailto:hello@rangeway.energy">hello@rangeway.energy</a></p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 Rangeway Energy. All rights reserved.</p>
    </div>
</footer>

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