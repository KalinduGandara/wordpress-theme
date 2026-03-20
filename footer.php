<?php
/**
 * Theme Footer
 *
 * @package Serenity
 */
?>

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="<?php echo home_url('/'); ?>" class="site-logo">
                    <div class="logo-text">
                        Sandeepani Home
                        <span>Treatment Center</span>
                    </div>
                </a>
                <p>Providing compassionate, evidence-based residential treatment for mental health and substance use disorders. Begin your journey to recovery in our tranquil, supportive environment.</p>
            </div>

            <div>
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                    <li><a href="<?php echo serenity_page_url('about'); ?>">About Us</a></li>
                    <li><a href="<?php echo serenity_page_url('services'); ?>">Our Services</a></li>
                    <li><a href="<?php echo serenity_page_url('admission'); ?>">Admission</a></li>
                    <li><a href="<?php echo serenity_page_url('gallery'); ?>">Gallery</a></li>
                    <li><a href="<?php echo serenity_page_url('contact'); ?>">Contact Us</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-heading">Contact Info</h4>
                <ul class="footer-contact">
                    <li>
                        <span class="icon">📍</span>
                        <span>103/A, St.Marys Road, Uswetakeiyawa.</span>
                    </li>
                    <li>
                        <span class="icon">📞</span>
                        <span>011 29 41 989</span>
                    </li>
                    <li>
                        <span class="icon">✉️</span>
                        <span>sandeepanihome@yahoo.com</span>
                    </li>
                    <li>
                        <span class="icon">🕐</span>
                        <span>24/7 Admissions Hotline</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Sandeepani Home Treatment Center. All Rights Reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
