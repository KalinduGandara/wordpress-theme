<?php
/**
 * Template Name: Our Services
 *
 * @package Serenity
 */
get_header();
?>

<!-- Page Hero -->
<?php get_template_part('template_part_hero') ?>
        <h1 class="fade-in">Our Services</h1>
        <p class="fade-in">Comprehensive, evidence-based treatment programs tailored to your individual needs and recovery goals.</p>
        <div class="breadcrumbs fade-in">
            <a href="<?php echo home_url('/'); ?>">Home</a> &nbsp;/&nbsp; <span>Our Services</span>
        </div>
    </div>
</section>

<!-- Sub-Services Navigation -->
<section class="section">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Specialized Services</span>
            <h2>Explore Our Core Programs</h2>
            <p>We offer three core specialized services designed to support recovery, personal growth, and professional development in mental health care.</p>
        </div>
        <div class="sub-services-grid">
            <a href="<?php echo serenity_page_url('contact'); ?>" class="sub-service-card fade-in">
                <div class="sub-service-icon">🏠</div>
                <h3>Psychosocial Rehabilitation &amp; Residential Care</h3>
                <p>Individual suffering from any psychiatric illness such as schizophrenia , depression , mania , bipolar disorder are admitted under short term  and long term residential care with the aim of bringing them to the maximum level of healthy functioning .psychosocial rehabilitation measures along with pharmaceutical treatments are applied during their stay professional supervision. </p>
                <span class="sub-service-link">Learn More &rarr;</span>
            </a>
            <a href="<?php echo serenity_page_url('contact'); ?>" class="sub-service-card fade-in">
                <div class="sub-service-icon">💬</div>
                <h3>Counselling Service</h3>
                <p>We provide counselling facility for family, educational, career and any personal problems with the help of experienced professionals </p>
                <span class="sub-service-link">Learn More &rarr;</span>
            </a>
            <a href="<?php echo serenity_page_url('contact'); ?>" class="sub-service-card fade-in">
                <div class="sub-service-icon">🎓</div>
                <h3>Clinical &amp; Counselling Training</h3>
                <p>Training facility is available for undergraduates, junior counselors, under psychiatrists, psychologists, mental health workers, and practicing counsellors.</p>
                <span class="sub-service-link">Learn More &rarr;</span>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
