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
  

  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 100) {
      $('.header_main').addClass('sticky-header');
    } else {
      $('.header_main').removeClass('sticky-header');
    }
  });