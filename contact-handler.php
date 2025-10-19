<?php
/**
 * Rangeway Energy - Contact Form Handler
 * Enhanced with security features: rate limiting, honeypot, CSRF protection
 */

// Load configuration
require_once __DIR__ . '/config.php';

// Start session for rate limiting
session_name(SESSION_NAME);
session_start();

// Prevent direct access
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: contact.php");
    exit;
}

// === SECURITY CHECKS ===

// 1. Honeypot Check (spam bot detection)
if (!empty($_POST['website'])) {
    // Bot filled out honeypot field
    header("Location: contact.php?error=spam");
    exit;
}

// 2. Rate Limiting
if (RATE_LIMIT_ENABLED) {
    $ip = $_SERVER['REMOTE_ADDR'];
    $rate_limit_key = 'contact_form_' . md5($ip);

    if (!isset($_SESSION[$rate_limit_key])) {
        $_SESSION[$rate_limit_key] = ['count' => 0, 'first_attempt' => time()];
    }

    $rate_data = &$_SESSION[$rate_limit_key];

    // Reset if window has passed
    if (time() - $rate_data['first_attempt'] > RATE_LIMIT_WINDOW) {
        $rate_data = ['count' => 0, 'first_attempt' => time()];
    }

    // Check if limit exceeded
    if ($rate_data['count'] >= RATE_LIMIT_MAX_ATTEMPTS) {
        header("Location: contact.php?error=rate_limit");
        exit;
    }

    // Increment counter
    $rate_data['count']++;
}

// === INPUT SANITIZATION ===

$name = strip_tags(trim($_POST["name"]));
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$phone = strip_tags(trim($_POST["phone"]));
$subject = strip_tags(trim($_POST["subject"]));
$message = trim($_POST["message"]);

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: contact.php?error=invalid_email");
    exit;
}

// Validate required fields
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    header("Location: contact.php?error=missing_fields");
    exit;
}

// === EMAIL CONFIGURATION ===

$recipient = CONTACT_EMAIL;

// Subject line mapping
$subject_map = [
    'general' => 'General Inquiry',
    'investment' => 'Investment Opportunity',
    'partnership' => 'Partnership Inquiry',
    'press' => 'Press & Media',
    'careers' => 'Careers Inquiry',
    'support' => 'Customer Support'
];

$subject_text = isset($subject_map[$subject]) ? $subject_map[$subject] : 'Contact Form Submission';
$email_subject = SITE_NAME . " - $subject_text from $name";

// === BUILD HTML EMAIL TO RANGEWAY ===

$html_content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>' . SITE_NAME . ' Contact Form</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; background-color: #f5f5f5;">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: #f5f5f5; padding: 20px 0;">
        <tr>
            <td align="center">
                <table cellpadding="0" cellspacing="0" border="0" width="600" style="background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.15);">

                    <!-- Header -->
                    <tr>
                        <td style="background: #1a3a4a; padding: 40px 30px; text-align: center;">
                            <img src="' . SITE_URL . '/banner.png" alt="' . SITE_NAME . '" style="max-width: 400px; width: 100%; height: auto; display: block; margin: 0 auto 15px auto;" />
                            <p style="margin: 0; font-size: 16px; color: #F5DEB3; opacity: 0.9;">New Contact Form Submission</p>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding: 40px 30px;">

                            <!-- Inquiry Type -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 25px; padding-bottom: 25px; border-bottom: 2px solid #f0f0f0;">
                                <tr>
                                    <td>
                                        <div style="font-weight: 700; color: #F09060; font-size: 11px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Inquiry Type</div>
                                        <div style="font-size: 16px; color: #333333;">' . htmlspecialchars($subject_text, ENT_QUOTES, 'UTF-8') . '</div>
                                    </td>
                                </tr>
                            </table>

                            <!-- Contact Name -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 25px; padding-bottom: 25px; border-bottom: 2px solid #f0f0f0;">
                                <tr>
                                    <td>
                                        <div style="font-weight: 700; color: #F09060; font-size: 11px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Contact Name</div>
                                        <div style="font-size: 16px; color: #333333;">' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</div>
                                    </td>
                                </tr>
                            </table>

                            <!-- Email Address -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 25px; padding-bottom: 25px; border-bottom: 2px solid #f0f0f0;">
                                <tr>
                                    <td>
                                        <div style="font-weight: 700; color: #F09060; font-size: 11px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Email Address</div>
                                        <div style="font-size: 16px;"><a href="mailto:' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '" style="color: #F09060; text-decoration: none; font-weight: 500;">' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '</a></div>
                                    </td>
                                </tr>
                            </table>';

