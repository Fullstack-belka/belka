
gsap.registerPlugin(ScrollTrigger);
/* ANIMACION SERVICIOS*/
let planets_activate = gsap.timeline({
    scrollTrigger: {
      trigger: '#planets-section',
      start: "-20% center",
      end: 'bottom center',
      toggleClass: {targets: $b("#planets-section") , className:"active"},
      markers: false,
      scrub: 1,
    },
  });

function slickServices(){

//RESPONSIVE
$b(".container-services").slick({
  dots: false,
  infinite: true,
  speed: 500,
  slidesToShow: 3,
  centerMode: true,
  autoplay: true,
  slidesToScroll: 3,
  nextArrow: jQuery(this).parent().find('.next'),
  prevArrow:  jQuery(this).parent().find('.prev'),
  responsive: [
    {
      breakpoint: 10000,
      settings: "unslick"
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 3,
        slidesToScroll:3
      }
    },
    {
      breakpoint: 725,
      settings: {
        slidesToShow: 2,
        slidesToScroll:2
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

}

$b(document).ready(function() {
  slickServices();
});
