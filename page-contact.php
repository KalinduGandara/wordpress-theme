<?php
/**
 * Template Name: Contact Us
 *
 * @package Serenity
 */
get_header();
?>

<!-- Page Hero -->
<?php get_template_part('template_part_hero') ?>
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
                            <p>103/A, St.Marys Road, Uswetakeiyawa.</p>
                        </div>
                    </div>
                    <div class="contact-info-card">
                        <div class="contact-icon">📞</div>
                        <div>
                            <h4>Phone</h4>
                            <p>011 29 41 989<br>011 29 37 275</p>
                        </div>
                    </div>
                    <div class="contact-info-card">
                        <div class="contact-icon">✉️</div>
                        <div>
                            <h4>Email</h4>
                            <p>sandeepanihome@yahoo.com</p>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1048.8155892668708!2d79.8611839656101!3d7.032708976380102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f700302c4e1b%3A0xbeacf9334a4f2aaf!2sSandeepani%20Home%20Uk!5e0!3m2!1sen!2slk!4v1774009610204!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="contact-form fade-in-right">
                <h3 style="margin-bottom: var(--spacing-lg);">Send Us a Message</h3>
                <form id="contact-form" action="#" method="post">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone *</label>
                            <input type="tel" id="phone" name="phone">
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

<?php get_footer(); ?>
