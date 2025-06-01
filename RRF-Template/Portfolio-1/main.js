    // Hero Nav Menu
    const hamburger = document.getElementById('hamburger');
    const closeBtn = document.getElementById('close-menu');
    const mobileMenu = document.getElementById('mobile-menu');

    hamburger.addEventListener('click', () => {
        mobileMenu.classList.remove('-translate-x-full');
        mobileMenu.classList.add('translate-x-0');
        hamburger.classList.add('hidden');
    });

    closeBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('translate-x-0');
        mobileMenu.classList.add('-translate-x-full');
        hamburger.classList.remove('hidden');
    });

    //Cursor
    let outline = document.querySelector('.outline');
    let cursor = document.querySelector('.cursor');
    let a = document.querySelectorAll('a');

    document.addEventListener('mousemove', function(e){
    let x = e.clientX;
    let y = e.clientY;
    outline.style.transform = `translate(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%) )`
    });

    document.addEventListener('mousemove', function(e){
    let x = e.clientX;
    let y = e.clientY;
    cursor.style.left = x + 'px';
    cursor.style.top = y + 'px';
    });



    a.forEach(item => {
    item.addEventListener('mouseover', () => {
        outline.classList.add('hover');
    });
    item.addEventListener('mouseleave', () => {
        outline.classList.remove('hover');
    });
    })


    // for typed Js
    var typed = new Typed('#typed', {
    strings: ['Web Designer', 'Web Developer', 'Freelancer', 'UI/UX Learner', 'pixel Perfectionist'],
    smartBackspace: true,
    typeSpeed: 100,
    backSpeed: 80,
    loop: true
  });
  

// AoS

 AOS.init({
   duration: 800,       
   easing: 'linear', 
   once: true,
 }
 );


// jQuery(document).ready(function(){
//     $('#about-html').circleProgress({
//         value: 0.90,
//         size: 160,
//         fill: '#FFB400', 
//         thickness: 10,
//         emptyFill: '#252525',
//     }).on('circle-animation-progress', function(event, progress) {
//         $(this).siblings('.progressbar-parcentage').text(Math.round(90 * progress) + '%');
//     });
//     $('#about-css').circleProgress({
//         value: 0.85,
//         size: 160,
//         fill: '#FFB400', 
//         thickness: 10,
//         emptyFill: '#252525',
//     }).on('circle-animation-progress', function(event, progress) {
//         $(this).siblings('.progressbar-parcentage').text(Math.round(85 * progress) + '%');
//     });
//     $('#about-javascript').circleProgress({
//         value: 0.40,
//         size: 160,
//         fill: '#FFB400', 
//         thickness: 10,
//         emptyFill: '#252525',
//     }).on('circle-animation-progress', function(event, progress) {
//         $(this).siblings('.progressbar-parcentage').text(Math.round(40 * progress) + '%');
//     });
//     $('#about-jquery').circleProgress({
//         value: 0.70,
//         size: 160,
//         fill: '#FFB400', 
//         thickness: 10,
//         emptyFill: '#252525',
//     }).on('circle-animation-progress', function(event, progress) {
//         $(this).siblings('.progressbar-parcentage').text(Math.round(70 * progress) + '%');
//     });
//     $('#about-php').circleProgress({
//         value: 0.60,
//         size: 160,
//         fill: '#FFB400', 
//         thickness: 10,
//         emptyFill: '#252525',
//     }).on('circle-animation-progress', function(event, progress) {
//         $(this).siblings('.progressbar-parcentage').text(Math.round(60 * progress) + '%');
//     });
//     $('#about-wordpress').circleProgress({
//         value: 0.65,
//         size: 160,
//         fill: '#FFB400', 
//         thickness: 10,
//         emptyFill: '#252525',
//     }).on('circle-animation-progress', function(event, progress) {
//         $(this).siblings('.progressbar-parcentage').text(Math.round(65 * progress) + '%');
//     });
//     $('#about-bootstrap').circleProgress({
//         value: 0.92,
//         size: 160,
//         fill: '#FFB400', 
//         thickness: 10,
//         emptyFill: '#252525',
//     }).on('circle-animation-progress', function(event, progress) {
//         $(this).siblings('.progressbar-parcentage').text(Math.round(92 * progress) + '%');
//     });
//     $('#about-tailwind-css').circleProgress({
//         value: 0.90,
//         size: 160,
//         fill: '#FFB400', 
//         thickness: 10,
//         emptyFill: '#252525',
//     }).on('circle-animation-progress', function(event, progress) {
//         $(this).siblings('.progressbar-parcentage').text(Math.round(90 * progress) + '%');
//     });
// });


jQuery(document).ready(function () {
    let animated = false;

    function isInViewport(el) {
        const rect = el.getBoundingClientRect();
        return rect.top < window.innerHeight && rect.bottom > 0;
    }

    function animateSkills() {
        if (animated) return;

        if (isInViewport(document.querySelector('.single-about-info'))) {
            animated = true;

            const skills = {
                '#about-html': 90,
                '#about-css': 85,
                '#about-javascript': 40,
                '#about-jquery': 70,
                '#about-php': 60,
                '#about-wordpress': 75,
                '#about-bootstrap': 90,
                '#about-tailwind-css': 80,
                '#about-git-gitHub': 70,
                '#about-responsive-design': 99,
                '#about-elementor': 50,
                '#about-figma': 98,
            };

            $.each(skills, function (id, percent) {
                $(id).circleProgress({
                    value: percent / 100,
                    size: 150,
                    fill: '#72b626',
                    thickness: 10,
                    emptyFill: '#252525',
                }).on('circle-animation-progress', function (e, progress) {
                    $(this).siblings('.progressbar-parcentage').text(Math.round(percent * progress) + '%');
                });
            });
        }
    }

    $(window).on('scroll', animateSkills);
    animateSkills();
});



const sticky_header = document.querySelector('.sticky-header');

// Close mobile menu when a nav link is clicked
window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        sticky_header.classList.add('scrolled');
    } else {
        sticky_header.classList.remove('scrolled');
    }
});



// Portfolio Popup
// $("#single-portfolio").click(function() {
//   $(".single-portfolio-popup").fadeIn(500);
// });
// $(".portfolio-close").click(function() {
//   $(".single-portfolio-popup").fadeOut(500);
// });

//   $(document).ready(function () {
//     // Open modal with data
//     $('.single-portfolio-list').on('click', function () {
//       const title = $(this).data('title');
//       const desc = $(this).data('description');

//       $('#popupTitle').text(title);
//       $('#popupDesc').text(desc);
//       $('.single-portfolio-popup').removeClass('hidden');
//     });

//     // Close modal
//     $('.portfolio-close').on('click', function () {
//       $('.single-portfolio-popup').addClass('hidden');
//     });

//     // Optional: Click outside to close
//     $('.single-portfolio-popup').on('click', function (e) {
//       if (e.target === this) {
//         $(this).addClass('hidden');
//       }
//     });
//   });


 // Initialize Micromodal
// $(document).ready(function () {
//     $('.portfolio-popup').magnificPopup({
//         type: 'inline',
//         midClick: true
//     });
// });

$(document).ready(function () {
    $('.portfolio-popup').magnificPopup({
        type: 'inline',
        midClick: true,
        mainClass: 'mfp-fade',     // 👈 Add this line
        removalDelay: 300          // 👈 Add this line too
    });
});





