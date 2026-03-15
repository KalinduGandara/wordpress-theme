<?php
/**
 * Main Index Template
 *
 * @package Serenity
 */
get_header();
?>

<section class="page-hero">
    <div class="container">
        <h1 class="fade-in">Latest Updates</h1>
        <p class="fade-in">News and insights from Sandeepani Home Treatment Center.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="fade-in" style="margin-bottom: var(--spacing-xl); padding-bottom: var(--spacing-xl); border-bottom: 1px solid var(--color-border);">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p style="color: var(--color-text-muted); font-size: var(--font-size-sm); margin-bottom: var(--spacing-sm);"><?php echo get_the_date(); ?></p>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary" style="margin-top: var(--spacing-sm);">Read More</a>
            </article>
        <?php endwhile; else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
