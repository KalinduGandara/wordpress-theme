<?php
/**
 * Theme Header
 *
 * @package Serenity
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sandeepani Home - A premier residential psychological treatment center providing compassionate mental health care in a tranquil environment.">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="header-inner">
        <a href="<?php echo home_url('/'); ?>" class="site-logo">
            <div class="logo-icon">
                <?php
                $serenity_logo = get_theme_mod( 'serenity_logo_image', '' );
                if ( $serenity_logo ) :
                ?>
                <img src="<?php echo esc_url( $serenity_logo ); ?>" alt="<?php bloginfo( 'name' ); ?> Logo">
                <?php endif; ?>
            </div>
            <div class="logo-text">
                Sandeepani Home
                <span>Care Center</span>
            </div>
        </a>

        <?php wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => 'nav',
            'container_class'=> 'main-nav',
            'container_id'   => 'main-nav',
            'menu_class'     => '',
            'depth'          => 2,
        ) ); ?>

        <div class="header-cta">
            <a href="<?php echo serenity_page_url('admission'); ?>" class="btn btn-primary">Get Help Now</a>
        </div>

        <button class="mobile-toggle" id="mobile-toggle" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
