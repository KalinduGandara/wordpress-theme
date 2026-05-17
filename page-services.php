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

$hero_url         = serenity_get_metabox_image_url( 'page_hero_image', array() );
$secondary_images = serenity_get_metabox_image_urls( 'page_secondary_images', array() );
?>

<!-- Services Overview -->
<section class="section">
	<div class="container">
		<div class="about-grid">
			<?php if ( $hero_url ) : ?>
			<div class="about-image fade-in-left">
				<img src="<?php echo esc_url( $hero_url ); ?>" alt="<?php esc_attr_e( 'Sandeepani Home therapeutic services and care environment', 'serenity' ); ?>" loading="lazy">
			</div>
			<?php endif; ?>
			<div class="about-content fade-in-right">
				<span class="section-label"><?php esc_html_e( 'What We Offer', 'serenity' ); ?></span>
				<h2><?php esc_html_e( 'Holistic Care for Lasting Recovery', 'serenity' ); ?></h2>
				<p><?php esc_html_e( 'At Sandeepani Home, we combine clinical expertise with a compassionate, person-centered approach to deliver care that supports every stage of the recovery journey.', 'serenity' ); ?></p>
				<p><?php esc_html_e( 'Our multidisciplinary team works closely with each resident to design a treatment plan that addresses their unique psychological, social, and personal needs helping them rebuild confidence, restore well-being, and reintegrate into the community.', 'serenity' ); ?></p>
			</div>
		</div>
	</div>
</section>

<!-- Sub-Services Navigation -->
<section class="section section-alt">
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

<?php if ( ! empty( $secondary_images ) ) : ?>
<section class="section">
	<div class="container">
		<div class="section-header fade-in">
			<span class="section-label"><?php esc_html_e( 'A Look Inside', 'serenity' ); ?></span>
			<h2><?php esc_html_e( 'Our Healing Environment', 'serenity' ); ?></h2>
			<p><?php esc_html_e( 'A glimpse of the spaces and settings where our services come to life.', 'serenity' ); ?></p>
		</div>
		<div class="about-grid">
			<?php foreach ( $secondary_images as $secondary_image ) : ?>
				<div class="about-image fade-in-left">
					<img src="<?php echo esc_url( $secondary_image ); ?>" alt="<?php esc_attr_e( 'Sandeepani Home services facility view', 'serenity' ); ?>" loading="lazy">
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
