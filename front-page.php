<?php
/**
 * Front Page Template
 *
 * @package Serenity
 */
get_header();
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content fade-in">
            <span class="hero-label">Welcome to Sandeepani Home</span>
            <h1>Your Journey to <em>Healing</em> Starts Here</h1>
            <p>We provide compassionate, evidence-based residential treatment in a tranquil setting, helping individuals rediscover hope, resilience, and lasting well-being.</p>
            <div class="hero-buttons">
                <a href="<?php echo home_url('/admission/'); ?>" class="btn btn-primary">Begin Your Recovery</a>
                <a href="<?php echo home_url('/services/'); ?>" class="btn btn-secondary">Explore Our Programs</a>
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
                <img src="<?php echo get_template_directory_uri(); ?>/images/about-preview.jpg" alt="Sandeepani Home facility surrounded by nature">
            </div>
            <div class="about-content fade-in-right">
                <span class="section-label">About Our Center</span>
                <h2>A Sanctuary for Healing &amp; Growth</h2>
                <p>Nestled in a serene natural setting, Sandeepani Home offers a safe and nurturing environment where individuals can focus entirely on their recovery. Our multidisciplinary team of licensed professionals combines cutting-edge therapeutic approaches with compassionate care.</p>
                <p>We believe that every person deserves the opportunity to heal. Our individualized treatment plans address the whole person — mind, body, and spirit — ensuring comprehensive and lasting recovery.</p>
                <a href="<?php echo home_url('/about/'); ?>" class="btn btn-primary" style="margin-top: var(--spacing-md);">Learn More About Us</a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Services -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">What We Offer</span>
            <h2>Comprehensive Treatment Programs</h2>
            <p>Our evidence-based programs are designed to address a wide range of mental health conditions with personalized, holistic care.</p>
        </div>
        <div class="services-grid">
            <div class="service-card fade-in">
                <div class="service-icon">🧠</div>
                <h3>Individual Therapy</h3>
                <p>One-on-one sessions with licensed therapists using CBT, DBT, EMDR, and other proven modalities tailored to your unique needs.</p>
                <a href="<?php echo home_url('/services/'); ?>" class="learn-more">Learn More →</a>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">👥</div>
                <h3>Group Therapy</h3>
                <p>Supportive group sessions that foster connection, shared understanding, and collective healing in a safe, guided environment.</p>
                <a href="<?php echo home_url('/services/'); ?>" class="learn-more">Learn More →</a>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">🌿</div>
                <h3>Holistic Wellness</h3>
                <p>Yoga, meditation, art therapy, equine therapy, and nutritional counseling to nourish body and spirit alongside clinical treatment.</p>
                <a href="<?php echo home_url('/services/'); ?>" class="learn-more">Learn More →</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section section-dark">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Testimonials</span>
            <h2>Stories of Hope &amp; Recovery</h2>
            <p>Hear from those who have walked the path of healing at Sandeepani Home.</p>
        </div>
        <div class="testimonials-slider" id="testimonials-slider">
            <div class="testimonial-track" id="testimonial-track">
                <div class="testimonial-card">
                    <blockquote>"Sandeepani Home gave me my life back. The caring staff and beautiful environment made all the difference in my recovery journey. I am forever grateful."</blockquote>
                    <p class="testimonial-author">Sarah M.</p>
                    <p class="testimonial-role">Former Resident, 2024</p>
                </div>
                <div class="testimonial-card">
                    <blockquote>"After years of struggling, I finally found a place where I felt truly understood. The therapists here are exceptional, and the holistic approach transformed my outlook on life."</blockquote>
                    <p class="testimonial-author">James T.</p>
                    <p class="testimonial-role">Former Resident, 2023</p>
                </div>
                <div class="testimonial-card">
                    <blockquote>"The family program at Sandeepani Home helped us heal together. We learned communication skills that strengthened our relationships and supported my daughter's recovery."</blockquote>
                    <p class="testimonial-author">Linda &amp; Robert K.</p>
                    <p class="testimonial-role">Family Members, 2024</p>
                </div>
            </div>
            <div class="slider-dots" id="slider-dots">
                <button class="slider-dot active" data-slide="0"></button>
                <button class="slider-dot" data-slide="1"></button>
                <button class="slider-dot" data-slide="2"></button>
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
                <a href="<?php echo home_url('/admission/'); ?>" class="btn btn-accent">Start Admission Process</a>
                <a href="tel:5551234567" class="btn btn-secondary">Call (555) 123-4567</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