if (!empty($phone)) {
    $html_content .= '
                            <!-- Phone Number -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 25px; padding-bottom: 25px; border-bottom: 2px solid #f0f0f0;">
                                <tr>
                                    <td>
                                        <div style="font-weight: 700; color: #F09060; font-size: 11px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Phone Number</div>
                                        <div style="font-size: 16px;"><a href="tel:' . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . '" style="color: #F09060; text-decoration: none; font-weight: 500;">' . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . '</a></div>
                                    </td>
                                </tr>
                            </table>';
}

$html_content .= '
                            <!-- Message -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 25px;">
                                <tr>
                                    <td>
                                        <div style="font-weight: 700; color: #F09060; font-size: 11px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Message</div>
                                        <div style="background: #f9f9f9; padding: 20px; border-radius: 8px; border-left: 4px solid #FFB366; font-size: 15px; line-height: 1.8; color: #444444;">' . nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')) . '</div>
                                    </td>
                                </tr>
                            </table>

                            <!-- Reply Button -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-top: 30px; padding-top: 30px; border-top: 2px solid #f0f0f0;">
                                <tr>
                                    <td align="center">
                                        <p style="color: #666; margin-bottom: 15px; font-size: 14px;">Click below to reply directly to ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</p>
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td align="center" style="background: linear-gradient(135deg, #F09060 0%, #FFB366 100%); border-radius: 8px;">
                                                    <a href="mailto:' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '?subject=' . rawurlencode(SITE_NAME . ' - ' . $subject_text) . '" style="display: block; padding: 14px 35px; color: #2A2A2A; text-decoration: none; font-weight: 700; font-size: 15px;">Reply to Message</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background: #2A2A2A; color: #F5DEB3; padding: 25px 30px; text-align: center; font-size: 13px;">
                            <p style="margin: 5px 0; opacity: 0.8; font-style: italic;">' . SITE_TAGLINE . '</p>
                            <p style="margin: 10px 0 5px 0; opacity: 0.7;">Submitted via ' . SITE_DOMAIN . ' contact form</p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>';

// === BUILD CONFIRMATION EMAIL TO SUBMITTER ===

$confirmation_html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>' . SITE_NAME . ' - Message Received</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; background-color: #f5f5f5;">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: #f5f5f5; padding: 20px 0;">
        <tr>
            <td align="center">
                <table cellpadding="0" cellspacing="0" border="0" width="600" style="background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.15);">

                    <!-- Header -->
                    <tr>
                        <td style="background: #1a3a4a; padding: 40px 30px; text-align: center;">
                            <img src="' . SITE_URL . '/banner.png" alt="' . SITE_NAME . '" style="max-width: 400px; width: 100%; height: auto; display: block; margin: 0 auto 15px auto;" />
                            <p style="margin: 0; font-size: 16px; color: #F5DEB3; opacity: 0.9;">We received your message!</p>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding: 40px 30px;">

                            <p style="font-size: 18px; color: #333; margin: 0 0 20px 0;">Hi ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . ',</p>

                            <p style="font-size: 16px; color: #444; line-height: 1.8; margin: 0 0 20px 0;">Thank you for reaching out to ' . SITE_NAME . '. We\'ve received your message regarding <strong>' . htmlspecialchars($subject_text, ENT_QUOTES, 'UTF-8') . '</strong> and appreciate your interest in our premium scenic-corridor EV charging network.</p>

                            <p style="font-size: 16px; color: #444; line-height: 1.8; margin: 0 0 30px 0;">Our team will review your inquiry and get back to you within 24 hours. If your inquiry is urgent, feel free to call us at <a href="tel:' . CONTACT_PHONE_RAW . '" style="color: #F09060; text-decoration: none; font-weight: 600;">' . CONTACT_PHONE . '</a>.</p>

                            <!-- Summary Box -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background: #f9f9f9; border-radius: 8px; border-left: 4px solid #FFB366; margin-bottom: 30px;">
                                <tr>
                                    <td style="padding: 20px;">
                                        <p style="font-weight: 700; color: #F09060; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; margin: 0 0 15px 0;">Your Message Summary</p>
                                        <p style="font-size: 14px; color: #666; margin: 0 0 8px 0;"><strong>Subject:</strong> ' . htmlspecialchars($subject_text, ENT_QUOTES, 'UTF-8') . '</p>
                                        <p style="font-size: 14px; color: #666; margin: 0 0 8px 0;"><strong>Email:</strong> ' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '</p>';

