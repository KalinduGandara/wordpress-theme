<?php
/**
 * Template Name: Contact Us
 *
 * @package Serenity
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$submission_status = '';
$has_error         = false;
$mail_sent         = false;

if ( 'POST' === strtoupper( wp_unslash( $_SERVER['REQUEST_METHOD'] ) ) && isset( $_POST['submit_contact_form'] ) ) {

	// 1. Verify nonce
	if ( ! isset( $_POST['contact_form_nonce'] ) || ! wp_verify_nonce( wp_unslash( $_POST['contact_form_nonce'] ), 'submit_contact_form_action' ) ) {
		$submission_status = __( 'Security check failed. Please refresh the page and try again.', 'serenity' );
		$has_error         = true;
	} else {
		// 2. Sanitize inputs
		$name    = sanitize_text_field( wp_unslash( $_POST['contact_name'] ) );
		$phone   = sanitize_text_field( wp_unslash( $_POST['phone'] ) );
		$email   = sanitize_email( wp_unslash( $_POST['email'] ) );
		$message = sanitize_textarea_field( wp_unslash( $_POST['message'] ) );

		// 3. Validate
		if ( empty( $name ) || empty( $message ) ) {
			$submission_status = __( 'Please provide your name and message.', 'serenity' );
			$has_error         = true;
		} elseif ( empty( $phone ) && empty( $email ) ) {
			$submission_status = __( 'Please provide either a Phone number or an Email address.', 'serenity' );
			$has_error         = true;
		} elseif ( ! empty( $email ) && ! is_email( $email ) ) {
			$submission_status = __( 'Please enter a valid email address.', 'serenity' );
			$has_error         = true;
		} else {
			// 4. Prepare email
			$to      = get_option( 'admin_email' );
			$subject = sprintf(
				/* translators: %s: sender name */
				__( 'New Contact Form Submission from %s', 'serenity' ),
				$name
			);

			$body  = 'Name: ' . $name . "\n";
			$body .= 'Phone: ' . ( ! empty( $phone ) ? $phone : __( 'Not provided', 'serenity' ) ) . "\n";
			$body .= 'Email: ' . ( ! empty( $email ) ? $email : __( 'Not provided', 'serenity' ) ) . "\n\n";
			$body .= "Message:\n" . $message . "\n";

			$headers = array( 'Content-Type: text/plain; charset=UTF-8' );
			if ( ! empty( $email ) ) {
				// sanitize_text_field() strips newlines, preventing CRLF injection in the header.
				$headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
			}

			// 5. Send
			$mail_sent = wp_mail( $to, $subject, $body, $headers );

			if ( $mail_sent ) {
				$submission_status = __( 'Thank you! Your message has been sent successfully.', 'serenity' );
				$name = $phone = $email = $message = '';
			} else {
				$submission_status = __( 'Sorry, there was a server error sending your message. Please try calling us instead.', 'serenity' );
				$has_error         = true;
			}
		}
	}
}

get_header();

get_template_part( 'template-parts/hero', null, array(
	'title'        => __( 'Contact Us', 'serenity' ),
	'subtitle'     => __( 'We\'re here to help. Reach out to our team for questions, admissions, or to schedule a visit.', 'serenity' ),
	'current_page' => __( 'Contact Us', 'serenity' ),
) );
?>

