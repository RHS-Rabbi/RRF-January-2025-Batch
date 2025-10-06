
$(document).ready(function () {
  $("#menu-toggle").click(function () {
    $("#menu").slideToggle(200); // smooth open/close
    $("#icon-open, #icon-close").toggleClass("hidden"); // icon change
  });

  // resize এ handle করবো
  $(window).resize(function () {
    if ($(window).width() >= 1024) { 
      // lg screen হলে সবসময় menu দেখাবে
      $("#menu").show();
      $("#icon-open").removeClass("hidden");
      $("#icon-close").addClass("hidden");
    } else {
      // ছোট screen হলে menu default hidden থাকবে
      $("#menu").hide();
      $("#icon-open").removeClass("hidden");
      $("#icon-close").addClass("hidden");
    }
  }).trigger("resize"); // page load এর সময়ও run হবে
});







$(document).ready(function(){
  $('.carousel-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 600,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: false,
    autoplaySpeed: 3500,
    adaptiveHeight: true,
    lazyLoad: 'ondemand',
    prevArrow: `
      <button type="button" class="slick-prev" aria-label="Previous">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="23" viewBox="0 0 14 23" fill="none">
          <path d="M12 1.5L3 11.5L12 21.5" stroke="white" stroke-width="3"/>
        </svg>
      </button>
    `,
    nextArrow: `
      <button type="button" class="slick-next" aria-label="Next">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="23" viewBox="0 0 14 23" fill="none">
          <path d="M2 21.5L11 11.5L2 1.5" stroke="white" stroke-width="3"/>
        </svg>
      </button>
    `,
    responsive: [
      {
        breakpoint: 1200, // below 1200px
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      },
      {
        breakpoint: 992, // below 992px
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 768, // below 768px
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
});


$(document).ready(function(){
  $(".accordion-header").click(function(){
    let content = $(this).next(".accordion-content");
    let icon = $(this).find(".icon");

    if(content.is(":visible")) {
      // If current content is open, close it
      content.slideUp();
      icon.removeClass("ui-icon-minus").addClass("ui-icon-plus");
    } else {
      // Close all other contents
      $(".accordion-content").slideUp();
      $(".accordion-header .icon").removeClass("ui-icon-minus").addClass("ui-icon-plus");

      // Open current content
      content.slideDown();
      icon.removeClass("ui-icon-plus").addClass("ui-icon-minus");
    }
  });
});






const input = document.getElementById('dateInput');

input.addEventListener('input', (e) => {
  let value = e.target.value.replace(/\D/g, ''); // শুধু সংখ্যা রাখবে
  if (value.length > 2) value = value.slice(0,2) + '/' + value.slice(2);
  if (value.length > 5) value = value.slice(0,5) + '/' + value.slice(5,9);
  e.target.value = value;
});


