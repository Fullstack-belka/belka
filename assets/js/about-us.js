

gsap.registerPlugin(ScrollTrigger);

let first_section_show = gsap.timeline({
  scrollTrigger: {
    trigger: '#primary-section',
    start: "60% center",
    end: '100% center',
    markers: true,
    toggleClass: 'active',
    scrub: 1,
  },
});


let lead_section_show = gsap.timeline({
    scrollTrigger: {
      trigger: '#lead-section',
      start: "-20% center",
      end: '100% center',
      markers: false,
      toggleClass: 'active',
      scrub: 1,
    },
  });



  function slickTeam(){
    //RESPONSIVE TEAM
    $b(".container-team").slick({
      dots: false,
      infinite: true,
      speed: 500,
      slidesToShow: 3,
      lazyLoad: 'ondemand',
      autoplay: true,
      slidesToScroll: 3,
      nextArrow: jQuery('.content-team .next'),
      prevArrow:  jQuery('.content-team .prev'),
      responsive: [
        {
          breakpoint: 10000,
          settings: "unslick"
        },
        {
          breakpoint: 900,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 725,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  
  }
  
  
  
  $b(document).ready(function() {
    slickTeam();
  });
  
