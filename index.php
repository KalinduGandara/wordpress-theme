<?php
/**
 * Main Index Template
 *
 * @package Serenity
 */
get_header();
?>

<section class="section">
    <div class="container">
        <?php
            if ( ! have_posts() ) {
                echo '<h1>Page Not Found</h1>';
                echo '<p>Sorry, the page you are looking for does not exist.</p>';
                echo '<a href="' . esc_url( home_url( '/' ) ) . '">Go to Home</a>';
            } else {
                while ( have_posts() ) {
                    the_post();
                    the_content();
                }
            }
        ?>
    </div>
</section>

<?php get_footer(); ?>
