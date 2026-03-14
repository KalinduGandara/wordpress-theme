<?php
/**
 * Template Name: Our Services
 *
 * @package Serenity
 */
get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="fade-in">Our Services</h1>
        <p class="fade-in">Comprehensive, evidence-based treatment programs tailored to your individual needs and recovery goals.</p>
        <div class="breadcrumbs fade-in">
            <a href="<?php echo home_url('/'); ?>">Home</a> &nbsp;/&nbsp; <span>Our Services</span>
        </div>
    </div>
</section>

<!-- Services Detail -->
<section class="section">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Treatment Programs</span>
            <h2>How We Can Help</h2>
            <p>Our multidisciplinary approach combines clinical expertise with compassionate care to create lasting change.</p>
        </div>
        <div class="services-detail-grid">
            <div class="service-detail-card fade-in">
                <div class="service-detail-icon">🧠</div>
                <h3>Individual Therapy</h3>
                <p>Personalized one-on-one therapy sessions with licensed clinicians, using evidence-based approaches.</p>
                <ul>
                    <li>Cognitive Behavioral Therapy (CBT)</li>
                    <li>Dialectical Behavior Therapy (DBT)</li>
                    <li>Eye Movement Desensitization (EMDR)</li>
                    <li>Psychodynamic Therapy</li>
                    <li>Motivational Interviewing</li>
                </ul>
            </div>
            <div class="service-detail-card fade-in">
                <div class="service-detail-icon">👥</div>
                <h3>Group Therapy</h3>
                <p>Therapeutic group sessions that promote peer support, shared understanding, and interpersonal growth.</p>
                <ul>
                    <li>Process Groups</li>
                    <li>Skills Building Workshops</li>
                    <li>Psychoeducation Groups</li>
                    <li>Relapse Prevention</li>
                    <li>Trauma Recovery Groups</li>
                </ul>
            </div>
            <div class="service-detail-card fade-in">
                <div class="service-detail-icon">👨‍👩‍👧‍👦</div>
                <h3>Family Counseling</h3>
                <p>Healing the family system through education, communication training, and guided resolution.</p>
                <ul>
                    <li>Family Therapy Sessions</li>
                    <li>Family Education Programs</li>
                    <li>Communication Skills Training</li>
                    <li>Boundary Setting Workshops</li>
                    <li>Weekend Family Visits</li>
                </ul>
            </div>
            <div class="service-detail-card fade-in">
                <div class="service-detail-icon">💊</div>
                <h3>Psychiatric Evaluation</h3>
                <p>Comprehensive psychiatric assessment and medication management by board-certified psychiatrists.</p>
                <ul>
                    <li>Full Diagnostic Evaluation</li>
                    <li>Medication Management</li>
                    <li>Neuropsychological Testing</li>
                    <li>Treatment Plan Development</li>
                    <li>Ongoing Psychiatric Review</li>
                </ul>
            </div>
            <div class="service-detail-card fade-in">
                <div class="service-detail-icon">🛡️</div>
                <h3>Substance Abuse Treatment</h3>
                <p>Integrated dual-diagnosis treatment addressing both mental health and substance use disorders simultaneously.</p>
                <ul>
                    <li>Medical Detox Support</li>
                    <li>Dual Diagnosis Treatment</li>
                    <li>12-Step Integration</li>
                    <li>SMART Recovery Programs</li>
                    <li>Aftercare Planning</li>
                </ul>
            </div>
            <div class="service-detail-card fade-in">
                <div class="service-detail-icon">🌿</div>
                <h3>Holistic Wellness</h3>
                <p>Complementary therapies that nourish mind, body, and spirit for whole-person healing.</p>
                <ul>
                    <li>Yoga &amp; Meditation</li>
                    <li>Art &amp; Music Therapy</li>
                    <li>Equine-Assisted Therapy</li>
                    <li>Nutritional Counseling</li>
                    <li>Fitness &amp; Recreation</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Treatment Approach -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Our Process</span>
            <h2>Your Treatment Journey</h2>
            <p>Every individual's path is unique. Here's how we guide your personalized healing process.</p>
        </div>
        <div class="approach-steps fade-in">
            <div class="approach-step">
                <h4>Assessment</h4>
                <p>Comprehensive evaluation of your medical, psychological, and social history.</p>
            </div>
            <div class="approach-step">
                <h4>Custom Plan</h4>
                <p>Development of a personalized treatment plan aligned with your goals and needs.</p>
            </div>
            <div class="approach-step">
                <h4>Active Treatment</h4>
                <p>Engaging in daily therapeutic programming with ongoing progress monitoring.</p>
            </div>
            <div class="approach-step">
                <h4>Aftercare</h4>
                <p>Transition planning and continued support for lasting recovery beyond our center.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section">
    <div class="container">
        <div class="cta-banner fade-in">
            <h2>Find the Right Program for You</h2>
            <p>Our admissions team will help determine the best treatment approach based on your individual needs.</p>
            <a href="<?php echo home_url('/admission/'); ?>" class="btn btn-accent">Start Your Assessment</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
