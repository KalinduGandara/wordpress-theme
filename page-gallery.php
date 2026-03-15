<?php
/**
 * Template Name: Gallery
 *
 * @package Serenity
 */
get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="fade-in">Gallery</h1>
        <p class="fade-in">Take a virtual tour of our beautiful campus, comfortable living spaces, and therapeutic environments.</p>
        <div class="breadcrumbs fade-in">
            <a href="<?php echo home_url('/'); ?>">Home</a> &nbsp;/&nbsp; <span>Gallery</span>
        </div>
    </div>
</section>

<!-- Gallery -->
<section class="section">
    <div class="container">
        <div class="gallery-filters fade-in">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="facility">Facility</button>
            <button class="filter-btn" data-filter="rooms">Living Spaces</button>
            <button class="filter-btn" data-filter="grounds">Grounds</button>
            <button class="filter-btn" data-filter="activities">Activities</button>
        </div>
        <div class="gallery-grid" id="gallery-grid">
            <div class="gallery-item fade-in" data-category="facility" onclick="openLightbox(0)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-1.jpg" alt="Main building exterior">
                <div class="gallery-overlay"><span>Main Building</span></div>
            </div>
            <div class="gallery-item fade-in" data-category="rooms" onclick="openLightbox(1)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-2.jpg" alt="Private room">
                <div class="gallery-overlay"><span>Private Room</span></div>
            </div>
            <div class="gallery-item fade-in" data-category="grounds" onclick="openLightbox(2)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-3.jpg" alt="Garden pathway">
                <div class="gallery-overlay"><span>Garden Pathway</span></div>
            </div>
            <div class="gallery-item fade-in" data-category="facility" onclick="openLightbox(3)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-4.jpg" alt="Therapy room">
                <div class="gallery-overlay"><span>Therapy Room</span></div>
            </div>
            <div class="gallery-item fade-in" data-category="activities" onclick="openLightbox(4)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-5.jpg" alt="Yoga session">
                <div class="gallery-overlay"><span>Yoga &amp; Meditation</span></div>
            </div>
            <div class="gallery-item fade-in" data-category="grounds" onclick="openLightbox(5)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-6.jpg" alt="Outdoor seating area">
                <div class="gallery-overlay"><span>Outdoor Lounge</span></div>
            </div>
            <div class="gallery-item fade-in" data-category="rooms" onclick="openLightbox(6)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-7.jpg" alt="Common living area">
                <div class="gallery-overlay"><span>Common Area</span></div>
            </div>
            <div class="gallery-item fade-in" data-category="activities" onclick="openLightbox(7)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-8.jpg" alt="Art therapy session">
                <div class="gallery-overlay"><span>Art Therapy</span></div>
            </div>
            <div class="gallery-item fade-in" data-category="facility" onclick="openLightbox(8)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-9.jpg" alt="Dining area">
                <div class="gallery-overlay"><span>Dining Hall</span></div>
            </div>
        </div>
    </div>
</section>

<!-- Lightbox -->
<div class="lightbox" id="lightbox">
    <button class="lightbox-close" onclick="closeLightbox()">&times;</button>
    <button class="lightbox-nav lightbox-prev" onclick="changeLightbox(-1)">&#10094;</button>
    <img id="lightbox-img" src="" alt="Gallery image">
    <button class="lightbox-nav lightbox-next" onclick="changeLightbox(1)">&#10095;</button>
</div>

<!-- CTA -->
<section class="section section-alt">
    <div class="container">
        <div class="cta-banner fade-in">
            <h2>Experience Sandeepani Home In Person</h2>
            <p>Schedule a private tour of our facility and see firsthand the warm, healing environment we've created.</p>
            <a href="<?php echo serenity_page_url('contact'); ?>" class="btn btn-accent">Schedule a Tour</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
