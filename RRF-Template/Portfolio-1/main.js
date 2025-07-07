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


    // Service Mobile size active
    $(document).ready(function () {
        $('.single-service-list').on('click', function (e) {
            e.stopPropagation();
            
            if ($(this).hasClass('is-active')) {
                $(this).removeClass('is-active');
            } else {
                $('.single-service-list').removeClass('is-active');
                $(this).addClass('is-active');
            }
        });
        $(document).on('click', function () {
            $('.single-service-list').removeClass('is-active');
        });
    });




    // portfolio Isotop
    
    $(document).ready(function () {
        $('.project-list').isotope({
            itemSelector: '.item-1',
            layoutMode: 'fitRows'
        });

        $('.portfolio-filter ul li').click(function () {
            //ACTIVE CLASS
            $('.portfolio-filter ul li').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $('.project-lists').isotope({
                filter: selector
            });
            return false;
        });
    });











    // preloader
    // window.addEventListener('load', function () {
    //     const preloader = document.getElementById('preloader');

    //     // Wait a bit before starting fade out
    //     setTimeout(() => {
    //     preloader.style.opacity = '0';
        
    //     // Wait for fade transition (600ms), then remove
    //     setTimeout(() => {
    //         preloader.style.display = 'none';
    //     }, 600);
    //     }, 500); // Initial delay before fade (for better UX)
    // });



    // const scrollBtn = document.getElementById("scrollTopBtn");

    // window.addEventListener("scroll", () => {
    //     if (window.scrollY > 300) {
    //     scrollBtn.classList.remove("opacity-0", "pointer-events-none");
    //     scrollBtn.classList.add("opacity-100");
    //     } else {
    //     scrollBtn.classList.add("opacity-0", "pointer-events-none");
    //     scrollBtn.classList.remove("opacity-100");
    //     }
    // });

    // scrollBtn.addEventListener("click", () => {
    //     window.scrollTo({ top: 0, behavior: "smooth" });
    // });

    const scrollBtn = document.getElementById("scrollTopBtn");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
        scrollBtn.classList.remove("opacity-0", "pointer-events-none");
        scrollBtn.classList.add("opacity-100");
        } else {
        scrollBtn.classList.add("opacity-0", "pointer-events-none");
        scrollBtn.classList.remove("opacity-100");
        }
    });

    scrollBtn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
        scrollBtn.blur();
    });

    // Remove focus from buttons after click to prevent mobile green outline
    // document.querySelectorAll('.btn').forEach(btn => {
    //     btn.addEventListener('click', () => {
    //     btn.blur();
    //     });
    // });
    document.querySelectorAll('.btn').forEach(btn => {
    btn.addEventListener('click', () => {
        setTimeout(() => {
        btn.blur();
        }, 200); // 200 milliseconds delay, চাইলে বাড়াতে পারেন
    });
    });










    //Cursor
    const $cursor = $('.cursor');
    const $outline = $('.outline');
    const $interactiveElements = $('a, button');

    let mouseX = 0, mouseY = 0;
    let outlineX = 0, outlineY = 0;
    let isHoveringInteractive = false;

    $(document).on('mousemove', function(e) {
    mouseX = e.clientX;
    mouseY = e.clientY;

    $cursor.css({ left: mouseX, top: mouseY });

    if (!isHoveringInteractive) {
        $cursor.css('opacity', 0.5);
        $outline.css('opacity', 0.9);
    }
    });

    function animate() {
    outlineX += (mouseX - outlineX) * 0.15;
    outlineY += (mouseY - outlineY) * 0.15;

    $outline.css({ left: outlineX, top: outlineY });

    requestAnimationFrame(animate);
    }
    animate();

    $interactiveElements.on('mouseenter', function() {
    isHoveringInteractive = true;
    $cursor.css('opacity', 0);
    $outline.css('opacity', 0);
    $(this).css('cursor', 'pointer');
    });

    $interactiveElements.on('mouseleave', function() {
    isHoveringInteractive = false;
    $cursor.css('opacity', 0.5);
    $outline.css('opacity', 0.9);
    $(this).css('cursor', 'auto');
    });

    $(document).on('mouseleave', function() {
    $cursor.css('opacity', 0);
    $outline.css('opacity', 0);
    });

    $(document).on('mouseenter', function() {
    if (!isHoveringInteractive) {
        $cursor.css('opacity', 0.5);
        $outline.css('opacity', 0.9);
    }
    });






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
//    once: true,
 }
 );



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



// Portfolio
$(document).ready(function () {
    $('.portfolio-popup').magnificPopup({
        type: 'inline',
        midClick: true,
        mainClass: 'mfp-fade',     
        removalDelay: 300  
    });
});


$(document).ready(function () {
    // Show Terms popup
    $('#cta-terms').on('click', function () {
        $('.terms-contents').fadeIn();
        $('.dis-contents').fadeOut(); // Hide the other one
    });

    // Show Disclaimer popup
    $('#cta-dis').on('click', function () {
        $('.dis-contents').fadeIn();
        $('.terms-contents').fadeOut(); // Hide the other one
    });

    // Close buttons
    $('#cta-close-terms').on('click', function () {
        $('.terms-contents').fadeOut();
    });

    $('#cta-close-dis').on('click', function () {
        $('.dis-contents').fadeOut();
    });

    // Close when clicking outside
    $(document).on('click', function (e) {
        if (!$(e.target).closest('.temrs-details, #cta-terms, #cta-dis').length) {
            $('.terms-contents').fadeOut();
            $('.dis-contents').fadeOut();
        }
    });
});











