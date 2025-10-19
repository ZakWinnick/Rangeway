🌄 Rangeway Energy — Website

Where charging becomes part of your journey.

Public marketing site for Rangeway Energy, a premium EV charging network built for America’s scenic highways.

Live site: https://rangeway.energy · Repo: https://github.com/ZakWinnick/Rangeway

⸻

📚 Table of Contents
	•	Overview
	•	Tech Stack
	•	Getting Started
	•	Project Structure
	•	Contact Form
	•	Brand Quick Reference
	•	Deploying
	•	Roadmap
	•	Contributing
	•	License
	•	Maintainer & Contact

⸻

Overview

Rangeway builds premium EV charging destinations—Basecamps and Waystations—designed for road‑trippers on iconic routes. Unlike parking‑lot chargers, every site guarantees climate‑controlled indoor comfort, reliable ultra‑fast charging, and hospitality‑grade amenities. This website introduces the brand, experience, team, and ways to connect.

💡 Tip: Pages are plain PHP with small includes. Easy to host anywhere that runs PHP.

⸻

Tech Stack
	•	PHP + HTML/CSS (no framework)
	•	Static assets in /images
	•	Simple includes for layout (header.php, footer.php)

# Run a local dev server
php -S localhost:3000
# then visit
# http://localhost:3000


⸻

Getting Started

Prerequisites
	•	PHP 8.x (or newer)

Local Dev
	1.	Clone the repo
	2.	From the repo root, run php -S localhost:3000
	3.	Open your browser to http://localhost:3000

Recommended
	•	Use a modern editor with PHP/HTML linting
	•	Keep images optimized (lossless where possible)

⸻

Project Structure

/README.md                — this file
/index.php                — Home page
/about.php                — About Rangeway
/contact.php              — Contact form (client)
/contact-handler.php      — Contact form (server handler)
/locations.php            — Locations overview (static for now)
/header.php, footer.php   — Layout includes
/privacy/                 — Privacy / terms pages
/images/                  — Logos, photos, and other static assets
/old/                     — Legacy pages (not in public nav)


⸻

Contact Form

The site posts submissions to contact-handler.php.

Email Delivery
	•	Configure to send via server sendmail or switch to an API (SendGrid, Mailgun).

Security & Abuse Prevention
	•	Validate and sanitize all inputs; escape all output.
	•	Add a CSRF token and a basic rate limiter.
	•	Include a honeypot field or CAPTCHA to deter bots.

🚧 TODOs
	•	Environment‑based config (sender, recipients, SMTP/API keys)
	•	Server‑side rate‑limiting + CSRF token
	•	Log submissions to a secure, non‑web‑accessible location

⸻

Brand Quick Reference

Tagline: Where charging becomes part of your journey

Core Messages
	•	Indoor comfort at every location (Driver’s Lounge, clean restrooms, high‑speed Wi‑Fi)
	•	Two tiers: Basecamps (staffed, café) and Waystations (automated, quick comfort)
	•	Reliability: Hub‑satellite operations model designed for high uptime

Palette

Name	Hex	Usage	Preview
Sunset Coral	#F09060	Primary	
Golden Highway	#FFB366	Accent	
Mountain Charcoal	#4A4A4A	Text/grounding	
Coastal Cream	#F5DEB3	Light background	
Ocean Deep	#2C5F7C	Links/secondary	
Fog Gray	#B8B8B8	Secondary text/dividers	

If you want to publish vector assets and a press kit, add a /brand/ folder (SVGs, lockups, usage guidelines) and link it here.

⸻

Deploying

Any PHP‑capable host works:
	•	Shared host / VPS: Apache or Nginx with PHP‑FPM
	•	Docker (optional)

FROM php:8.3-apache
COPY . /var/www/html


	•	Environment variables: if you move to SMTP/API‑based email, reference them in contact-handler.php.

ℹ️ Note: GitHub Pages / Netlify do not run PHP server‑side. Use them only if you pre‑render pages.

⸻

Roadmap
	•	Convert static content to a lightweight CMS (Statamic, Kirby) or headless CMS
	•	Add analytics (server‑friendly) + cookie banner if required
	•	Map & live charger status (OCPI/CPMS when available)
	•	Structured data (SEO): Organization, LocalBusiness for each site
	•	CI link checker + HTML validation

⸻

Contributing
	1.	Create a feature branch from main
	2.	Keep pages modular (reuse header.php / footer.php)
	3.	Run php -S locally to verify routing and forms
	4.	Open a PR with a short demo GIF/screenshot

External contributors: please open an issue first to confirm scope.

⸻

License

No license file present yet. If you intend to reuse code or assets, please open an issue to discuss terms.

⸻

Maintainer & Contact

Rangeway Energy — https://rangeway.energy
General: hello@rangeway.energy
Media/partner inquiries: zak@rangeway.energy