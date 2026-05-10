<?php
/**
 * Template Name: Gallery
 *
 * @package Serenity
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

get_template_part( 'template-parts/hero', null, array(
	'title'        => __( 'Gallery', 'serenity' ),
	'subtitle'     => __( 'Take a virtual tour of our beautiful institute, comfortable living spaces, and therapeutic environments.', 'serenity' ),
	'current_page' => __( 'Gallery', 'serenity' ),
) );

$gallery_images = serenity_get_gallery_images( 'my_custom_gallery' );
?>

<!-- Gallery -->
<section class="section">
	<div class="container">
		<?php if ( ! empty( $gallery_images ) ) : ?>
			<div class="gallery-grid" id="gallery-grid">
				<?php foreach ( $gallery_images as $index => $image ) : ?>
					<div class="gallery-item fade-in" data-index="<?php echo esc_attr( $index ); ?>" data-src="<?php echo esc_url( $image['full_url'] ); ?>">
						<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" loading="lazy">
						<div class="gallery-overlay"><span><?php echo esc_html( $image['title'] ); ?></span></div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e( 'Image lightbox', 'serenity' ); ?>">
	<button class="lightbox-close" id="lightbox-close" aria-label="<?php esc_attr_e( 'Close lightbox', 'serenity' ); ?>">&times;</button>
	<button class="lightbox-nav lightbox-prev" id="lightbox-prev" aria-label="<?php esc_attr_e( 'Previous image', 'serenity' ); ?>">&#10094;</button>
	<img id="lightbox-img" src="" alt="">
	<button class="lightbox-nav lightbox-next" id="lightbox-next" aria-label="<?php esc_attr_e( 'Next image', 'serenity' ); ?>">&#10095;</button>
</div>

<!-- CTA -->
<section class="section section-alt">
	<div class="container">
		<div class="cta-banner fade-in">
			<h2><?php esc_html_e( 'Experience Sandeepani Home In Person', 'serenity' ); ?></h2>
			<p><?php esc_html_e( 'Schedule a private tour of our facility and see firsthand the warm, healing environment we\'ve created.', 'serenity' ); ?></p>
			<a href="<?php echo serenity_page_url( 'contact' ); ?>" class="btn btn-accent"><?php esc_html_e( 'Schedule a Tour', 'serenity' ); ?></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
