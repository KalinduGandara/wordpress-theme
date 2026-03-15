<?php
/**
 * Serenity Theme Functions
 *
 * @package Serenity
 */

// Theme Setup
function serenity_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'serenity'),
        'footer'  => __('Footer Menu', 'serenity'),
    ));
}
add_action('after_setup_theme', 'serenity_setup');

// Enqueue Styles and Scripts
function serenity_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap', array(), null);

    // Theme Stylesheet
    wp_enqueue_style('serenity-style', get_stylesheet_uri(), array(), '1.0');

    // Main Script
    wp_enqueue_script('serenity-main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'serenity_scripts');

// Prepend Home link to primary nav menu
add_filter( 'wp_nav_menu_items', function( $items, $args ) {
    if ( isset( $args->theme_location ) && $args->theme_location === 'primary' ) {
        $home_class = is_front_page() ? ' class="current-menu-item"' : '';
        $home_link  = '<li' . $home_class . '><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
        $items      = $home_link . $items;
    }
    return $items;
}, 10, 2 );

// Custom page template helper
function serenity_get_page_template_slug($page_slug) {
    return 'page-' . $page_slug . '.php';
}

// Add custom image sizes
add_image_size('serenity-gallery', 600, 450, true);
add_image_size('serenity-team', 400, 400, true);
add_image_size('serenity-hero', 1920, 1080, true);
