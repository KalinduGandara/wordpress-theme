<?php
/**
 * Default Page Template
 *
 * @package Serenity
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<section class="page-hero">
	<div class="container">
		<h1 class="fade-in"><?php echo esc_html( get_the_title() ); ?></h1>
	</div>
</section>

<section class="section">
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="about-content fade-in">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>
