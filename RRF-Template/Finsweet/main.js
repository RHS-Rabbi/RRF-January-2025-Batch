const menuToggle = document.getElementById("menu-toggle");
  const menuToggleClose = document.getElementById("menu-toggle-close");
  const mobileMenu = document.getElementById("mobile-menu");

  // ☰ click → show menu + show close button
  menuToggle.addEventListener("click", () => {
    mobileMenu.classList.remove("hidden");
    menuToggle.classList.add("hidden");
    menuToggleClose.classList.remove("hidden");
  });

  // ✖ click → hide menu + show hamburger
  menuToggleClose.addEventListener("click", () => {
    mobileMenu.classList.add("hidden");
    menuToggleClose.classList.add("hidden");
    menuToggle.classList.remove("hidden");
  });


jQuery(document).ready(function(){
  $('.testimonial-carousel').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow:`<button class="slick-prev" ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" /></svg></button>`,
    nextArrow:`<button class="slick-next" ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" /></svg></button>`,
    autoplay: true,
    autoplaySpeed: 3000,
  });
});