<section class="section">
	<div class="container">
		<div class="contact-grid">
			<div class="fade-in-left">
				<span class="section-label"><?php esc_html_e( 'Get In Touch', 'serenity' ); ?></span>
				<h2><?php esc_html_e( 'We\'d Love to Hear From You', 'serenity' ); ?></h2>
				<p class="contact-intro"><?php esc_html_e( 'Whether you have questions about our programs, need admissions information, or want to schedule a visit, our team is ready to assist.', 'serenity' ); ?></p>

				<div class="contact-info-cards">
					<div class="contact-info-card">
						<div class="contact-icon">📍</div>
						<div>
							<h4><?php esc_html_e( 'Our Location', 'serenity' ); ?></h4>
							<p><?php esc_html_e( '103/A, St.Marys Road, Uswetakeiyawa.', 'serenity' ); ?></p>
						</div>
					</div>
					<div class="contact-info-card">
						<div class="contact-icon">📞</div>
						<div>
							<h4><?php esc_html_e( 'Phone', 'serenity' ); ?></h4>
							<p>011 29 41 989<br>011 29 37 275</p>
						</div>
					</div>
					<div class="contact-info-card">
						<div class="contact-icon">✉️</div>
						<div>
							<h4><?php esc_html_e( 'Email', 'serenity' ); ?></h4>
							<p>sandeepanihome@yahoo.com</p>
						</div>
					</div>
					<div class="contact-info-card">
						<div class="contact-icon">🕐</div>
						<div>
							<h4><?php esc_html_e( 'Office Hours', 'serenity' ); ?></h4>
							<p><?php esc_html_e( 'Mon–Fri: 8:00 AM – 6:00 PM', 'serenity' ); ?><br><?php esc_html_e( 'Admissions: 24/7', 'serenity' ); ?></p>
						</div>
					</div>
				</div>

				<div class="map-container">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1048.8155892668708!2d79.8611839656101!3d7.032708976380102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f700302c4e1b%3A0xbeacf9334a4f2aaf!2sSandeepani%20Home%20Uk!5e0!3m2!1sen!2slk!4v1774009610204!5m2!1sen!2slk"
						width="600"
						height="450"
						allowfullscreen=""
						loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"
						title="<?php esc_attr_e( 'Sandeepani Home location on Google Maps', 'serenity' ); ?>"
					></iframe>
				</div>
			</div>

			<div class="contact-form fade-in-right">
				<h3 class="contact-form__title"><?php esc_html_e( 'Send Us a Message', 'serenity' ); ?></h3>

				<?php if ( ! empty( $submission_status ) ) : ?>
					<div class="form-notice <?php echo $has_error ? 'form-notice--error' : 'form-notice--success'; ?>">
						<?php echo esc_html( $submission_status ); ?>
					</div>
				<?php endif; ?>

				<?php if ( ! $mail_sent ) : ?>
					<form id="contact-form" action="<?php echo esc_url( get_permalink() ); ?>" method="post">

						<?php wp_nonce_field( 'submit_contact_form_action', 'contact_form_nonce' ); ?>

						<div class="form-group">
							<label for="contact_name"><?php esc_html_e( 'Name', 'serenity' ); ?> *</label>
							<input type="text" id="contact_name" name="contact_name" required value="<?php echo isset( $_POST['contact_name'] ) ? esc_attr( sanitize_text_field( wp_unslash( $_POST['contact_name'] ) ) ) : ''; ?>">
						</div>

						<div class="form-group">
							<label for="phone"><?php esc_html_e( 'Phone', 'serenity' ); ?></label>
							<input type="tel" id="phone" name="phone" value="<?php echo isset( $_POST['phone'] ) ? esc_attr( sanitize_text_field( wp_unslash( $_POST['phone'] ) ) ) : ''; ?>">
						</div>

						<div class="form-group">
							<label for="email"><?php esc_html_e( 'Email', 'serenity' ); ?></label>
							<input type="email" id="email" name="email" value="<?php echo isset( $_POST['email'] ) ? esc_attr( sanitize_email( wp_unslash( $_POST['email'] ) ) ) : ''; ?>">
						</div>

						<div class="form-group">
							<label for="message"><?php esc_html_e( 'Message', 'serenity' ); ?> *</label>
							<textarea id="message" name="message" rows="5" required placeholder="<?php esc_attr_e( 'How can we help you?', 'serenity' ); ?>"><?php echo isset( $_POST['message'] ) ? esc_textarea( sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) ) : ''; ?></textarea>
						</div>

						<button type="submit" name="submit_contact_form" class="btn btn-primary btn--full">
							<?php esc_html_e( 'Send Message', 'serenity' ); ?>
						</button>

						<p class="form-note"><?php esc_html_e( 'All inquiries are 100% confidential. We respect your privacy.', 'serenity' ); ?></p>
					</form>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
