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
    <meta name="description" content="Serenity Haven - A premier residential psychological treatment center providing compassionate mental health care in a tranquil environment.">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="header-inner">
        <a href="<?php echo home_url('/'); ?>" class="site-logo">
            <div class="logo-icon">S</div>
            <div class="logo-text">
                Serenity Haven
                <span>Treatment Center</span>
            </div>
        </a>

        <nav class="main-nav" id="main-nav">
            <ul>
                <li><a href="<?php echo home_url('/'); ?>" <?php if (is_front_page()) echo 'class="active"'; ?>>Home</a></li>
                <li><a href="<?php echo home_url('/about/'); ?>" <?php if (is_page('about')) echo 'class="active"'; ?>>About Us</a></li>
                <li><a href="<?php echo home_url('/services/'); ?>" <?php if (is_page('services')) echo 'class="active"'; ?>>Our Services</a></li>
                <li><a href="<?php echo home_url('/admission/'); ?>" <?php if (is_page('admission')) echo 'class="active"'; ?>>Admission</a></li>
                <li><a href="<?php echo home_url('/gallery/'); ?>" <?php if (is_page('gallery')) echo 'class="active"'; ?>>Gallery</a></li>
                <li><a href="<?php echo home_url('/contact/'); ?>" <?php if (is_page('contact')) echo 'class="active"'; ?>>Contact Us</a></li>
            </ul>
        </nav>

        <div class="header-cta">
            <a href="<?php echo home_url('/admission/'); ?>" class="btn btn-primary">Get Help Now</a>
        </div>

        <button class="mobile-toggle" id="mobile-toggle" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
