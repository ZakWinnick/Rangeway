Rangeway Energy — Website

Where charging becomes part of your journey.

Public marketing site for Rangeway Energy, the premium EV charging network for America’s scenic highways.
	•	Live site: https://rangeway.energy
	•	Repo: https://github.com/ZakWinnick/Rangeway

⸻

Overview

Rangeway builds premium EV charging destinations—Basecamps and Waystations—designed for road‑trippers on iconic routes. Unlike parking‑lot chargers, every site guarantees climate‑controlled indoor comfort, reliable ultra‑fast charging, and hospitality‑grade amenities. This site introduces the brand, the experience, the team, and how to get in touch.

Tech stack
	•	PHP + HTML/CSS (no framework)
	•	Static assets in /images

Tip: This repo uses simple PHP includes for layout (e.g., header.php, footer.php). Pages like index.php, about.php, contact.php, and locations.php compose these parts.

Local development

Prereqs
	•	A recent version of PHP (8.x recommended)

Run a local dev server (from the repository root):

php -S localhost:3000

Then navigate to http://localhost:3000

File guide

/README.md                — this file
/index.php                — Home page
/about.php                — About Rangeway
/contact.php              — Contact form
/contact-handler.php      — Server-side handler for the contact form
/locations.php            — Locations overview (static for now)
/header.php, footer.php   — Layout includes
/privacy/                 — Privacy/terms pages
/images/                  — Logos, photos, and other static assets
/old/                     — Legacy pages (not part of public nav)

Contact form

The site posts contact form submissions to contact-handler.php.
	•	Email delivery: configure this to send email via your hosting provider (e.g., sendmail) or swap to a transactional API (Sendgrid, Mailgun).
	•	Anti‑spam: consider adding a honeypot field or CAPTCHA.
	•	Security: validate and sanitize all inputs; escape output.

TODOs
	•	Add environment-based config (sender, recipients, SMTP/API keys)
	•	Add server‑side rate‑limiting + CSRF token
	•	Log submissions to a secure location (not web‑accessible)

Brand quick reference

Tagline: Where charging becomes part of your journey

Core messages (use in copy):
	•	Indoor comfort at every location (Driver’s Lounge, clean restrooms, high‑speed Wi‑Fi)
	•	Two tiers: Basecamps (staffed, café) and Waystations (automated, quick comfort)
	•	Reliability: Hub‑satellite operations model designed for 98–99% uptime

Colors
	•	Sunset Coral — #F09060 (primary)
	•	Golden Highway — #FFB366 (accent)
	•	Mountain Charcoal — #4A4A4A (text/grounding)
	•	Coastal Cream — #F5DEB3 (light background)
	•	Ocean Deep — #2C5F7C (links/secondary)
	•	Fog Gray — #B8B8B8 (secondary text/dividers)

Assets in repo
	•	images/rangeway-logo.png — logo for headers and social cards
	•	banner.png — hero/OG image

For press kits or vector assets, maintain a /brand/ folder (SVG, lockups, usage guidelines) and link it here.

Content guidelines
	•	Lead with benefits, not specs. Use experience‑first language; specs only when asked.
	•	Keep the scenic tone. Warm, welcoming, travel‑minded (not purely utilitarian).
	•	Be precise. Avoid unverifiable claims; prefer concrete statements (e.g., “Basecamps feature staffed cafés”).

Deploying

Any PHP‑capable host works:
	•	Shared host / VPS: Apache or Nginx with PHP‑FPM
	•	Docker (optional):

FROM php:8.3-apache
COPY . /var/www/html


	•	Environment variables: if you move to SMTP/API‑based email, reference them in contact-handler.php.

Not recommended: GitHub Pages/Netlify (no native PHP runtime). Use their static hosting only if you pre‑render pages.

Roadmap
	•	Convert static content to a lightweight CMS (e.g., Statamic, Kirby) or headless CMS
	•	Add analytics (server‑side friendly) + cookie banner if needed
	•	Integrate a map and live charger status (OCPI/CPMS once available)
	•	Add structured data (SEO): Organization, LocalBusiness for each site
	•	Set up a CI link checker + HTML validation

Contributing
	1.	Create a feature branch from main
	2.	Keep pages modular (reuse header.php/footer.php)
	3.	Run php -S locally to verify routing and forms
	4.	Open a PR with a short demo GIF/screenshot

External contributors: please open an issue first to confirm scope.

License

No license file is present yet. If you intend to reuse code or assets, please file an issue to discuss terms.

Maintainer & Contact

Rangeway Energy — https://rangeway.energy
General: hello@rangeway.energy
Media/partner inquiries: zak@rangeway.energy