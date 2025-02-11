jQuery(document).ready(function(){
    
    $(".improve-left ul li a").click(function() {

        $(".improve-left ul li a").removeClass("active");
        $(this).addClass("active");

        $(".tab-content").hide();
        
        let tab = $(this).data("tab");

        // $(`#${tab}`).show();
        $("#" + tab).fadeIn();
    });

    // Magnific Popup for Video
    $('.popup-video').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 300,
        preloader: false,
        fixedContentPos: false
    });


    $('.community-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,  // Show next/prev arrows
        dots: true,    // Show dots for navigation
        fade: true,
        cssEase: 'linear'
    });

});


window.onload = function() {
    document.getElementById("preloader").style.display = "none";
};
