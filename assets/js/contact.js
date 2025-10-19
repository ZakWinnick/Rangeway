/**
 * Rangeway Energy - Contact Page JavaScript
 * Handles contact form and toast notifications
 */

// Toast notification functions
function showToast(title, message, isError = false) {
    const toast = document.getElementById('toast');
    if (!toast) return;

    const toastIcon = toast.querySelector('.toast-icon');
    const toastTitle = toast.querySelector('.toast-title');
    const toastMessage = toast.querySelector('.toast-message');

    // Set content
    if (toastTitle) toastTitle.textContent = title;
    if (toastMessage) toastMessage.textContent = message;

    // Set icon and style
    if (isError) {
        toast.classList.add('error');
        if (toastIcon) toastIcon.textContent = '✕';
    } else {
        toast.classList.remove('error');
        if (toastIcon) toastIcon.textContent = '✓';
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
    if (!toast) return;

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
        const form = document.getElementById('contactForm');
        if (form) form.reset();
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
    } else if (urlParams.get('error') === 'rate_limit') {
        showToast(
            'Too Many Requests',
            'Please wait a few minutes before submitting another message.',
            true
        );
    } else if (urlParams.get('error') === 'spam') {
        showToast(
            'Submission Rejected',
            'Your message was flagged as spam. Please contact us directly via email.',
            true
        );
    }
});

// Form submission handling
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('.btn-submit');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Sending...';
            }
        });
    }
});
