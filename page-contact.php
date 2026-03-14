<?php
/**
 * Template Name: Contact Us
 *
 * @package Serenity
 */
get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="fade-in">Contact Us</h1>
        <p class="fade-in">We're here to help. Reach out to our team for questions, admissions, or to schedule a visit.</p>
        <div class="breadcrumbs fade-in">
            <a href="<?php echo home_url('/'); ?>">Home</a> &nbsp;/&nbsp; <span>Contact Us</span>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section">
    <div class="container">
        <div class="contact-grid">
            <div class="fade-in-left">
                <span class="section-label">Get In Touch</span>
                <h2>We'd Love to Hear From You</h2>
                <p style="color: var(--color-text-light); margin-bottom: var(--spacing-lg);">Whether you have questions about our programs, need admissions information, or want to schedule a visit, our team is ready to assist.</p>

                <div class="contact-info-cards">
                    <div class="contact-info-card">
                        <div class="contact-icon">📍</div>
                        <div>
                            <h4>Our Location</h4>
                            <p>1234 Serenity Lane<br>Peaceful Valley, CA 90210</p>
                        </div>
                    </div>
                    <div class="contact-info-card">
                        <div class="contact-icon">📞</div>
                        <div>
                            <h4>Phone</h4>
                            <p>Admissions: (555) 123-4567<br>General: (555) 123-4568</p>
                        </div>
                    </div>
                    <div class="contact-info-card">
                        <div class="contact-icon">✉️</div>
                        <div>
                            <h4>Email</h4>
                            <p>info@serenityhaven.com<br>admissions@serenityhaven.com</p>
                        </div>
                    </div>
                    <div class="contact-info-card">
                        <div class="contact-icon">🕐</div>
                        <div>
                            <h4>Office Hours</h4>
                            <p>Mon–Fri: 8:00 AM – 6:00 PM<br>Admissions: 24/7</p>
                        </div>
                    </div>
                </div>

                <div class="map-container" style="margin-top: var(--spacing-lg);">
                    <p>📍 Map — Integrate Google Maps here</p>
                </div>
            </div>

            <div class="contact-form fade-in-right">
                <h3 style="margin-bottom: var(--spacing-lg);">Send Us a Message</h3>
                <form id="contact-form" action="#" method="post">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name">First Name *</label>
                            <input type="text" id="first-name" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name *</label>
                            <input type="text" id="last-name" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inquiry-type">Inquiry Type</label>
                        <select id="inquiry-type" name="inquiry_type">
                            <option value="">Select an option</option>
                            <option value="admissions">Admissions Information</option>
                            <option value="insurance">Insurance & Billing</option>
                            <option value="tour">Schedule a Tour</option>
                            <option value="family">Family Support</option>
                            <option value="general">General Inquiry</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" rows="5" required placeholder="How can we help you?"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">Send Message</button>
                    <p style="font-size: var(--font-size-xs); color: var(--color-text-muted); margin-top: var(--spacing-sm); text-align: center;">All inquiries are 100% confidential. We respect your privacy.</p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Emergency CTA -->
<section class="section section-dark">
    <div class="container text-center fade-in">
        <span class="section-label">Crisis Support</span>
        <h2>Need Immediate Help?</h2>
        <p style="color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto var(--spacing-lg);">If you or someone you know is in immediate danger, please call 911 or the Suicide &amp; Crisis Lifeline.</p>
        <div style="display: flex; gap: var(--spacing-sm); justify-content: center; flex-wrap: wrap;">
            <a href="tel:911" class="btn btn-accent">Call 911</a>
            <a href="tel:988" class="btn btn-secondary">Call 988 Lifeline</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
