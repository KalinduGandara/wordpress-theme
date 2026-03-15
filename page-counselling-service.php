<?php
/**
 * Template Name: Counselling Service
 *
 * @package Serenity
 */
get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="fade-in">Counselling Service</h1>
        <p class="fade-in">Professional, confidential counselling for individuals, couples, and families—helping you navigate life's challenges with expert guidance and support.</p>
        <div class="breadcrumbs fade-in">
            <a href="<?php echo home_url('/'); ?>">Home</a> &nbsp;/&nbsp;
            <a href="<?php echo serenity_page_url('services'); ?>">Our Services</a> &nbsp;/&nbsp;
            <span>Counselling Service</span>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section class="section">
    <div class="container">
        <div class="about-grid">
            <div class="about-image fade-in-left">
                <img src="<?php echo get_template_directory_uri(); ?>/images/counselling-service.jpg" alt="Counselling session at Sandeepani Home">
            </div>
            <div class="about-content fade-in-right">
                <span class="section-label">Our Counselling</span>
                <h2>Compassionate Professional Counselling</h2>
                <p>Our Counselling Service provides a safe, confidential space for individuals, couples, and families to explore their thoughts, emotions, and behaviours with the guidance of experienced, licensed counsellors.</p>
                <p>Whether you're facing anxiety, depression, relationship difficulties, grief, stress, or life transitions, our team uses evidence-based therapeutic approaches tailored to your unique needs and goals.</p>
                <p>Sessions are available in-person at our centre as well as through secure online platforms, ensuring accessible support whenever you need it.</p>
            </div>
        </div>
    </div>
</section>

<!-- Counselling Types -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">What We Offer</span>
            <h2>Counselling Programs</h2>
            <p>Our diverse range of counselling services addresses the emotional, psychological, and relational needs of our clients.</p>
        </div>
        <div class="services-detail-grid">
            <div class="service-detail-card fade-in">
                <div class="service-detail-icon">🧠</div>
                <h3>Individual Counselling</h3>
                <p>One-on-one sessions focused on personal growth, emotional healing, and developing coping strategies.</p>
                <ul>
                    <li>Anxiety &amp; Depression Management</li>
                    <li>Stress &amp; Burnout Recovery</li>
                    <li>Grief &amp; Loss Support</li>
                    <li>Self-Esteem Building</li>
                    <li>Life Transition Guidance</li>
                </ul>
            </div>
            <div class="service-detail-card fade-in">
                <div class="service-detail-icon">💑</div>
                <h3>Couples Counselling</h3>
                <p>Guided sessions to improve communication, resolve conflicts, and strengthen relationship bonds.</p>
                <ul>
                    <li>Communication Enhancement</li>
                    <li>Conflict Resolution Skills</li>
                    <li>Trust Rebuilding</li>
                    <li>Pre-Marriage Counselling</li>
                    <li>Relationship Enrichment</li>
                </ul>
            </div>
            <div class="service-detail-card fade-in">
                <div class="service-detail-icon">👨‍👩‍👧‍👦</div>
                <h3>Family Counselling</h3>
                <p>Therapeutic sessions designed to improve family dynamics, communication, and mutual understanding.</p>
                <ul>
                    <li>Parent-Child Relationship Support</li>
                    <li>Family Conflict Mediation</li>
                    <li>Adolescent &amp; Teen Issues</li>
                    <li>Blended Family Adjustment</li>
                    <li>Caregiver Support Sessions</li>
                </ul>
            </div>
            <div class="service-detail-card fade-in">
                <div class="service-detail-icon">👥</div>
                <h3>Group Counselling</h3>
                <p>Facilitated group sessions that provide peer support, shared learning, and community connection.</p>
                <ul>
                    <li>Anxiety &amp; Depression Support Groups</li>
                    <li>Anger Management Groups</li>
                    <li>Women's Wellness Circle</li>
                    <li>Men's Support Group</li>
                    <li>Grief Support Groups</li>
                </ul>
            </div>
            <div class="service-detail-card fade-in">
                <div class="service-detail-icon">🧒</div>
                <h3>Child &amp; Adolescent Counselling</h3>
                <p>Age-appropriate therapeutic support for children and young people facing emotional or behavioural difficulties.</p>
                <ul>
                    <li>Play Therapy</li>
                    <li>Behavioural Management</li>
                    <li>School-Related Issues</li>
                    <li>Bullying &amp; Peer Pressure</li>
                    <li>Trauma-Informed Care for Youth</li>
                </ul>
            </div>
            <div class="service-detail-card fade-in">
                <div class="service-detail-icon">💻</div>
                <h3>Online Counselling</h3>
                <p>Convenient, secure virtual sessions that bring professional counselling to you, wherever you are.</p>
                <ul>
                    <li>Video Counselling Sessions</li>
                    <li>Flexible Scheduling</li>
                    <li>Secure &amp; Confidential Platform</li>
                    <li>Follow-Up Support via Chat</li>
                    <li>Crisis Intervention Support</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Therapeutic Approaches -->
<section class="section">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Our Methods</span>
            <h2>Therapeutic Approaches We Use</h2>
            <p>Our counsellors are trained in multiple evidence-based modalities to provide the most effective support for each client.</p>
        </div>
        <div class="approach-steps fade-in">
            <div class="approach-step">
                <h4>CBT</h4>
                <p>Cognitive Behavioural Therapy to identify and change negative thought patterns and behaviours.</p>
            </div>
            <div class="approach-step">
                <h4>Person-Centred</h4>
                <p>Carl Rogers' approach that places the client at the centre, fostering self-discovery and growth.</p>
            </div>
            <div class="approach-step">
                <h4>Solution-Focused</h4>
                <p>Brief therapy that focuses on solutions and future goals rather than dwelling on past problems.</p>
            </div>
            <div class="approach-step">
                <h4>Mindfulness-Based</h4>
                <p>Integrating mindfulness practices into therapy for greater self-awareness and emotional regulation.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section section-alt">
    <div class="container">
        <div class="cta-banner fade-in">
            <h2>Ready to Talk? We're Here to Listen</h2>
            <p>Take the first step toward emotional wellbeing. Book a confidential counselling session with our experienced team today.</p>
            <a href="<?php echo serenity_page_url('contact'); ?>" class="btn btn-accent">Book a Session</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
