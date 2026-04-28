<?php
/**
 * Template Name: Contact Us
 *
 * @package Serenity
 */

// Initialize variables for form feedback
$submission_status = '';
$has_error = false;
$mail_sent = false;

// Check if the form was submitted
if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['submit_contact_form'] ) ) {

    // 1. Security Check: Verify Nonce
    if ( ! isset( $_POST['contact_form_nonce'] ) || ! wp_verify_nonce( $_POST['contact_form_nonce'], 'submit_contact_form_action' ) ) {
        $submission_status = 'Security check failed. Please refresh the page and try again.';
        $has_error = true;
    } else {
        // 2. Sanitize Inputs (Changed 'name' to 'contact_name')
        $name    = sanitize_text_field( wp_unslash( $_POST['contact_name'] ) );
        $phone   = sanitize_text_field( wp_unslash( $_POST['phone'] ) );
        $email   = sanitize_email( wp_unslash( $_POST['email'] ) );
        $message = sanitize_textarea_field( wp_unslash( $_POST['message'] ) );

        // 3. Validate Inputs
        if ( empty( $name ) || empty( $message ) ) {
            $submission_status = 'Please provide your name and message.';
            $has_error = true;
        } elseif ( empty( $phone ) && empty( $email ) ) {
            // Check if BOTH are empty
            $submission_status = 'Please provide either a Phone number or an Email address.';
            $has_error = true;
        } elseif ( ! empty( $email ) && ! is_email( $email ) ) {
            $submission_status = 'Please enter a valid email address.';
            $has_error = true;
        } else {
            // 4. Prepare Email
            $to      = get_option( 'admin_email' ); 
            $subject = 'New Contact Form Submission from ' . $name;
            
            // Build the email body
            $body  = "Name: $name\n";
            $body .= "Phone: " . ( ! empty( $phone ) ? $phone : 'Not provided' ) . "\n";
            $body .= "Email: " . ( ! empty( $email ) ? $email : 'Not provided' ) . "\n\n";
            $body .= "Message:\n$message\n";

            // Set headers
            $headers = array();
            if ( ! empty( $email ) ) {
                $headers[] = "Reply-To: $name <$email>";
            }

            // 5. Send Email
            $mail_sent = wp_mail( $to, $subject, $body, $headers );

            if ( $mail_sent ) {
                $submission_status = 'Thank you! Your message has been sent successfully.';
                // Clear fields after successful submission
                $name = $phone = $email = $message = ''; 
            } else {
                $submission_status = 'Sorry, there was a server error sending your message. Please try calling us instead.';
                $has_error = true;
            }
        }
    }
}

get_header();
?>

<?php get_template_part('template_part_hero') ?>
        <h1 class="fade-in">Contact Us</h1>
        <p class="fade-in">We're here to help. Reach out to our team for questions, admissions, or to schedule a visit.</p>
        <div class="breadcrumbs fade-in">
            <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>  /  <span>Contact Us</span>
        </div>
    </div>
</section>

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
                
                <?php if ( ! empty( $submission_status ) ) : ?>
                    <div style="padding: 15px; margin-bottom: 20px; border-radius: 4px; border: 1px solid <?php echo $has_error ? '#ffc0c0' : '#c3e6cb'; ?>; background-color: <?php echo $has_error ? '#f8d7da' : '#d4edda'; ?>; color: <?php echo $has_error ? '#721c24' : '#155724'; ?>;">
                        <?php echo esc_html( $submission_status ); ?>
                    </div>
                <?php endif; ?>

                <?php if ( ! $mail_sent ) : // Show form if email hasn't been sent successfully ?>
                    <form id="contact-form" action="<?php echo esc_url( get_permalink() ); ?>" method="post">
                        
                        <?php wp_nonce_field( 'submit_contact_form_action', 'contact_form_nonce' ); ?>

                        <div class="form-group">
                            <label for="contact_name">Name *</label>
                            <input type="text" id="contact_name" name="contact_name" required value="<?php echo isset($_POST['contact_name']) ? esc_attr( wp_unslash($_POST['contact_name']) ) : ''; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone" value="<?php echo isset($_POST['phone']) ? esc_attr( wp_unslash($_POST['phone']) ) : ''; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? esc_attr( wp_unslash($_POST['email']) ) : ''; ?>">
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="5" required placeholder="How can we help you?"><?php echo isset($_POST['message']) ? esc_textarea( wp_unslash($_POST['message']) ) : ''; ?></textarea>
                        </div>
                        
                        <button type="submit" name="submit_contact_form" class="btn btn-primary" style="width: 100%; justify-content: center;">Send Message</button>
                        
                        <p style="font-size: var(--font-size-xs); color: var(--color-text-muted); margin-top: var(--spacing-sm); text-align: center;">All inquiries are 100% confidential. We respect your privacy.</p>
                    </form>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>