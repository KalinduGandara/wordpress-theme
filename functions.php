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

/**
 * Get the permalink for a page by its slug.
 * Uses get_page_by_path() to look up the actual page in the database,
 * ensuring links work even if slugs or permalink structures change.
 *
 * @param string $slug The page slug.
 * @return string The page URL, or home_url('/slug/') as fallback.
 */
function serenity_page_url( $slug ) {
    $page = get_page_by_path( $slug );
    if ( $page ) {
        return esc_url( get_permalink( $page ) );
    }
    return esc_url( home_url( '/' . $slug . '/' ) );
}

// Add custom image sizes
add_image_size('serenity-gallery', 600, 450, true);
add_image_size('serenity-team', 400, 400, true);
add_image_size('serenity-hero', 1920, 1080, true);


add_filter( 'rwmb_meta_boxes', 'my_theme_register_gallery_meta_box' );

function my_theme_register_gallery_meta_box( $meta_boxes ) {
    $meta_boxes[] = [
        'title'      => 'Page Image Gallery',
        'post_types' => 'page', // Shows up on Pages
        'fields'     => [
            [
                'name' => 'Select Gallery Images',
                'id'   => 'my_custom_gallery',
                'type' => 'image_advanced', // This allows selecting multiple images
            ],
        ],
    ];
    return $meta_boxes;
}

// Register Background Image & Hero Image metabox
add_filter( 'rwmb_meta_boxes', 'serenity_register_page_images_meta_box' );

function serenity_register_page_images_meta_box( $meta_boxes ) {
    $meta_boxes[] = [
        'title'      => 'Page Images',
        'id'         => 'serenity_page_images',
        'post_types' => 'page',
        'context'    => 'normal',
        'priority'   => 'high',
        'fields'     => [
            [
                'name'             => 'Background Image',
                'id'               => 'page_background_image',
                'type'             => 'single_image',
                'desc'             => 'Select a background image for this page.',
                'max_file_uploads' => 1,
                'force_delete'     => false,
            ],
            [
                'name'             => 'Hero Image',
                'id'               => 'page_hero_image',
                'type'             => 'single_image',
                'desc'             => 'Select a hero/banner image displayed at the top of this page.',
                'max_file_uploads' => 1,
                'force_delete'     => false,
            ],
            [
                'name'             => 'Secondary Images',
                'id'               => 'page_secondary_images',
                'type'             => 'image_advanced',
                'desc'             => 'Select one or more secondary images for this page.',
                'force_delete'     => false,
            ],
        ],
    ];
    return $meta_boxes;
}

function serenity_get_metabox_image_url($metaName, $data ) {
    $image = rwmb_meta( $metaName, $data );
    if ( empty( $image ) ) {
        return '';
    }
    return esc_url($image["full_url"]);
}

function serenity_get_metabox_image_urls($metaName, $data ) {
    $images = rwmb_meta( $metaName, $data );
    if ( empty( $images ) || ! is_array( $images ) ) {
        return [];
    }
    return array_map( function( $image ) {
        return esc_url( $image['full_url'] );
    }, $images );
}

// Customizer: Site Logo Image
function serenity_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'serenity_logo_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'serenity_logo_image', array(
        'label'   => __( 'Site Logo Image', 'serenity' ),
        'section' => 'title_tagline',
        'settings' => 'serenity_logo_image',
    ) ) );
}
add_action( 'customize_register', 'serenity_customize_register' );




