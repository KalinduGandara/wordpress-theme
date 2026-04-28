<?php
/**
 * Template Name: About Us
 *
 * @package Serenity
 */
get_header();
?>

<!-- Page Hero -->
<?php get_template_part('template_part_hero') ?>
        <h1 class="fade-in">About Us</h1>
        <p class="fade-in">Discover our mission, meet our team, and learn what makes Sandeepani Home a trusted leader in residential mental health care.</p>
        <div class="breadcrumbs fade-in">
            <a href="<?php echo home_url('/'); ?>">Home</a> &nbsp;/&nbsp; <span>About Us</span>
        </div>
    </div>
</section>
<?php $hero_url = serenity_get_metabox_image_url('page_hero_image', []); ?>
<?php $secondary_images = serenity_get_metabox_image_urls('page_secondary_images', []); ?>
<!-- Mission Section -->
<section class="section">
    <div class="container">
        <div class="about-grid">
            <div class="about-image fade-in-left">
                <img src="<?php if ( $hero_url ) echo esc_url( $hero_url ); ?>" alt="Sandeepani Home facility and gardens">
            </div>
            
            <div class="about-content fade-in-right">
                <span class="section-label">Our Mission</span>
                <h2>Committed to Compassionate Care</h2>
                <p>We humans are such complex beasts. Why is it that we can be so wonderful and yet so awful, eccentric and prosaic, enigmatic and obvious, witty and dull, and all of these at once?</p>
                <p>We exist to help people survive, recover from and prevent mental health problems Within one organization we bring together teams that undertake research, design traing, influence policy and raise public awareness so as to assist government mental health service to reduce over crowded situations in mental hospitals</p>
                <p>Our Mission is to establish psychosocial and psychological interventions, psychotherapy, rehabilitation facilities in Sri Lanka. We are keen to tackle difficult issues and try different approaches, many of them led by service users themselves.</p>
                <p>We use our findings to provide high quality information, publications, training materials and online services for statutory, voluntary and community organizations, and for the general public.</p>
                <p>We also work to influence policy development, including Government at the highest levels. We use our knowledge to raise awareness and to help tackle stigma attached to mental illness and learning disabilities. We reach millions of people every year through our media work, information and online services.</p>
            </div>
        </div>
    </div>
</section>

<?php if ( ! empty( $secondary_images ) ) : ?>
<section class="section">
    <div class="container">
        <div class="about-grid">
            <?php foreach ( $secondary_images as $secondary_image ) : ?>
                <div class="about-image fade-in-left">
                    <img src="<?php echo esc_url( $secondary_image ); ?>" alt="Sandeepani Home additional facility view">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
