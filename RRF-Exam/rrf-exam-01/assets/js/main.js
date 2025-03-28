jQuery(document).ready(function(){
    window.onload = ()=>{
        $("#num1").countMe(10,10);
        $("#num2").countMe(30, 30);
        $("#num3").countMe(15, 15);
     }

     $(".testimonial-carousel").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        prevArrow:'<button class="slick-prev"> <svg width="16" height="31" viewBox="0 0 16 31" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.15 28.8665L3.28336 17.9998C2.00002 16.7165 2.00002 14.6165 3.28336 13.3332L14.15 2.46649" stroke="#1F1F1F" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg> </button>',
        nextArrow: '<button class="slick-next"> <svg width="16" height="31" viewBox="0 0 16 31" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M1.85001 28.8665L12.7167 17.9998C14 16.7165 14 14.6165 12.7167 13.3332L1.85001 2.46649" stroke="#1F1F1F" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/> </svg> </button>',
        autoplay: true,
        autoplaySpeed: 2000,

    });
});

