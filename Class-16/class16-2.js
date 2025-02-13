jQuery(document).ready(function() {
    // Isotope
    var $grid = $('.product-grid').isotope({
        itemSelector: '.single-product-list',
        layoutMode: 'fitRows'
    });

    $('.filter-button').on('click', function() {
        $('.filter-button').removeClass('active');
        $(this).addClass('active');
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });
    // Slick Carousel
    $('.slider-carousel').slick({
        slidesToShow: 1,
        slidesToScroll: 1, 
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,
        dots: true,
        fade: true,
        infinite: true,
        draggable: true, 
        swipe: true, 
        touchMove: true,
        prevArrow:'<button class="slick-prev"> < </button>',
        nextArrow:'<button class="slick-next"> > </button>', 
    });
    // Magnific Popup
    $('.popup-link').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true ,
        }
    });

    // Accordion
    $("#accordion").accordion({
        collapsible: true,  
        heightStyle: "content", 
        animate: 300  ,
    });
    // Counter
    $(document).ready(function () {
        $('.counter').counterUp({
            delay: 10,  
            time: 2000,
        });
    });



    
});






