<?php
/**
 * Front Page Template
 *
 * @package Serenity
 */
get_header();
?>

<?php $hero_url = serenity_get_metabox_image_urls('page_hero_image', []); ?>
<?php $bg_url = serenity_get_metabox_image_urls('page_background_image', []); ?>


<!-- Hero Section -->
<?php if ( $bg_url ) { ?>
<section class="hero" style="background: linear-gradient(135deg, rgba(15,37,48,0.85), rgba(26,58,74,0.75)), url('<?php echo $bg_url; ?>') center/cover no-repeat">
    <?php } else { ?>
<section class="hero">
    <?php } ?>
    <div class="container">
        <div class="hero-content fade-in">
            <span class="hero-label">Welcome to Sandeepani Home </span>
            <h1>Your Journey to <em>Healing</em> Starts Here</h1>
            <p>We provide compassionate, evidence-based residential treatment in a tranquil setting, helping individuals rediscover hope, resilience, and lasting well-being.</p>
            <div class="hero-buttons">
                <a href="<?php echo serenity_page_url('admission'); ?>" class="btn btn-primary">Begin Your Recovery</a>
                <a href="<?php echo serenity_page_url('services'); ?>" class="btn btn-secondary">Explore Our Programs</a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Bar -->
<div class="stats-bar fade-in">
    <div class="stats-grid">
        <div class="stat-item">
            <h3>20+</h3>
            <p>Years Experience</p>
        </div>
        <div class="stat-item">
            <h3>5,000+</h3>
            <p>Lives Transformed</p>
        </div>
        <div class="stat-item">
            <h3>95%</h3>
            <p>Success Rate</p>
        </div>
        <div class="stat-item">
            <h3>24/7</h3>
            <p>Support Available</p>
        </div>
    </div>
</div>

<!-- About Preview -->
<section class="section">
    <div class="container">
        <div class="about-grid">
            <div class="about-image fade-in-left">
                <img src="<?php if ( $hero_url ) echo esc_url( $hero_url ); ?>" alt="Sandeepani Home facility surrounded by nature">
            </div>
            <div class="about-content fade-in-right">
                <span class="section-label">About Our Center</span>
                <h2>Welcome to Sandeepani Home</h2>
                <p>According to the census of population of Sri Lanka in the year 2001,a rate of 40.9 persons out of 10,000 people is mentally disabled. Further, it indicates that 49.1% of the causes of the patients are non-congenital, but that they are the result of illnesses, accidents, violence, war, terrorism, etc. Hence most of the mentally disabled people may be rehabilitated and sent back to the society to lead a normal social life.</p>
                <p>The above facts show the importance of establishing rehabilitation centers for mentally disabled people. However, unfortunately there are only a very few such centers in the country at the moment.</p>
                <p>In this background, Sandeepani Home which is a community based rehabilitation center was established in March 2004.From its inception it is being operated as a None Governmental Organization with the approval of the Government of Sri Lanka.</p>
                <p>The main objective of the organization is to provide psychosocial residential care for those who are suffering from mental and emotional disturbances and to rehabilitate and reintegrate them to society so that they could lead a normal social life.</p>
                <p>We provide services for those affected by Schizophrenia, Depression, Mania, Bi-Polar and substance abuse disorders. The Patients are assessed monthly by a team of staff including a consultant psychiatrist, clinical physiologist, counselors, and psychotherapists.</p>
                <a href="<?php echo serenity_page_url('about'); ?>" class="btn btn-primary" style="margin-top: var(--spacing-md);">Learn More About Us</a>
            </div>
        </div>
    </div>
</section>


<!-- CTA Banner -->
<section class="section">
    <div class="container">
        <div class="cta-banner fade-in">
            <h2>Ready to Take the First Step?</h2>
            <p>Our admissions team is available 24/7 to answer your questions and help you begin your journey to recovery.</p>
            <div style="display: flex; gap: var(--spacing-sm); justify-content: center; flex-wrap: wrap; position: relative;">
                <a href="<?php echo serenity_page_url('admission'); ?>" class="btn btn-accent">Start Admission Process</a>
                <a href="tel:0112941989" class="btn btn-secondary">Call 011 29 41 989</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
