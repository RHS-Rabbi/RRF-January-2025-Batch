// Qwl-Carousel
$(document).ready(function(){
    $('.slider-carousel').owlCarousel({
        items: 1, 
        loop: true,
        autoplay: true, 
        autoplayTimeout: 5000, 
        nav: true, 
        dots: true, 
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
    });
});
// $(document).ready(function(){
//     $('.testimonial-carousel').owlCarousel({
//         items: 2, 
//         loop: false,
//         autoplay: true, 
//         autoplayTimeout: 5000, 
//         nav: false, 
//         dots: false, 
//         navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
//     });
// });
$(document).ready(function(){
    $('.testimonial-carousel').owlCarousel({
        items: 2,
        loop: false,
        autoplay: true,
        autoplayTimeout: 5000,
        nav: false,
        dots: false,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1 // 1 item on mobile devices
            },
            768: {
                items: 2 // 2 items on tablets and larger devices
            }
        }
    });
});
$(document).ready(function(){
    $('.brand-carousel').owlCarousel({
        items: 5,
        loop: true,
        autoplay: false,
        autoplayTimeout: 5000,
        nav: false,
        dots: false,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 2 // 1 item on mobile devices
            },
            768: {
                items: 5 // 2 items on tablets and larger devices
            }
        }
    });
});



// Function to remove all animations
function removeAnimations() {
    $('.slider-item .animate__animated').each(function() {
        $(this).removeClass('animate__fadeInUp animate__fadeInLeft animate__fadeInRight');
        void this.offsetWidth; // Trigger reflow to reset animation
    });
}

// Function to add animations to the active slide
function addAnimations() {
    $('.owl-item.active .slider-item').each(function(index) {
        // Determine the animation class based on the index of the active slide
        let animationClass;
        if ($(this).hasClass('slider-bg1')) {
            animationClass = 'animate__fadeInLeft';
        } else if ($(this).hasClass('slider-bg2')) {
            animationClass = 'animate__fadeInUp';
        } else if ($(this).hasClass('slider-bg3')) {
            animationClass = 'animate__fadeInRight';
        }

        // Apply animations with delays
        $(this).find('.animate__animated').each(function() {
            $(this).addClass(animationClass);
            if ($(this).is('p')) {
                $(this).css('animation-delay', '0.2s');
            } else if ($(this).is('h1')) {
                $(this).css('animation-delay', '0.4s');
            } else if ($(this).is('h4')) {
                $(this).css('animation-delay', '0.6s');
            } else if ($(this).is('a')) {
                $(this).css('animation-delay', '0.8s');
            }
        });
    });
}

// Initialize and add animations to the first slide
setTimeout(function() {
    addAnimations();
}, 100); // Adjust delay if needed

// When the slide changes (before)
$('.slider-carousel').on('change.owl.carousel', function(event) {
    removeAnimations();
});

// When the slide becomes active (after)
$('.slider-carousel').on('translated.owl.carousel', function(event) {
    addAnimations();
});

// When the page loads, trigger the first slide animation
$(window).on('load', function() {
    addAnimations();
});













$(document).ready(function() {
    // Initialize Isotope
    var $grid = $('.product-grid').isotope({
        itemSelector: '.col-md-3',
        layoutMode: 'fitRows'
    });

    // Filter items on button click
    $('.filter-button').on('click', function() {
        $('.filter-button').removeClass('active');
        $(this).addClass('active');
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });
});








// $(document).ready(function(){
//     $('.blog-carousel').owlCarousel({
//         loop: true,
//         margin: 30,
//         nav: false,
//         dots: false,
//         autoplay: false,
//         autoplayTimeout: 5000,
//         responsive: {
//             0: {
//                 items: 1
//             },
//             768: {
//                 items: 2
//             },
//             992: {
//                 items: 3
//             }
//         }
//     });
// });



// Nav Menu Active
$(document).ready(function () {
    $('.mainmenu .nav-link').on('click', function () {
        $('.mainmenu .nav-link').removeClass('active');
        $(this).addClass('active');
    });
});



document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.dropdown > a').forEach(function(dropdownToggle) {
        dropdownToggle.addEventListener('click', function(event) {
            event.preventDefault();
            const parent = this.parentElement;
            parent.classList.toggle('open');
            
            // Close other dropdowns if open
            document.querySelectorAll('.dropdown').forEach(function(otherDropdown) {
                if (otherDropdown !== parent) {
                    otherDropdown.classList.remove('open');
                }
            });
        });
    });

    // Close dropdown if clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown').forEach(function(dropdown) {
                dropdown.classList.remove('open');
            });
        }
    });
});


document.querySelector('.search_btn').addEventListener('click', function () {
    const searchBox = document.querySelector('.search-box');
    searchBox.classList.toggle('active');
});










