$(document).ready(function(){
    $('.slider-owl').owlCarousel({
        loop: true,
        margin: 10,
        nav: false, 
        autoplay: false, 
        autoplayTimeout: 3000,
        items: 1,
        dots: false,
        // navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
    });
});
$(document).ready(function(){
    $('.brand-area-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: false,
        autoplayTimeout: 3000,
        dots: false,
        responsive: {
            0: {
                items: 2  // 2 items for screens 0px and up (mobile)
            },
            768: {
                items: 3  // 3 items for tablet-sized screens
            },
            1024: {
                items: 5  // 5 items for desktop screens 1024px and up
            }
        }
    });
});

$(document).ready(function() {
    $('.image-link').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});

$(document).ready(function() {
    $('.counter').counterUp({
        delay: 10,  // delay in milliseconds
        time: 1000  // total time in milliseconds for the animation
    });
});