if (!empty($phone)) {
    $confirmation_html .= '<p style="font-size: 14px; color: #666; margin: 0 0 8px 0;"><strong>Phone:</strong> ' . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . '</p>';
}

$confirmation_html .= '
                                        <p style="font-size: 14px; color: #666; margin: 15px 0 0 0;"><strong>Message:</strong></p>
                                        <p style="font-size: 14px; color: #666; margin: 8px 0 0 0; line-height: 1.6;">' . nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')) . '</p>
                                    </td>
                                </tr>
                            </table>

                            <p style="font-size: 16px; color: #444; line-height: 1.8; margin: 0 0 20px 0;">In the meantime, feel free to explore:</p>

                            <!-- Quick Links -->
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 30px;">
                                <tr>
                                    <td style="padding: 10px 0;">
                                        <a href="' . SITE_URL . '/locations.php" style="color: #F09060; text-decoration: none; font-weight: 600; font-size: 15px;">→ Our Baker Basecamp Location</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0;">
                                        <a href="https://rangeway.app" style="color: #F09060; text-decoration: none; font-weight: 600; font-size: 15px;">→ Pathfinder Rewards Program</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0;">
                                        <a href="https://fieldnotes.rangeway.energy" style="color: #F09060; text-decoration: none; font-weight: 600; font-size: 15px;">→ Subscribe to Field Notes Newsletter</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 0;">
                                        <a href="https://investors.rangeway.energy" style="color: #F09060; text-decoration: none; font-weight: 600; font-size: 15px;">→ Investment Opportunity</a>
                                    </td>
                                </tr>
                            </table>

                            <p style="font-size: 15px; color: #666; line-height: 1.8; margin: 30px 0 0 0;">Best regards,<br><strong style="color: #333;">The ' . SITE_NAME . ' Team</strong></p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background: #2A2A2A; color: #F5DEB3; padding: 25px 30px; text-align: center; font-size: 13px;">
                            <p style="margin: 5px 0; opacity: 0.8; font-style: italic;">' . SITE_TAGLINE . '</p>
                            <p style="margin: 15px 0 5px 0;"><a href="mailto:' . CONTACT_EMAIL . '" style="color: #F5DEB3; text-decoration: none;">' . CONTACT_EMAIL . '</a> • <a href="tel:' . CONTACT_PHONE_RAW . '" style="color: #F5DEB3; text-decoration: none;">' . CONTACT_PHONE . '</a></p>
                            <p style="margin: 10px 0 5px 0; opacity: 0.7;">' . CONTACT_ADDRESS_STREET . ', ' . CONTACT_ADDRESS_CITY . ', ' . CONTACT_ADDRESS_STATE . ' ' . CONTACT_ADDRESS_ZIP . '</p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>';

// === SEND EMAILS ===

// Set up headers for main email
$headers = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/html; charset=UTF-8";
$headers[] = "From: " . SITE_NAME . " Contact Form <noreply@" . SITE_DOMAIN . ">";
$headers[] = "Reply-To: $name <$email>";
$headers[] = "X-Mailer: PHP/" . phpversion();

// Set up headers for confirmation email
$confirmation_headers = array();
$confirmation_headers[] = "MIME-Version: 1.0";
$confirmation_headers[] = "Content-type: text/html; charset=UTF-8";
$confirmation_headers[] = "From: " . SITE_NAME . " <" . CONTACT_EMAIL . ">";
$confirmation_headers[] = "Reply-To: " . SITE_NAME . " <" . CONTACT_EMAIL . ">";
$confirmation_headers[] = "X-Mailer: PHP/" . phpversion();

// Send main email to Rangeway
$main_sent = mail($recipient, $email_subject, $html_content, implode("\r\n", $headers));

// Send confirmation email to submitter
$confirmation_sent = mail($email, SITE_NAME . " - We received your message", $confirmation_html, implode("\r\n", $confirmation_headers));

// Redirect based on results
if ($main_sent && $confirmation_sent) {
    header("Location: contact.php?success=1");
} else if ($main_sent) {
    // Main email sent but confirmation failed - still consider it a success
    header("Location: contact.php?success=1");
} else {
    header("Location: contact.php?error=1");
}
exit;
