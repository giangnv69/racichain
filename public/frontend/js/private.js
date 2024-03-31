
$(document).ready(function(){
   $(window).bind('scroll', function() {
   var navHeight = $( window ).height() - 50;
         if ($(window).scrollTop() > 1) {
             $('.header-menu, main, .menu-mobile').addClass('fix-menu');
         }
         else { 
             $('.header-menu, main, .menu-mobile').removeClass('fix-menu');
         }
    });
}); 


$('.slide-banner').slick({
    autoplay: true, 
    autoplaySpeed: 5000,
    arrow: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '',
    nextArrow: '',
});

$('.slide-feedback').slick({
    autoplay: false,
    arrow: false,
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 2,
    prevArrow: '',
    nextArrow: '',
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
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

$('.slide-part').slick({
    autoplay: false,
    arrow: false,
    dots: false,
    slidesToShow: 7,
    slidesToScroll: 3,
    prevArrow: '',
    nextArrow: '',
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        }
    ]
});

$('.slide-other').slick({
    autoplay: false,
    arrow: false,
    dots: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    prevArrow: '',
    nextArrow: '',
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});

$('.slide-feat').slick({
    autoplay: true,
    arrow: false,
    dots: false,
    slidesToShow: 1,
    prevArrow: '',
    nextArrow: '',
});

$('.new-small').slick({
    cssEase: 'linear',
    autoplay: true,
    arrow: false,
    dots: false,
    slidesToShow: 3.5,
    // slidesToScroll: 1,
    vertical: true,
    autoplaySpeed:0,
    speed: 12000,
    infinite: true,
    prevArrow: '',
    nextArrow: '',
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});

$('.slider-for').slick({
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav',
});
$('.slider-nav').slick({
    autoplay:false,
    arrow:false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        }
    ],
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    prevArrow: '',
    nextArrow: '',
});

$( ".btn-list-cate a" ).click(function() {
    $('.list-cate-prd').toggleClass('active');
});

setTimeout(function(){
    $('.btn-list-cate a').click(); 
}, 15000);

var numberSpinner = (function() {
  $('.number-spinner>.ns-btn>a').click(function() {
    var btn = $(this),
      oldValue = btn.closest('.number-spinner').find('input').val().trim(),
      newVal = 0;

    if (btn.attr('data-dir') === 'up') {
      newVal = parseInt(oldValue) + 1;
    } else {
      if (oldValue > 0) {
        newVal = parseInt(oldValue) - 1;
      } else {
        newVal = 1;
      }
    }
    btn.closest('.number-spinner').find('input').val(newVal);
      btn.closest('.number-spinner').find('.changeQuantity').trigger("change");
  });
  $('.number-spinner>input').keypress(function(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
    }
    return true;
  });
})();
 
jQuery(document).ready(function( $ ) {
  $("#menu").mmenu({
     "extensions": [
        "fx-menu-zoom"
     ],
     "counters": true
  });
});

// jQuery(function($) {
//   var doAnimations = function() {
//     var offset = $(window).scrollTop() + $(window).height(),
//         $animatables = $('.video-iframe');
//     if ($animatables.length == 0) {
//       $(window).off('scroll', doAnimations);
//     }
//     $animatables.each(function(i) {
//        var $animatable = $(this);
//       if (($animatable.offset().top + $animatable.height()) < offset) {
//             $animatable.addClass('animated');
//       }
//     });
//   }; 
//   $(window).on('scroll', doAnimations);
//   $(window).trigger('scroll');
// });   