/**
 * Serenity Theme - Main JavaScript
 *
 * @package Serenity
 */

( function () {
    'use strict';

    // ===== STICKY HEADER =====
    var header = document.getElementById( 'site-header' );
    if ( header ) {
        window.addEventListener( 'scroll', function () {
            header.classList.toggle( 'scrolled', window.scrollY > 50 );
        } );
    }

    // ===== MOBILE MENU TOGGLE =====
    var mobileToggle = document.getElementById( 'mobile-toggle' );
    var mainNav      = document.getElementById( 'main-nav' );

    if ( mobileToggle && mainNav ) {
        mobileToggle.addEventListener( 'click', function () {
            var expanded = 'true' === this.getAttribute( 'aria-expanded' );
            this.setAttribute( 'aria-expanded', String( ! expanded ) );
            this.classList.toggle( 'active' );
            mainNav.classList.toggle( 'active' );
        } );

        mainNav.querySelectorAll( 'a' ).forEach( function ( link ) {
            link.addEventListener( 'click', function () {
                mobileToggle.setAttribute( 'aria-expanded', 'false' );
                mobileToggle.classList.remove( 'active' );
                mainNav.classList.remove( 'active' );
            } );
        } );
    }

    // ===== SCROLL ANIMATIONS =====
    var animatedElements = document.querySelectorAll( '.fade-in, .fade-in-left, .fade-in-right, .scale-in' );
    if ( animatedElements.length > 0 && 'IntersectionObserver' in window ) {
        var observer = new IntersectionObserver( function ( entries ) {
            entries.forEach( function ( entry ) {
                if ( entry.isIntersecting ) {
                    entry.target.classList.add( 'visible' );
                    observer.unobserve( entry.target );
                }
            } );
        }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' } );

        animatedElements.forEach( function ( el ) { observer.observe( el ); } );
    }

    // ===== TESTIMONIAL SLIDER =====
    var track        = document.getElementById( 'testimonial-track' );
    var dots         = document.querySelectorAll( '.slider-dot' );
    var currentSlide = 0;
    var slideInterval;

    function goToSlide( index ) {
        if ( ! track ) { return; }
        var total    = track.children.length;
        currentSlide = ( ( index % total ) + total ) % total;
        track.style.transform = 'translateX(-' + ( currentSlide * 100 ) + '%)';
        dots.forEach( function ( d, i ) { d.classList.toggle( 'active', i === currentSlide ); } );
    }

    function startAutoSlide() {
        slideInterval = setInterval( function () { goToSlide( currentSlide + 1 ); }, 5000 );
    }

    if ( track && dots.length > 0 ) {
        dots.forEach( function ( dot ) {
            dot.addEventListener( 'click', function () {
                clearInterval( slideInterval );
                goToSlide( parseInt( this.dataset.slide, 10 ) );
                startAutoSlide();
            } );
        } );
        startAutoSlide();
    }

    // ===== FAQ ACCORDION =====
    document.querySelectorAll( '.faq-question' ).forEach( function ( btn ) {
        btn.addEventListener( 'click', function () {
            var item     = this.parentElement;
            var isActive = item.classList.contains( 'active' );

            document.querySelectorAll( '.faq-item' ).forEach( function ( faq ) {
                faq.classList.remove( 'active' );
                var q = faq.querySelector( '.faq-question' );
                if ( q ) { q.setAttribute( 'aria-expanded', 'false' ); }
            } );

            if ( ! isActive ) {
                item.classList.add( 'active' );
                this.setAttribute( 'aria-expanded', 'true' );
            }
        } );
    } );

    // ===== GALLERY FILTER =====
    document.querySelectorAll( '.filter-btn' ).forEach( function ( btn ) {
        btn.addEventListener( 'click', function () {
            var filter = this.dataset.filter;
            document.querySelectorAll( '.filter-btn' ).forEach( function ( b ) { b.classList.remove( 'active' ); } );
            this.classList.add( 'active' );
            document.querySelectorAll( '.gallery-item' ).forEach( function ( item ) {
                item.style.display = ( filter === 'all' || item.dataset.category === filter ) ? 'block' : 'none';
            } );
        } );
    } );

    // ===== SMOOTH SCROLL =====
    document.querySelectorAll( 'a[href^="#"]' ).forEach( function ( anchor ) {
        anchor.addEventListener( 'click', function ( e ) {
            var target = document.querySelector( this.getAttribute( 'href' ) );
            if ( target ) {
                e.preventDefault();
                target.scrollIntoView( { behavior: 'smooth', block: 'start' } );
            }
        } );
    } );

    // ===== LIGHTBOX =====
    var lightbox      = document.getElementById( 'lightbox' );
    var lightboxImg   = document.getElementById( 'lightbox-img' );
    var lightboxClose = document.getElementById( 'lightbox-close' );
    var lightboxPrev  = document.getElementById( 'lightbox-prev' );
    var lightboxNext  = document.getElementById( 'lightbox-next' );

    var lightboxImages = [];
    var lightboxIndex  = 0;

    function openLightbox( index ) {
        var items = document.querySelectorAll( '.gallery-item' );
        lightboxImages = [];
        items.forEach( function ( item ) {
            lightboxImages.push( {
                src: item.dataset.src || '',
                alt: item.querySelector( 'img' ) ? item.querySelector( 'img' ).alt : ''
            } );
        } );

        if ( ! lightboxImages.length ) { return; }
        lightboxIndex = ( ( index % lightboxImages.length ) + lightboxImages.length ) % lightboxImages.length;

        if ( lightbox && lightboxImg ) {
            lightboxImg.src = lightboxImages[ lightboxIndex ].src;
            lightboxImg.alt = lightboxImages[ lightboxIndex ].alt;
            lightbox.classList.add( 'active' );
            document.body.style.overflow = 'hidden';
            if ( lightboxClose ) { lightboxClose.focus(); }
        }
    }

    function closeLightbox() {
        if ( lightbox ) {
            lightbox.classList.remove( 'active' );
            document.body.style.overflow = '';
        }
    }

    function changeLightbox( delta ) {
        if ( ! lightboxImages.length ) { return; }
        lightboxIndex = ( ( lightboxIndex + delta ) % lightboxImages.length + lightboxImages.length ) % lightboxImages.length;
        if ( lightboxImg ) {
            lightboxImg.src = lightboxImages[ lightboxIndex ].src;
            lightboxImg.alt = lightboxImages[ lightboxIndex ].alt;
        }
    }

    // Gallery click via event delegation
    var galleryGrid = document.getElementById( 'gallery-grid' );
    if ( galleryGrid ) {
        galleryGrid.addEventListener( 'click', function ( e ) {
            var item = e.target.closest( '.gallery-item' );
            if ( item ) {
                openLightbox( parseInt( item.dataset.index, 10 ) );
            }
        } );

        // Keyboard support for gallery items
        galleryGrid.querySelectorAll( '.gallery-item' ).forEach( function ( item ) {
            item.setAttribute( 'tabindex', '0' );
            item.setAttribute( 'role', 'button' );
            item.addEventListener( 'keydown', function ( e ) {
                if ( e.key === 'Enter' || e.key === ' ' ) {
                    e.preventDefault();
                    openLightbox( parseInt( item.dataset.index, 10 ) );
                }
            } );
        } );
    }

    if ( lightboxClose ) { lightboxClose.addEventListener( 'click', closeLightbox ); }
    if ( lightboxPrev )  { lightboxPrev.addEventListener( 'click', function () { changeLightbox( -1 ); } ); }
    if ( lightboxNext )  { lightboxNext.addEventListener( 'click', function () { changeLightbox( 1 ); } ); }

    document.addEventListener( 'keydown', function ( e ) {
        if ( ! lightbox || ! lightbox.classList.contains( 'active' ) ) { return; }
        if ( e.key === 'Escape' )     { closeLightbox(); }
        if ( e.key === 'ArrowLeft' )  { changeLightbox( -1 ); }
        if ( e.key === 'ArrowRight' ) { changeLightbox( 1 ); }
    } );

    if ( lightbox ) {
        lightbox.addEventListener( 'click', function ( e ) {
            if ( e.target === lightbox ) { closeLightbox(); }
        } );
    }

} )();
