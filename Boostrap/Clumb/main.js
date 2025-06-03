// Qwl-Carousel
$(document).ready(function(){
    $('.slider-carousel').owlCarousel({
        loop: true,
        nav: true, 
        autoplay: false, 
        autoplayTimeout: 3000,
        items: 1,
        dots: false,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 1000, 
    });
});
$(document).ready(function(){
    $('.slider-carousel-two').owlCarousel({
        loop: true,
        nav: true, 
        autoplay: false, 
        autoplayTimeout: 3000,
        items: 1,
        dots: false,
        navText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"],
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 1000, 
    });
});
$(document).ready(function(){
    $('.blog-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        autoplay: false,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });
});



// Nav Menu Active
$(document).ready(function () {
    $('.mainmenu .nav-link').on('click', function () {
        $('.mainmenu .nav-link').removeClass('active');
        $(this).addClass('active');
    });
});



// Add animation when the slide changes
$('.slider-carousel').on('translated.owl.carousel', function(event) {
    var currentSlide = $(event.target).find('.owl-item.active .slider-content');
    
    currentSlide.find('h2').addClass('animate__animated animate__bounceInUp');
    currentSlide.find('h1').addClass('animate__animated animate__bounceInUp animate__delay-1s');
    currentSlide.find('p').addClass('animate__animated animate__bounceInUp animate__delay-2s');
    currentSlide.find('a').addClass('animate__animated animate__bounceInUp animate__delay-3s');
});

// Remove animation before sliding to the next item
$('.slider-carousel').on('translate.owl.carousel', function(event) {
    var currentSlide = $(event.target).find('.owl-item .slider-content');
    
    currentSlide.find('h2').removeClass('animate__animated animate__bounceInUp');
    currentSlide.find('h1').removeClass('animate__animated animate__bounceInUp animate__delay-1s');
    currentSlide.find('p').removeClass('animate__animated animate__bounceInUp animate__delay-2s');
    currentSlide.find('a').removeClass('animate__animated animate__bounceInUp animate__delay-3s');
});



document.querySelectorAll('.accordion-button').forEach(button => {
    button.addEventListener('click', function () {
        const icon = this.querySelector('.icon');

        // Toggle between plus and minus
        if (this.classList.contains('collapsed')) {
            icon.textContent = '+';
        } else {
            icon.textContent = '-';
        }
    });
});

$(document).ready(function() {
    $('.counter').counterUp({
        delay: 10,  // delay in milliseconds
        time: 1000  // total time in milliseconds for the animation
    });
});





$(document).ready(function () {
    // Initialize Isotope
    var $grid = $('.portfolio-items').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'masonry' 
    });

    // Filter items when a filter button is clicked
    $('.portfolio-filter').on('click', '.filter-button', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
        
        // Optional: Add active class to the current filter button
        $('.filter-button').removeClass('active');
        $(this).addClass('active');
    });
});


$(document).ready(function() {
    $('.portfolio-items').magnificPopup({
        delegate: '.img-popup', // child items selector
        type: 'image',
        gallery: {
            enabled: true // enables gallery mode
        }
    });
});

