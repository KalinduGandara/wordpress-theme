<?php
/**
 * Serenity Theme Functions
 *
 * @package Serenity
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Theme Setup
function serenity_setup() {
	load_theme_textdomain( 'serenity', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'serenity' ),
		'footer'  => __( 'Footer Menu', 'serenity' ),
	) );

	add_image_size( 'serenity-gallery', 600, 450, true );
	add_image_size( 'serenity-team', 400, 400, true );
	add_image_size( 'serenity-hero', 1920, 1080, true );
}
add_action( 'after_setup_theme', 'serenity_setup' );

// Enqueue Styles and Scripts
function serenity_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap', array(), null );
	wp_enqueue_style( 'serenity-style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_script( 'serenity-main', get_template_directory_uri() . '/js/main.js', array(), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'serenity_scripts' );

// Prepend Home link to primary nav menu
add_filter( 'wp_nav_menu_items', function ( $items, $args ) {
	if ( isset( $args->theme_location ) && 'primary' === $args->theme_location ) {
		$home_class = is_front_page() ? ' class="current-menu-item"' : '';
		$home_link  = '<li' . $home_class . '><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'serenity' ) . '</a></li>';
		$items      = $home_link . $items;
	}
	return $items;
}, 10, 2 );

/**
 * Get the permalink for a page by its slug.
 *
 * Uses get_page_by_path() so links survive slug or permalink-structure changes.
 *
 * @param string $slug The page slug.
 * @return string Escaped URL.
 */
function serenity_page_url( $slug ) {
	$page = get_page_by_path( $slug );
	if ( $page ) {
		return esc_url( get_permalink( $page ) );
	}
	return esc_url( home_url( '/' . $slug . '/' ) );
}

// ─── Meta Box integration ────────────────────────────────────────────────────
// All rwmb_* calls are gated so the theme degrades gracefully when the plugin
// is inactive instead of throwing a fatal error.

add_filter( 'rwmb_meta_boxes', 'my_theme_register_gallery_meta_box' );
function my_theme_register_gallery_meta_box( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'      => __( 'Page Image Gallery', 'serenity' ),
		'post_types' => 'page',
		'fields'     => array(
			array(
				'name' => __( 'Select Gallery Images', 'serenity' ),
				'id'   => 'my_custom_gallery',
				'type' => 'image_advanced',
			),
		),
	);
	return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'serenity_register_page_images_meta_box' );
function serenity_register_page_images_meta_box( $meta_boxes ) {
	$meta_boxes[] = array(
		'title'      => __( 'Page Images', 'serenity' ),
		'id'         => 'serenity_page_images',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'fields'     => array(
			array(
				'name'             => __( 'Background Image', 'serenity' ),
				'id'               => 'page_background_image',
				'type'             => 'single_image',
				'desc'             => __( 'Select a background image for this page.', 'serenity' ),
				'max_file_uploads' => 1,
				'force_delete'     => false,
			),
			array(
				'name'             => __( 'Hero Image', 'serenity' ),
				'id'               => 'page_hero_image',
				'type'             => 'single_image',
				'desc'             => __( 'Select a hero/banner image displayed at the top of this page.', 'serenity' ),
				'max_file_uploads' => 1,
				'force_delete'     => false,
			),
			array(
				'name'         => __( 'Secondary Images', 'serenity' ),
				'id'           => 'page_secondary_images',
				'type'         => 'image_advanced',
				'desc'         => __( 'Select one or more secondary images for this page.', 'serenity' ),
				'force_delete' => false,
			),
		),
	);
	return $meta_boxes;
}

/**
 * Safely retrieve a single Meta Box image URL.
 * Returns '' when the Meta Box plugin is inactive or the field is empty.
 *
 * @param string $meta_name Field ID.
 * @param array  $data      rwmb_meta() options array.
 * @return string Escaped URL or empty string.
 */
function serenity_get_metabox_image_url( $meta_name, $data ) {
	if ( ! function_exists( 'rwmb_meta' ) ) {
		return '';
	}
	$image = rwmb_meta( $meta_name, $data );
	if ( empty( $image ) ) {
		return '';
	}
	return esc_url( $image['full_url'] );
}

/**
 * Safely retrieve multiple Meta Box image URLs.
 * Returns [] when the Meta Box plugin is inactive or the field is empty.
 *
 * @param string $meta_name Field ID.
 * @param array  $data      rwmb_meta() options array.
 * @return string[] Array of escaped URLs.
 */
function serenity_get_metabox_image_urls( $meta_name, $data ) {
	if ( ! function_exists( 'rwmb_meta' ) ) {
		return array();
	}
	$images = rwmb_meta( $meta_name, $data );
	if ( empty( $images ) || ! is_array( $images ) ) {
		return array();
	}
	return array_map( function ( $image ) {
		return esc_url( $image['full_url'] );
	}, $images );
}

/**
 * Safely retrieve full gallery image data for the gallery template.
 * Returns [] when the Meta Box plugin is inactive or the field is empty.
 *
 * @param string $meta_name Field ID.
 * @return array[] Array of image data arrays from Meta Box.
 */
function serenity_get_gallery_images( $meta_name ) {
	if ( ! function_exists( 'rwmb_meta' ) ) {
		return array();
	}
	$images = rwmb_meta( $meta_name, array( 'size' => 'large' ) );
	return is_array( $images ) ? array_values( $images ) : array();
}

// ─── Customizer ──────────────────────────────────────────────────────────────

function serenity_customize_register( $wp_customize ) {
	$wp_customize->add_setting( 'serenity_logo_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'serenity_logo_image', array(
		'label'    => __( 'Site Logo Image', 'serenity' ),
		'section'  => 'title_tagline',
		'settings' => 'serenity_logo_image',
	) ) );

	$wp_customize->add_section( 'serenity_contact_settings', array(
		'title'    => __( 'Contact Form', 'serenity' ),
		'priority' => 130,
	) );

	$wp_customize->add_setting( 'serenity_contact_email', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_email',
	) );

	$wp_customize->add_control( 'serenity_contact_email', array(
		'label'       => __( 'Contact Form Recipient Email', 'serenity' ),
		'description' => __( 'Email address that receives contact form submissions. Leave blank to use the site admin email.', 'serenity' ),
		'section'     => 'serenity_contact_settings',
		'type'        => 'email',
	) );
}
add_action( 'customize_register', 'serenity_customize_register' );

/**
 * Return the recipient email for contact form submissions.
 *
 * Falls back to the site admin email when the Customizer value is empty
 * or not a valid email address.
 *
 * @return string
 */
function serenity_get_contact_email() {
	$email = get_theme_mod( 'serenity_contact_email', '' );
	if ( ! empty( $email ) && is_email( $email ) ) {
		return $email;
	}
	return get_option( 'admin_email' );
}
