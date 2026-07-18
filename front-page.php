<?php
/**
 * Front Page Template
 *
 * @package Serenity
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$hero_url = serenity_get_metabox_image_url( 'page_hero_image', array() );
$bg_url   = serenity_get_metabox_image_url( 'page_background_image', array() );
$secondary_images = serenity_get_metabox_image_urls( 'page_secondary_images', array() );

$hero_style = '';
if ( $bg_url ) {
	$hero_style = ' style="background: linear-gradient(135deg, rgba(15,37,48,0.85), rgba(26,58,74,0.75)), url(\'' . $bg_url . '\') center/cover no-repeat;"';
}
?>

<!-- Hero Section -->
<section class="hero"<?php echo $hero_style; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- built from esc_url() output only ?>>
	<div class="container">
		<div class="hero-content fade-in">
			<span class="hero-label"><?php esc_html_e( 'Welcome to Sandeepani Home', 'serenity' ); ?></span>
			<h1><?php esc_html_e( 'Your Journey to ', 'serenity' ); ?><em><?php esc_html_e( 'Healing', 'serenity' ); ?></em> <?php esc_html_e( 'Starts Here', 'serenity' ); ?></h1>
			<p><?php esc_html_e( 'We provide compassionate, evidence-based residential treatment in a tranquil setting, helping individuals rediscover hope, resilience, and lasting well-being.', 'serenity' ); ?></p>
			<div class="hero-buttons">
				<a href="<?php echo serenity_page_url( 'admission' ); ?>" class="btn btn-primary"><?php esc_html_e( 'Begin Your Recovery', 'serenity' ); ?></a>
				<a href="<?php echo serenity_page_url( 'services' ); ?>" class="btn btn-secondary"><?php esc_html_e( 'Explore Our Programs', 'serenity' ); ?></a>
			</div>
		</div>
	</div>
</section>

<!-- Stats Bar -->
<div class="stats-bar fade-in">
	<div class="stats-grid">
		<div class="stat-item">
			<h3><?php esc_html_e( '20+', 'serenity' ); ?></h3>
			<p><?php esc_html_e( 'Years Experience', 'serenity' ); ?></p>
		</div>
		<div class="stat-item">
			<h3><?php esc_html_e( '5,000+', 'serenity' ); ?></h3>
			<p><?php esc_html_e( 'Lives Transformed', 'serenity' ); ?></p>
		</div>
		<div class="stat-item">
			<h3><?php esc_html_e( '95%', 'serenity' ); ?></h3>
			<p><?php esc_html_e( 'Success Rate', 'serenity' ); ?></p>
		</div>
		<div class="stat-item">
			<h3><?php esc_html_e( '24/7', 'serenity' ); ?></h3>
			<p><?php esc_html_e( 'Support Available', 'serenity' ); ?></p>
		</div>
	</div>
</div>

<!-- About Preview -->
<section class="section">
	<div class="container">
		<div class="about-grid">
			<?php if ( $hero_url ) : ?>
			<div class="about-image fade-in-left">
				<img src="<?php echo esc_url( $hero_url ); ?>" alt="<?php esc_attr_e( 'Sandeepani Home facility surrounded by nature', 'serenity' ); ?>" loading="lazy">
				<br/>
				<?php if ( ! empty( $secondary_images ) ) : ?>
					<?php foreach ( $secondary_images as $secondary_image ) : ?>
						<div class="about-image fade-in-left">
							<img src="<?php echo esc_url( $secondary_image ); ?>" alt="<?php esc_attr_e( 'Sandeepani Home services facility view', 'serenity' ); ?>" loading="lazy">
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<div class="about-content fade-in-right">
				<span class="section-label"><?php esc_html_e( 'About Our Center', 'serenity' ); ?></span>
				<h2><?php esc_html_e( 'Welcome to Sandeepani Home', 'serenity' ); ?></h2>
				<p><?php esc_html_e( 'According to the census of population of Sri Lanka in the year 2001, a rate of 40.9 persons out of 10,000 people is mentally disabled. Further, it indicates that 49.1% of the causes of the patients are non-congenital, but that they are the result of illnesses, accidents, violence, war, terrorism, etc. Hence most of the mentally disabled people may be rehabilitated and sent back to the society to lead a normal social life.', 'serenity' ); ?></p>
				<p><?php esc_html_e( 'The above facts show the importance of establishing rehabilitation centers for mentally disabled people. However, unfortunately there are only a very few such centers in the country at the moment.', 'serenity' ); ?></p>
				<p><?php esc_html_e( 'In this background, Sandeepani Home which is a community based rehabilitation center was established in March 2004. From its inception it is being operated as a Non-Governmental Organization with the approval of the Government of Sri Lanka.', 'serenity' ); ?></p>
				<p><?php esc_html_e( 'We provide services for those affected by Schizophrenia, Depression, Mania, Bi-Polar and substance abuse disorders. The Patients are assessed monthly by a team of staff including a consultant psychiatrist, clinical physiologist, counselors, and psychotherapists.', 'serenity' ); ?></p>
				<a href="<?php echo serenity_page_url( 'about' ); ?>" class="btn btn-primary btn--mt"><?php esc_html_e( 'Learn More About Us', 'serenity' ); ?></a>
			</div>
		</div>
	</div>
</section>

<!-- CTA Banner -->
<section class="section">
	<div class="container">
		<div class="cta-banner fade-in">
			<h2><?php esc_html_e( 'Ready to Take the First Step?', 'serenity' ); ?></h2>
			<p><?php esc_html_e( 'Our admissions team is available 24/7 to answer your questions and help you begin your journey to recovery.', 'serenity' ); ?></p>
			<div class="btn-group">
				<a href="<?php echo serenity_page_url( 'admission' ); ?>" class="btn btn-accent"><?php esc_html_e( 'Start Admission Process', 'serenity' ); ?></a>
				<a href="tel:0112941989" class="btn btn-secondary"><?php esc_html_e( 'Call 011 29 41 989', 'serenity' ); ?></a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
