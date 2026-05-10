<?php
/**
 * Template Part: Page Hero
 *
 * Accepts $args:
 *   title        (string) – h1 text
 *   subtitle     (string) – descriptive paragraph
 *   current_page (string) – label shown in the breadcrumb trail
 *
 * @package Serenity
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$title        = isset( $args['title'] ) ? $args['title'] : '';
$subtitle     = isset( $args['subtitle'] ) ? $args['subtitle'] : '';
$current_page = isset( $args['current_page'] ) ? $args['current_page'] : '';
$bg_url       = serenity_get_metabox_image_url( 'page_background_image', array() );

$inline_style = '';
if ( $bg_url ) {
	// Embedding a CMS-supplied URL in CSS; esc_url() above already guarantees safety.
	$inline_style = ' style="background: linear-gradient(135deg, rgba(15,37,48,0.9), rgba(26,58,74,0.8)), url(\'' . $bg_url . '\') center/cover;"';
}
?>
<section class="page-hero"<?php echo $inline_style; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- value is built from esc_url() output only ?>>
	<div class="container">
		<?php if ( $title ) : ?>
			<h1 class="fade-in"><?php echo esc_html( $title ); ?></h1>
		<?php endif; ?>
		<?php if ( $subtitle ) : ?>
			<p class="fade-in"><?php echo esc_html( $subtitle ); ?></p>
		<?php endif; ?>
		<?php if ( $current_page ) : ?>
			<div class="breadcrumbs fade-in">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'serenity' ); ?></a>
				&nbsp;/&nbsp;
				<span><?php echo esc_html( $current_page ); ?></span>
			</div>
		<?php endif; ?>
	</div>
</section>
