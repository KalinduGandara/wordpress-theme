<?php
/**
 * Template Name: About Us
 *
 * @package Serenity
 */
get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="fade-in">About Us</h1>
        <p class="fade-in">Discover our mission, meet our team, and learn what makes Serenity Haven a trusted leader in residential mental health care.</p>
        <div class="breadcrumbs fade-in">
            <a href="<?php echo home_url('/'); ?>">Home</a> &nbsp;/&nbsp; <span>About Us</span>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="section">
    <div class="container">
        <div class="about-grid">
            <div class="about-image fade-in-left">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mission.jpg" alt="Serenity Haven facility and gardens">
            </div>
            <div class="about-content fade-in-right">
                <span class="section-label">Our Mission</span>
                <h2>Committed to Compassionate Care</h2>
                <p>Founded in 2004, Serenity Haven was born from a vision to create a treatment center that combines clinical excellence with genuine compassion. Our founders — a team of psychiatrists, psychologists, and social workers — believed that healing happens best in an environment that feels like home.</p>
                <p>Today, we continue that legacy by providing individualized, evidence-based treatment programs that address the root causes of mental health challenges. We serve adults of all backgrounds, creating a diverse and inclusive community of healing.</p>
                <p>Our 20-acre campus, set among rolling hills and tranquil gardens, provides the perfect backdrop for reflection, growth, and renewal.</p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">What Guides Us</span>
            <h2>Our Core Values</h2>
            <p>These principles are the foundation of everything we do at Serenity Haven.</p>
        </div>
        <div class="values-grid">
            <div class="value-card fade-in">
                <div class="value-icon">💚</div>
                <h3>Compassion</h3>
                <p>We treat every individual with empathy, respect, and unconditional positive regard, recognizing the courage it takes to seek help.</p>
            </div>
            <div class="value-card fade-in">
                <div class="value-icon">🔬</div>
                <h3>Evidence-Based Care</h3>
                <p>Our treatment protocols are grounded in the latest research and clinical best practices, ensuring effective and safe care.</p>
            </div>
            <div class="value-card fade-in">
                <div class="value-icon">🤝</div>
                <h3>Collaboration</h3>
                <p>We work together as a multidisciplinary team and partner closely with each client and their family to achieve the best outcomes.</p>
            </div>
            <div class="value-card fade-in">
                <div class="value-icon">🌱</div>
                <h3>Growth</h3>
                <p>We believe in the inherent capacity of every person to grow, change, and build a fulfilling life beyond mental health challenges.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="section">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Our Experts</span>
            <h2>Meet Our Team</h2>
            <p>Our multidisciplinary team of licensed professionals brings decades of combined experience in mental health treatment.</p>
        </div>
        <div class="team-grid">
            <div class="team-card fade-in">
                <img src="<?php echo get_template_directory_uri(); ?>/images/team-1.jpg" alt="Dr. Elizabeth Harper">
                <div class="team-info">
                    <h3>Dr. Elizabeth Harper</h3>
                    <p class="role">Clinical Director, PhD</p>
                    <p>20+ years in clinical psychology specializing in trauma recovery and mood disorders.</p>
                </div>
            </div>
            <div class="team-card fade-in">
                <img src="<?php echo get_template_directory_uri(); ?>/images/team-2.jpg" alt="Dr. Michael Chen">
                <div class="team-info">
                    <h3>Dr. Michael Chen</h3>
                    <p class="role">Psychiatrist, MD</p>
                    <p>Board-certified psychiatrist with expertise in medication management and dual diagnosis treatment.</p>
                </div>
            </div>
            <div class="team-card fade-in">
                <img src="<?php echo get_template_directory_uri(); ?>/images/team-3.jpg" alt="Sarah Williams">
                <div class="team-info">
                    <h3>Sarah Williams</h3>
                    <p class="role">Lead Therapist, LCSW</p>
                    <p>Specializes in CBT, DBT, and family systems therapy with 15 years of experience.</p>
                </div>
            </div>
            <div class="team-card fade-in">
                <img src="<?php echo get_template_directory_uri(); ?>/images/team-4.jpg" alt="David Rodriguez">
                <div class="team-info">
                    <h3>David Rodriguez</h3>
                    <p class="role">Holistic Wellness Director</p>
                    <p>Certified yoga instructor and meditation teacher dedicated to mind-body healing approaches.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Accreditations -->
<section class="section section-dark">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Credentials</span>
            <h2>Accreditations &amp; Affiliations</h2>
            <p>Serenity Haven meets the highest standards of quality and safety in behavioral healthcare.</p>
        </div>
        <div class="stats-grid fade-in" style="max-width: 800px; margin: 0 auto;">
            <div class="stat-item">
                <h3 style="font-size: var(--font-size-xl); color: var(--color-accent);">JCAHO</h3>
                <p>Joint Commission Accredited</p>
            </div>
            <div class="stat-item">
                <h3 style="font-size: var(--font-size-xl); color: var(--color-accent);">CARF</h3>
                <p>CARF International Accredited</p>
            </div>
            <div class="stat-item">
                <h3 style="font-size: var(--font-size-xl); color: var(--color-accent);">NAATP</h3>
                <p>Member, National Association</p>
            </div>
            <div class="stat-item">
                <h3 style="font-size: var(--font-size-xl); color: var(--color-accent);">APA</h3>
                <p>American Psychological Assoc.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
