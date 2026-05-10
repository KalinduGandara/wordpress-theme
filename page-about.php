<?php
/**
 * Template Name: About Us
 *
 * @package Serenity
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

get_template_part( 'template-parts/hero', null, array(
	'title'        => __( 'About Us', 'serenity' ),
	'subtitle'     => __( 'Discover our mission, meet our team, and learn what makes Sandeepani Home a trusted leader in residential mental health care.', 'serenity' ),
	'current_page' => __( 'About Us', 'serenity' ),
) );

$hero_url         = serenity_get_metabox_image_url( 'page_hero_image', array() );
$secondary_images = serenity_get_metabox_image_urls( 'page_secondary_images', array() );
?>

<!-- Mission Section -->
<section class="section">
	<div class="container">
		<div class="about-grid">
			<?php if ( $hero_url ) : ?>
			<div class="about-image fade-in-left">
				<img src="<?php echo esc_url( $hero_url ); ?>" alt="<?php esc_attr_e( 'Sandeepani Home facility and gardens', 'serenity' ); ?>" loading="lazy">
			</div>
			<?php endif; ?>

			<div class="about-content fade-in-right">
				<span class="section-label"><?php esc_html_e( 'Our Mission', 'serenity' ); ?></span>
				<h2><?php esc_html_e( 'Committed to Compassionate Care', 'serenity' ); ?></h2>
				<p><?php esc_html_e( 'We humans are such complex beasts. Why is it that we can be so wonderful and yet so awful, eccentric and prosaic, enigmatic and obvious, witty and dull, and all of these at once?', 'serenity' ); ?></p>
				<p><?php esc_html_e( 'We exist to help people survive, recover from and prevent mental health problems. Within one organization we bring together teams that undertake research, design training, influence policy and raise public awareness so as to assist government mental health services to reduce overcrowded situations in mental hospitals.', 'serenity' ); ?></p>
				<p><?php esc_html_e( 'Our Mission is to establish psychosocial and psychological interventions, psychotherapy, rehabilitation facilities in Sri Lanka. We are keen to tackle difficult issues and try different approaches, many of them led by service users themselves.', 'serenity' ); ?></p>
				<p><?php esc_html_e( 'We use our findings to provide high quality information, publications, training materials and online services for statutory, voluntary and community organizations, and for the general public.', 'serenity' ); ?></p>
				<p><?php esc_html_e( 'We also work to influence policy development, including Government at the highest levels. We use our knowledge to raise awareness and to help tackle stigma attached to mental illness and learning disabilities. We reach millions of people every year through our media work, information and online services.', 'serenity' ); ?></p>
			</div>
		</div>
	</div>
</section>

<?php if ( ! empty( $secondary_images ) ) : ?>
<section class="section">
	<div class="container">
		<div class="about-grid">
			<?php foreach ( $secondary_images as $secondary_image ) : ?>
				<div class="about-image fade-in-left">
					<img src="<?php echo esc_url( $secondary_image ); ?>" alt="<?php esc_attr_e( 'Sandeepani Home additional facility view', 'serenity' ); ?>" loading="lazy">
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
