jQuery(document).ready(function() {
    // Info-Two
    $('.info-slider-two').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true,
        arrows: false,
        autoplay: true, 
        autoplaySpeed: 3000,
        loop: true,
    });
    // Team
    $('.team-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true,
        arrows: false,
        autoplay: true, 
        autoplaySpeed: 3000,
        loop: true,
    });

    // Project Slider
    $('.project-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        autoplay: true, 
        autoplaySpeed: 3000,
        loop: true,
        arrows: true,
        prevArrow: `<button class="slick-prev"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M15.0005 9.00021H3.83047L8.71047 13.8802C9.10047 14.2702 9.10047 14.9102 8.71047 15.3002C8.32047 15.6902 7.69047 15.6902 7.30047 15.3002L0.710469 8.71021C0.320469 8.32021 0.320469 7.69021 0.710469 7.30021L7.29047 0.700215C7.68047 0.310215 8.31047 0.310215 8.70047 0.700215C9.09047 1.09021 9.09047 1.72021 8.70047 2.11021L3.83047 7.00021H15.0005C15.5505 7.00021 16.0005 7.45021 16.0005 8.00021C16.0005 8.55021 15.5505 9.00021 15.0005 9.00021Z" fill="#323232"/>
                        </svg> 
                    </button>`,

        nextArrow: `<button class="slick-next"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M1.41797 9.00021H12.588L7.70797 13.8802C7.31797 14.2702 7.31797 14.9102 7.70797 15.3002C8.09797 15.6902 8.72796 15.6902 9.11796 15.3002L15.708 8.71021C16.098 8.32021 16.098 7.69021 15.708 7.30021L9.12796 0.700215C8.73796 0.310215 8.10797 0.310215 7.71797 0.700215C7.32797 1.09021 7.32797 1.72021 7.71797 2.11021L12.588 7.00021H1.41797C0.867969 7.00021 0.417969 7.45021 0.417969 8.00021C0.417969 8.55021 0.867969 9.00021 1.41797 9.00021Z" fill="#323232"/>
                        </svg> 
                    </button>`,
    });
    $('.growth-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        autoplay: true, 
        autoplaySpeed: 3000,
        loop: true,
        arrows: false,
    });
});
