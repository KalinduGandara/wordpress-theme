<?php
/**
 * Template Name: Admission
 *
 * @package Serenity
 */
get_header();
?>

<!-- Page Hero -->
<?php get_template_part('template_part_hero') ?>
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
                    <h3>Schedule an Initial Interview</h3>
                    <p>Please make an appointment with our Psychologist for an initial interview with the patient. This helps us understand the patient's needs and determine the most suitable course of care.</p>
                </div>
            </div>
            <div class="admission-step fade-in">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3>Collect the Application Kit</h3>
                    <p>Kindly collect the application kit from our office at your earliest convenience. Our staff will be happy to guide you through the required forms and documentation.</p>
                </div>
            </div>
            <div class="admission-step fade-in">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h3>Obtain Psychiatric Recommendation</h3>
                    <p>Please obtain a formal psychiatric recommendation from the patient's treating psychiatrist. This recommendation is an essential requirement for proceeding with the admission process.</p>
                </div>
            </div>
            <div class="admission-step fade-in">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h3>Confirm the Admission Date</h3>
                    <p>Once all documentation is in order, please contact us by telephone to confirm and schedule the admission date. Our team will work with you to find the most convenient time.</p>
                </div>
            </div>
            <div class="admission-step fade-in">
                <div class="step-number">5</div>
                <div class="step-content">
                    <h3>Trial Period Admission</h3>
                    <p>The patient will be admitted for an initial trial period, during which our clinical team will carefully observe and assess their progress to ensure the best possible care and comfort.</p>
                </div>
            </div>
            <div class="admission-step fade-in">
                <div class="step-number">6</div>
                <div class="step-content">
                    <h3>Admission Days &amp; Special Requests</h3>
                    <p>Admissions are conducted on weekdays only. If you require admission on a weekend, a special request must be submitted in advance, and please note that an additional fee will apply for weekend admissions.</p>
                </div>
            </div>
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
            <h2>Need More Information?</h2>
            <p>For more information, please feel free to call us on the following number or send us a message — we are happy to assist you.</p>
            <div style="display: flex; gap: var(--spacing-sm); justify-content: center; flex-wrap: wrap;">
                <a href="tel:0112937275" class="btn btn-accent">Call 011 2 937 275</a>
                <a href="<?php echo serenity_page_url('contact'); ?>" class="btn btn-secondary">Send Us a Message</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
