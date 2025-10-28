jQuery(document).ready(function(){
    $('.service-carusel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: `<button type="button" class="slick-prev">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
        </button>`,
        nextArrow: `<button type="button" class="slick-next">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </button>`,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    // User Carousel
    $('.user-carousel').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:false,
        dots: true,
    });

    // Blog Carousel 
     $('.blog-carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows:false,
         dots: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
});




document.addEventListener('DOMContentLoaded', () => {
  const toggleBtn = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  const openIcon = document.getElementById('menu-open-icon');
  const closeIcon = document.getElementById('menu-close-icon');

  if (toggleBtn && mobileMenu && openIcon && closeIcon) {
    toggleBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
      openIcon.classList.toggle('hidden');
      closeIcon.classList.toggle('hidden');
    });
  } else {
    console.error('Menu toggle elements not found in the DOM');
  }
});

jQuery(document).ready(function(){
    $('.service-tab-area li').click(function(){
        $('.service-tab-area li').removeClass('active');
        $(this).addClass('active');
        $(".tab-content").hide();

        let tab = $(this).data("tab");

        $(`#${tab}`).show();
    })
});

$(function() {
  $("#accordion").accordion({
    heightStyle: "content",
    collapsible: true,
    active: false,
    icons: false
  });
});








// jQuery(document).ready(function($){
//     let selectedRating = 0;

//     $("#rating-stars i").hover(
//       function() {
//         // Hover effect - star highlight
//         let value = $(this).data("value");
//         $("#rating-stars i").each(function(){
//           if($(this).data("value") <= value){
//             $(this).removeClass("fa-regular").addClass("fa-solid text-yellow-400");
//           } else {
//             $(this).removeClass("fa-solid text-yellow-400").addClass("fa-regular");
//           }
//         });
//       },
//       function() {
//         // Mouse out - revert to selectedRating
//         $("#rating-stars i").each(function(){
//           if($(this).data("value") <= selectedRating){
//             $(this).removeClass("fa-regular").addClass("fa-solid text-yellow-400");
//           } else {
//             $(this).removeClass("fa-solid text-yellow-400").addClass("fa-regular");
//           }
//         });
//       }
//     );

//     // Click to select rating
//     $("#rating-stars i").click(function(){
//       selectedRating = $(this).data("value");
//       $("#rating-value").val(selectedRating);

//       // Update stars visually
//       $("#rating-stars i").each(function(){
//         if($(this).data("value") <= selectedRating){
//           $(this).removeClass("fa-regular").addClass("fa-solid text-yellow-400");
//         } else {
//           $(this).removeClass("fa-solid text-yellow-400").addClass("fa-regular");
//         }
//       });
//     });
//   });


jQuery(document).ready(function($){

  // Hover effect
  $('#rating-stars i').on('mouseenter', function(){
    var value = $(this).data('value');

    // remove previous highlight
    $('#rating-stars i').removeClass('fa-solid text-yellow-500').addClass('fa-regular');

    // highlight stars up to hovered one
    $(this).prevAll().addBack().removeClass('fa-regular').addClass('fa-solid text-yellow-500');
  });

  // remove hover highlight when mouse leaves area
  $('#rating-stars').on('mouseleave', function(){
    var selectedValue = $('#rating').val();
    $('#rating-stars i').removeClass('fa-solid text-yellow-500').addClass('fa-regular');

    if(selectedValue > 0){
      $('#rating-stars i').each(function(){
        if($(this).data('value') <= selectedValue){
          $(this).removeClass('fa-regular').addClass('fa-solid text-yellow-500');
        }
      });
    }
  });

  // Click to select rating
  $('#rating-stars i').on('click', function(){
    var value = $(this).data('value');
    $('#rating').val(value);

    $('#rating-stars i').removeClass('fa-solid text-yellow-500').addClass('fa-regular');
    $(this).prevAll().addBack().removeClass('fa-regular').addClass('fa-solid text-yellow-500');
  });

});



