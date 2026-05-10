<?php
/**
 * Theme Header
 *
 * @package Serenity
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Sandeepani Home - A premier residential psychological treatment center providing compassionate mental health care in a tranquil environment.">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
	<div class="header-inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
			<div class="logo-icon">
				<?php
				$serenity_logo = get_theme_mod( 'serenity_logo_image', '' );
				if ( $serenity_logo ) :
				?>
				<img src="<?php echo esc_url( $serenity_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> Logo">
				<?php endif; ?>
			</div>
			<div class="logo-text">
				<?php bloginfo( 'name' ); ?>
				<span><?php bloginfo( 'description' ); ?></span>
			</div>
		</a>

		<?php wp_nav_menu( array(
			'theme_location'  => 'primary',
			'container'       => 'nav',
			'container_class' => 'main-nav',
			'container_id'    => 'main-nav',
			'menu_class'      => '',
			'depth'           => 2,
		) ); ?>

		<div class="header-cta">
			<a href="<?php echo serenity_page_url( 'admission' ); ?>" class="btn btn-primary"><?php esc_html_e( 'Get Help Now', 'serenity' ); ?></a>
		</div>

		<button class="mobile-toggle" id="mobile-toggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'serenity' ); ?>" aria-expanded="false" aria-controls="main-nav">
			<span></span>
			<span></span>
			<span></span>
		</button>
	</div>
</header>
