/**
 * Serenity Theme - Main JavaScript
 *
 * @package Serenity
 */

document.addEventListener('DOMContentLoaded', function () {

    // ===== STICKY HEADER =====
    const header = document.getElementById('site-header');
    if (header) {
        window.addEventListener('scroll', function () {
            header.classList.toggle('scrolled', window.scrollY > 50);
        });
    }

    // ===== MOBILE MENU TOGGLE =====
    const mobileToggle = document.getElementById('mobile-toggle');
    const mainNav = document.getElementById('main-nav');
    if (mobileToggle && mainNav) {
        mobileToggle.addEventListener('click', function () {
            mobileToggle.classList.toggle('active');
            mainNav.classList.toggle('active');
        });
        // Close on link click
        mainNav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                mobileToggle.classList.remove('active');
                mainNav.classList.remove('active');
            });
        });
    }

    // ===== SCROLL ANIMATIONS (Intersection Observer) =====
    const animatedElements = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right, .scale-in');
    if (animatedElements.length > 0 && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });

        animatedElements.forEach(function (el) { observer.observe(el); });
    }

    // ===== TESTIMONIAL SLIDER =====
    const track = document.getElementById('testimonial-track');
    const dots = document.querySelectorAll('.slider-dot');
    let currentSlide = 0;
    let slideInterval;

    function goToSlide(index) {
        if (!track) return;
        const total = track.children.length;
        currentSlide = ((index % total) + total) % total;
        track.style.transform = 'translateX(-' + (currentSlide * 100) + '%)';
        dots.forEach(function (d, i) { d.classList.toggle('active', i === currentSlide); });
    }

    function startAutoSlide() {
        slideInterval = setInterval(function () { goToSlide(currentSlide + 1); }, 5000);
    }

    if (track && dots.length > 0) {
        dots.forEach(function (dot) {
            dot.addEventListener('click', function () {
                clearInterval(slideInterval);
                goToSlide(parseInt(this.dataset.slide));
                startAutoSlide();
            });
        });
        startAutoSlide();
    }

    // ===== FAQ ACCORDION =====
    document.querySelectorAll('.faq-question').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var item = this.parentElement;
            var isActive = item.classList.contains('active');
            // Close all
            document.querySelectorAll('.faq-item').forEach(function (faq) { faq.classList.remove('active'); });
            // Open clicked if not already open
            if (!isActive) { item.classList.add('active'); }
        });
    });

    // ===== GALLERY FILTER =====
    document.querySelectorAll('.filter-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var filter = this.dataset.filter;
            document.querySelectorAll('.filter-btn').forEach(function (b) { b.classList.remove('active'); });
            this.classList.add('active');
            document.querySelectorAll('.gallery-item').forEach(function (item) {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // ===== SMOOTH SCROLL FOR ANCHORS =====
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
});

// ===== LIGHTBOX (Global functions for inline onclick) =====
var lightboxImages = [];
var lightboxIndex = 0;

function openLightbox(index) {
    var items = document.querySelectorAll('.gallery-item img');
    lightboxImages = [];
    items.forEach(function (img) { lightboxImages.push(img.src); });
    lightboxIndex = index;
    var lightbox = document.getElementById('lightbox');
    var img = document.getElementById('lightbox-img');
    if (lightbox && img) {
        img.src = lightboxImages[lightboxIndex];
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
}

function closeLightbox() {
    var lightbox = document.getElementById('lightbox');
    if (lightbox) {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }
}

function changeLightbox(delta) {
    lightboxIndex = ((lightboxIndex + delta) % lightboxImages.length + lightboxImages.length) % lightboxImages.length;
    var img = document.getElementById('lightbox-img');
    if (img) { img.src = lightboxImages[lightboxIndex]; }
}

// Close lightbox on Escape or background click
document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeLightbox(); });
document.addEventListener('click', function (e) {
    if (e.target && e.target.id === 'lightbox') closeLightbox();
});
