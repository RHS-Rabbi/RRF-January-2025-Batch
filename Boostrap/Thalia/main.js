// Sticky Header
$(document).ready(function() {
    var header = $(".header"); // Select the header

    $(window).scroll(function() {
        if ($(window).scrollTop() > 50) {  // Trigger the change after 50px of scrolling
            header.addClass("sticky");
        } else {
            header.removeClass("sticky");
        }
    });
});


document.addEventListener('DOMContentLoaded', function () {
    // Get the navbar toggler button and the collapse element
    var toggler = document.querySelector('.navbar-toggler');
    var navbarCollapse = document.querySelector('#navbarNavAltMarkup');

    // Add click event listener to the toggler button
    toggler.addEventListener('click', function () {
        // Check if the collapse element has the 'show' class (open state)
        if (navbarCollapse.classList.contains('show')) {
            // If it's open, remove the 'show' class to close it
            navbarCollapse.classList.remove('show');
        } else {
            // If it's closed, add the 'show' class to open it
            navbarCollapse.classList.add('show');
        }
    });

    // Optionally, if you want to close the navbar when clicking outside of it:
    document.addEventListener('click', function (event) {
        if (!navbarCollapse.contains(event.target) && !toggler.contains(event.target)) {
            // If clicked outside the navbar and the toggle button, close the navbar
            navbarCollapse.classList.remove('show');
        }
    });
});









// Nav Active
document.addEventListener('DOMContentLoaded', function () {
    var navItems = document.querySelectorAll('.nav-item');

    navItems.forEach(function (item) {
        item.addEventListener('click', function (e) {
            if (window.innerWidth <= 991) {
                if (item.classList.contains('active')) {
                    item.classList.remove('active');
                } else {
                    navItems.forEach(function (i) {
                        i.classList.remove('active');
                    });
                    item.classList.add('active');
                }
            }
        });
    });
});

// Slide Animated CSS
document.addEventListener("DOMContentLoaded", function () {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate__slideInUp');
            }
        });
    });

    observer.observe(document.querySelector('#scroll-animation'));
});


// Owl-Carousel
$('#owl-1').owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    navText: [
        '<i class="fa-solid fa-arrow-left"></i>',  
        '<i class="fa-solid fa-arrow-right"></i>'
    ],
    dots: false,
    dotsEach: true,
    lazyLoad: false,
    autoplay: true,
    autoplaySpeed: 500,
    navSpeed: 500,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut'
});

$('#owl-2').owlCarousel({
    items: 1,
    loop: true,
    nav: false,
    dots: true,
    dotsEach: true,
    lazyLoad: true,
    autoplay: true,
    autoplaySpeed: 1000,
    navSpeed: 1000,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut'
});
$('#owl-3').owlCarousel({
    items: 7,
    loop: true,
    nav: false,
    dots: false,
    dotsEach: true,
    lazyLoad: true,
    autoplay: true,
    responsive: {
        0: {      // For small screens like mobile
            items: 3
        },
        600: {    // For tablets and smaller laptops
            items: 2
        },
        1000: {   // For large screens like desktops
            items: 7
        }
    }
});


 // Initialize Magnific Popup for the gallery
 $('.popup-gallery').magnificPopup({
    type: 'image',
    gallery: {
        enabled: true, // Enable gallery mode for multiple images
        navigateByImgClick: true,
        preload: [0, 1] // Preload previous and next images
    }
});









// Magnific PopUp
$(document).ready(function() {
    $('.popup-youtube').magnificPopup({
        type: 'iframe',
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com/', 
                    id: 'v=',
                    src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                }
            }
        }
    });
});


function revealImages() {
    const revealElements = document.querySelectorAll('.block-revealer');

    revealElements.forEach((element) => {
        const block = element.querySelector('.block-revealer__element');
        const content = element.querySelector('.block-revealer__content');

        gsap.timeline({
            scrollTrigger: {
                trigger: element,
                start: "top 80%",
                end: "bottom 20%",
                toggleActions: "play none none none",
            }
        })
        .to(block, { x: "100%", duration: 2, ease: "power2.out" }) 
        .to(content, { x: "0%", duration: 2, ease: "power2.out" }, "-=1.5");
    });
}

// Initialize GSAP and ScrollTrigger on page load
window.onload = () => {
    gsap.registerPlugin(ScrollTrigger);
    revealImages();
};


// Boostrap Date Picker
$(document).ready(function () {
    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        autoclose: true
    });
});
