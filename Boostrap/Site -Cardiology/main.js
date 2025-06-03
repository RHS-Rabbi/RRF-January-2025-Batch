// Owl-Carousel
$('#owl-1').owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    navText: [
        '<i class="fa-solid fa-angle-left"></i>',  
        '<i class="fa-solid fa-angle-right"></i>'
    ],
    dots: true,
    dotsEach: true,
    lazyLoad: false,
    autoplay: true,
    autoplaySpeed: 500,
    navSpeed: 500,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
});
$('#owl-2').owlCarousel({
    items: 1,
    loop: true,
    nav: false,
    // navText: [
    //     '<i class="fa-solid fa-angle-left"></i>',  
    //     '<i class="fa-solid fa-angle-right"></i>'
    // ],
    dots: true,
    dotsEach: true,
    lazyLoad: false,
    autoplay: false,
    autoplaySpeed: 500,
    navSpeed: 500,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
});




