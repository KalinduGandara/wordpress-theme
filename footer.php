<?php
/**
 * Theme Footer
 *
 * @package Serenity
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<footer class="site-footer">
	<div class="container">
		<div class="footer-grid">
			<div class="footer-brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
					<div class="logo-text">
						<?php bloginfo( 'name' ); ?>
						<span><?php bloginfo( 'description' ); ?></span>
					</div>
				</a>
				<p><?php esc_html_e( 'Providing compassionate, evidence-based residential treatment for mental health and substance use disorders. Begin your journey to recovery in our tranquil, supportive environment.', 'serenity' ); ?></p>
			</div>

			<div>
				<h4 class="footer-heading"><?php esc_html_e( 'Quick Links', 'serenity' ); ?></h4>
				<ul class="footer-links">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'serenity' ); ?></a></li>
					<li><a href="<?php echo serenity_page_url( 'about' ); ?>"><?php esc_html_e( 'About Us', 'serenity' ); ?></a></li>
					<li><a href="<?php echo serenity_page_url( 'services' ); ?>"><?php esc_html_e( 'Our Services', 'serenity' ); ?></a></li>
					<li><a href="<?php echo serenity_page_url( 'admission' ); ?>"><?php esc_html_e( 'Admission', 'serenity' ); ?></a></li>
					<li><a href="<?php echo serenity_page_url( 'gallery' ); ?>"><?php esc_html_e( 'Gallery', 'serenity' ); ?></a></li>
					<li><a href="<?php echo serenity_page_url( 'contact' ); ?>"><?php esc_html_e( 'Contact Us', 'serenity' ); ?></a></li>
				</ul>
			</div>

			<div>
				<h4 class="footer-heading"><?php esc_html_e( 'Contact Info', 'serenity' ); ?></h4>
				<ul class="footer-contact">
					<li>
						<span class="icon">📍</span>
						<span><?php esc_html_e( '102C, Vijaya Kumarathunga Mawatha, Uswetakeiyawa.', 'serenity' ); ?></span>
					</li>
					<li>
						<span class="icon">📞</span>
						<span><?php esc_html_e( '011 29 41 989', 'serenity' ); ?></span>
					</li>
					<li>
						<span class="icon">✉️</span>
						<span><?php esc_html_e( 'sandeepanihome@yahoo.com', 'serenity' ); ?></span>
					</li>
					<li>
						<span class="icon">🕐</span>
						<span><?php esc_html_e( '24/7 Admissions Hotline', 'serenity' ); ?></span>
					</li>
				</ul>
			</div>
		</div>

		<div class="footer-bottom">
			<p>
				&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> <?php esc_html_e( 'Treatment Center. All Rights Reserved.', 'serenity' ); ?>
				| <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><?php esc_html_e( 'Privacy Policy', 'serenity' ); ?></a>
				| <a href="<?php echo esc_url( home_url( '/terms-of-service/' ) ); ?>"><?php esc_html_e( 'Terms of Service', 'serenity' ); ?></a>
			</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
