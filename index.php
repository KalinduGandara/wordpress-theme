<?php
/**
 * Main Index Template
 *
 * @package Serenity
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<section class="section">
	<div class="container">
		<?php if ( ! have_posts() ) : ?>
			<h1><?php esc_html_e( 'Page Not Found', 'serenity' ); ?></h1>
			<p><?php esc_html_e( 'Sorry, the page you are looking for does not exist.', 'serenity' ); ?></p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go to Home', 'serenity' ); ?></a>
		<?php else : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
