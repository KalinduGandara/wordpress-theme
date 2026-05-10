<?php
/**
 * Template Name: Our Services
 *
 * @package Serenity
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

get_template_part( 'template-parts/hero', null, array(
	'title'        => __( 'Our Services', 'serenity' ),
	'subtitle'     => __( 'Comprehensive, evidence-based treatment programs tailored to your individual needs and recovery goals.', 'serenity' ),
	'current_page' => __( 'Our Services', 'serenity' ),
) );
?>

<!-- Sub-Services Navigation -->
<section class="section">
	<div class="container">
		<div class="section-header fade-in">
			<span class="section-label"><?php esc_html_e( 'Specialized Services', 'serenity' ); ?></span>
			<h2><?php esc_html_e( 'Explore Our Core Programs', 'serenity' ); ?></h2>
			<p><?php esc_html_e( 'We offer three core specialized services designed to support recovery, personal growth, and professional development in mental health care.', 'serenity' ); ?></p>
		</div>
		<div class="sub-services-grid">
			<a href="<?php echo serenity_page_url( 'contact' ); ?>" class="sub-service-card fade-in">
				<div class="sub-service-icon">🏠</div>
				<h3><?php esc_html_e( 'Psychosocial Rehabilitation &amp; Residential Care', 'serenity' ); ?></h3>
				<p><?php esc_html_e( 'Individual suffering from any psychiatric illness such as schizophrenia, depression, mania, bipolar disorder are admitted under short term and long term residential care with the aim of bringing them to the maximum level of healthy functioning. Psychosocial rehabilitation measures along with pharmaceutical treatments are applied during their stay with professional supervision.', 'serenity' ); ?></p>
				<span class="sub-service-link"><?php esc_html_e( 'Learn More →', 'serenity' ); ?></span>
			</a>
			<a href="<?php echo serenity_page_url( 'contact' ); ?>" class="sub-service-card fade-in">
				<div class="sub-service-icon">💬</div>
				<h3><?php esc_html_e( 'Counselling Service', 'serenity' ); ?></h3>
				<p><?php esc_html_e( 'We provide counselling facility for family, educational, career and any personal problems with the help of experienced professionals.', 'serenity' ); ?></p>
				<span class="sub-service-link"><?php esc_html_e( 'Learn More →', 'serenity' ); ?></span>
			</a>
			<a href="<?php echo serenity_page_url( 'contact' ); ?>" class="sub-service-card fade-in">
				<div class="sub-service-icon">🎓</div>
				<h3><?php esc_html_e( 'Clinical &amp; Counselling Training', 'serenity' ); ?></h3>
				<p><?php esc_html_e( 'Training facility is available for undergraduates, junior counselors, under psychiatrists, psychologists, mental health workers, and practicing counsellors.', 'serenity' ); ?></p>
				<span class="sub-service-link"><?php esc_html_e( 'Learn More →', 'serenity' ); ?></span>
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
