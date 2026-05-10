<?php
/**
 * Template Name: Admission
 *
 * @package Serenity
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

get_template_part( 'template-parts/hero', null, array(
	'title'        => __( 'Admission', 'serenity' ),
	'subtitle'     => __( 'Taking the first step is the hardest — and the most courageous. We\'re here to make the process simple and supportive.', 'serenity' ),
	'current_page' => __( 'Admission', 'serenity' ),
) );
?>

<!-- Admission Steps -->
<section class="section">
	<div class="container">
		<div class="section-header fade-in">
			<span class="section-label"><?php esc_html_e( 'How to Begin', 'serenity' ); ?></span>
			<h2><?php esc_html_e( 'Admission Process', 'serenity' ); ?></h2>
			<p><?php esc_html_e( 'Our streamlined admissions process is designed to get you the help you need as quickly as possible.', 'serenity' ); ?></p>
		</div>
		<div class="admission-steps">
			<div class="admission-step fade-in">
				<div class="step-number">1</div>
				<div class="step-content">
					<h3><?php esc_html_e( 'Schedule an Initial Interview', 'serenity' ); ?></h3>
					<p><?php esc_html_e( 'Please make an appointment with our Psychologist for an initial interview with the patient. This helps us understand the patient\'s needs and determine the most suitable course of care.', 'serenity' ); ?></p>
				</div>
			</div>
			<div class="admission-step fade-in">
				<div class="step-number">2</div>
				<div class="step-content">
					<h3><?php esc_html_e( 'Collect the Application Kit', 'serenity' ); ?></h3>
					<p><?php esc_html_e( 'Kindly collect the application kit from our office at your earliest convenience. Our staff will be happy to guide you through the required forms and documentation.', 'serenity' ); ?></p>
				</div>
			</div>
			<div class="admission-step fade-in">
				<div class="step-number">3</div>
				<div class="step-content">
					<h3><?php esc_html_e( 'Obtain Psychiatric Recommendation', 'serenity' ); ?></h3>
					<p><?php esc_html_e( 'Please obtain a formal psychiatric recommendation from the patient\'s treating psychiatrist. This recommendation is an essential requirement for proceeding with the admission process.', 'serenity' ); ?></p>
				</div>
			</div>
			<div class="admission-step fade-in">
				<div class="step-number">4</div>
				<div class="step-content">
					<h3><?php esc_html_e( 'Confirm the Admission Date', 'serenity' ); ?></h3>
					<p><?php esc_html_e( 'Once all documentation is in order, please contact us by telephone to confirm and schedule the admission date. Our team will work with you to find the most convenient time.', 'serenity' ); ?></p>
				</div>
			</div>
			<div class="admission-step fade-in">
				<div class="step-number">5</div>
				<div class="step-content">
					<h3><?php esc_html_e( 'Trial Period Admission', 'serenity' ); ?></h3>
					<p><?php esc_html_e( 'The patient will be admitted for an initial trial period, during which our clinical team will carefully observe and assess their progress to ensure the best possible care and comfort.', 'serenity' ); ?></p>
				</div>
			</div>
			<div class="admission-step fade-in">
				<div class="step-number">6</div>
				<div class="step-content">
					<h3><?php esc_html_e( 'Admission Days &amp; Special Requests', 'serenity' ); ?></h3>
					<p><?php esc_html_e( 'Admissions are conducted on weekdays only. If you require admission on a weekend, a special request must be submitted in advance, and please note that an additional fee will apply for weekend admissions.', 'serenity' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- FAQ -->
<section class="section">
	<div class="container">
		<div class="section-header fade-in">
			<span class="section-label"><?php esc_html_e( 'Common Questions', 'serenity' ); ?></span>
			<h2><?php esc_html_e( 'Frequently Asked Questions', 'serenity' ); ?></h2>
		</div>
		<div class="faq-list fade-in">
			<div class="faq-item">
				<button class="faq-question" aria-expanded="false"><?php esc_html_e( 'How long is the treatment program?', 'serenity' ); ?> <span class="faq-icon" aria-hidden="true">+</span></button>
				<div class="faq-answer">
					<p><?php esc_html_e( 'Treatment duration varies based on individual needs, typically ranging from 30 to 90 days. Our clinical team will recommend the optimal length of stay during your initial assessment, and adjustments can be made as treatment progresses.', 'serenity' ); ?></p>
				</div>
			</div>
			<div class="faq-item">
				<button class="faq-question" aria-expanded="false"><?php esc_html_e( 'What should I bring with me?', 'serenity' ); ?> <span class="faq-icon" aria-hidden="true">+</span></button>
				<div class="faq-answer">
					<p><?php esc_html_e( 'We recommend bringing comfortable clothing for 7 days, personal hygiene items, any prescribed medications, and a form of identification. We\'ll provide a detailed packing list after your admission is confirmed. Electronics policies will be discussed during intake.', 'serenity' ); ?></p>
				</div>
			</div>
			<div class="faq-item">
				<button class="faq-question" aria-expanded="false"><?php esc_html_e( 'Can family members visit?', 'serenity' ); ?> <span class="faq-icon" aria-hidden="true">+</span></button>
				<div class="faq-answer">
					<p><?php esc_html_e( 'Yes! We encourage family involvement in the recovery process. After an initial stabilization period, families can participate in scheduled visits, family therapy sessions, and our weekend family program. Visitation schedules are coordinated with your treatment team.', 'serenity' ); ?></p>
				</div>
			</div>
			<div class="faq-item">
				<button class="faq-question" aria-expanded="false"><?php esc_html_e( 'What types of conditions do you treat?', 'serenity' ); ?> <span class="faq-icon" aria-hidden="true">+</span></button>
				<div class="faq-answer">
					<p><?php esc_html_e( 'We treat a wide range of conditions including depression, anxiety disorders, PTSD, bipolar disorder, personality disorders, substance use disorders, eating disorders, and co-occurring (dual diagnosis) conditions. Contact us for a specific assessment of your needs.', 'serenity' ); ?></p>
				</div>
			</div>
			<div class="faq-item">
				<button class="faq-question" aria-expanded="false"><?php esc_html_e( 'Is treatment confidential?', 'serenity' ); ?> <span class="faq-icon" aria-hidden="true">+</span></button>
				<div class="faq-answer">
					<p><?php esc_html_e( 'Absolutely. All treatment at Sandeepani Home is strictly confidential and protected by privacy laws. Your information is never shared without your explicit written consent, except as required by law.', 'serenity' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Contact CTA -->
<section class="section section-dark">
	<div class="container">
		<div class="cta-banner cta-banner--plain fade-in">
			<h2><?php esc_html_e( 'Need More Information?', 'serenity' ); ?></h2>
			<p><?php esc_html_e( 'For more information, please feel free to call us on the following number or send us a message — we are happy to assist you.', 'serenity' ); ?></p>
			<div class="btn-group">
				<a href="tel:0112937275" class="btn btn-accent"><?php esc_html_e( 'Call 011 2 937 275', 'serenity' ); ?></a>
				<a href="<?php echo serenity_page_url( 'contact' ); ?>" class="btn btn-secondary"><?php esc_html_e( 'Send Us a Message', 'serenity' ); ?></a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
