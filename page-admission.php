<?php
/**
 * Template Name: Admission
 *
 * @package Serenity
 */
get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="fade-in">Admission</h1>
        <p class="fade-in">Taking the first step is the hardest — and the most courageous. We're here to make the process simple and supportive.</p>
        <div class="breadcrumbs fade-in">
            <a href="<?php echo home_url('/'); ?>">Home</a> &nbsp;/&nbsp; <span>Admission</span>
        </div>
    </div>
</section>

<!-- Admission Steps -->
<section class="section">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">How to Begin</span>
            <h2>Admission Process</h2>
            <p>Our streamlined admissions process is designed to get you the help you need as quickly as possible.</p>
        </div>
        <div class="admission-steps">
            <div class="admission-step fade-in">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h3>Initial Contact</h3>
                    <p>Call our 24/7 admissions line at (555) 123-4567 or fill out our confidential online form. Our compassionate admissions coordinators are ready to answer your questions and discuss your situation.</p>
                </div>
            </div>
            <div class="admission-step fade-in">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3>Pre-Assessment</h3>
                    <p>A licensed clinician conducts a confidential phone assessment to understand your needs, determine the appropriate level of care, and answer any clinical questions about our programs.</p>
                </div>
            </div>
            <div class="admission-step fade-in">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h3>Insurance Verification</h3>
                    <p>Our team handles all insurance verification and authorization. We accept most major insurance providers and will work with you to understand your benefits and coverage.</p>
                </div>
            </div>
            <div class="admission-step fade-in">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h3>Arrival &amp; Welcome</h3>
                    <p>Upon arrival, you'll be warmly welcomed by our team. We'll complete a comprehensive intake assessment, orient you to the facility, and begin developing your personalized treatment plan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Insurance -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Coverage</span>
            <h2>Insurance We Accept</h2>
            <p>We work with most major insurance providers. If you don't see yours listed, please contact us — we'll do our best to help.</p>
        </div>
        <div class="insurance-grid fade-in">
            <div class="insurance-item">Blue Cross Blue Shield</div>
            <div class="insurance-item">Aetna</div>
            <div class="insurance-item">Cigna</div>
            <div class="insurance-item">UnitedHealthcare</div>
            <div class="insurance-item">Humana</div>
            <div class="insurance-item">Kaiser Permanente</div>
            <div class="insurance-item">Anthem</div>
            <div class="insurance-item">Tricare</div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-label">Common Questions</span>
            <h2>Frequently Asked Questions</h2>
        </div>
        <div class="faq-list fade-in">
            <div class="faq-item">
                <button class="faq-question">How long is the treatment program? <span class="faq-icon">+</span></button>
                <div class="faq-answer">
                    <p>Treatment duration varies based on individual needs, typically ranging from 30 to 90 days. Our clinical team will recommend the optimal length of stay during your initial assessment, and adjustments can be made as treatment progresses.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">What should I bring with me? <span class="faq-icon">+</span></button>
                <div class="faq-answer">
                    <p>We recommend bringing comfortable clothing for 7 days, personal hygiene items, any prescribed medications, and a form of identification. We'll provide a detailed packing list after your admission is confirmed. Electronics policies will be discussed during intake.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Can family members visit? <span class="faq-icon">+</span></button>
                <div class="faq-answer">
                    <p>Yes! We encourage family involvement in the recovery process. After an initial stabilization period, families can participate in scheduled visits, family therapy sessions, and our weekend family program. Visitation schedules are coordinated with your treatment team.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">What types of conditions do you treat? <span class="faq-icon">+</span></button>
                <div class="faq-answer">
                    <p>We treat a wide range of conditions including depression, anxiety disorders, PTSD, bipolar disorder, personality disorders, substance use disorders, eating disorders, and co-occurring (dual diagnosis) conditions. Contact us for a specific assessment of your needs.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Is treatment confidential? <span class="faq-icon">+</span></button>
                <div class="faq-answer">
                    <p>Absolutely. All treatment at Sandeepani Home is strictly confidential and protected by federal and state privacy laws, including HIPAA. Your information is never shared without your explicit written consent, except as required by law.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="section section-dark">
    <div class="container">
        <div class="cta-banner fade-in" style="background: transparent; padding: 0;">
            <h2>Ready to Get Started?</h2>
            <p>Our admissions team is available 24 hours a day, 7 days a week. Call now for a free, confidential consultation.</p>
            <div style="display: flex; gap: var(--spacing-sm); justify-content: center; flex-wrap: wrap;">
                <a href="tel:5551234567" class="btn btn-accent">Call (555) 123-4567</a>
                <a href="<?php echo serenity_page_url('contact'); ?>" class="btn btn-secondary">Send Us a Message</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
