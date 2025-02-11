$(document).ready(function(){
    $(".slick-carousel").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        centerMode: true,
        variableWidth: true,
        infinite: true,
        focusOnSelect: true,
        cssEase: 'linear',
        touchMove: true,
        prevArrow:'<button class="slick-prev"> < </button>',
        nextArrow:'<button class="slick-next"> > </button>',
        autoplay: true,     
        autoplaySpeed: 2000,
    });
});

var imgs = $('.slick-carousel img');
    imgs.each(function(){
        var item = $(this).closest('.item');
        item.css({
            'background-image': 'url(' + $(this).attr('src') + ')', 
            'background-position': 'center',            
            '-webkit-background-size': 'cover',
            'background-size': 'cover', 
        });
        $(this).hide();
    });




