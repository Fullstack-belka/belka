'use strict';
var $b = jQuery.noConflict();

var widthS = $b( document ).width();

let scroll_header = gsap.timeline({
    scrollTrigger: {
      trigger: 'body',
      start: "20% center",
      end: 'bottom center',
      toggleClass: {targets: $b("#main-header") , className:"scroll"},
      markers: false,
      scrub: 1,
    },
    
});





      
// ANIMACIONES SECCIONES
gsap.utils.toArray(".container-section").forEach(section => {
	let tl = gsap.timeline({
			scrollTrigger: {
				trigger: section,
        start: "top 45%",
        end:  "110% 45%" ,
				//toggleActions: "play none reverse none",
        scrub: false,
        markers: false,
        toggleClass: {targets: section , className:"is-inview"}
			},
			defaults: {ease: "none"}
		});
});

// TRIGGER ANIMACIÓN WSP
let tlWhatsapp = gsap.timeline({
  scrollTrigger: {
    trigger:  "main",
    start: "20% center",
    // makes the height of the scrolling (while pinning) match the width, thus the speed remains constant (vertical/horizontal)
    end: "bottom center", 
    scrub: true,
    //pin: true,
    markes:false,
  },
  defaults: {ease: "none"}
  
});

tlWhatsapp.to("#whatsAppFloatingButton" , {className:"+=whatsapp-floating-button active"} ,">-0.5"  );

if(jQuery('#contact-section').length > 0){


  
  /* ANIMACION CONTACT FORM*/
  let contact_animation = gsap.timeline({
    scrollTrigger: {
      trigger: '#contact-section',
      start: "-10% center",
      end: '120% center',
      markers: false,
      scrub: 0,
    },
  });
  contact_animation.to("#contact-section" , {className:"+=active"} );


  if(widthS <= 900){
    /* ANIMACION CONTACT FORM*/
    let contact_form_animation = gsap.timeline({
      scrollTrigger: {
        trigger: '#contact-section .container-form',
        start: "-30% center",
        end: '150% center',
        markers: false,
        scrub: 0,
        toggleClass: "active",
        toggleActions : "play none none reverse ",
      },
    });
  
    /* ANIMACION CONTACT FORM*/
    let contact_rocket_animation = gsap.timeline({
      scrollTrigger: {
        trigger: '#contact-section .container-rocket',
        start: "-30% center",
        end: '150% center',
        markers: false,
        scrub: 0,
        toggleClass: "active",
        toggleActions : "play none none reverse ",
      },
    });
  }
  
}

/*------------------------------------
  SCROLL TOP
--------------------------------------*/
function scrolltop() {
  let IDsectionScroll = '';
  var pxShow =  $b('section').last().position().top,
    goDownButton = $b(".scroll-top.down"),
    sectionScroll = $b("section").first();

    if ($b(window).scrollTop() >= pxShow) {   
      $b('.scroll-top.down').removeClass('scroll-visible');
    }else{
      $b('.scroll-top.down').addClass('scroll-visible');
    }
    
    if($b('section').length > 1){
      $b('section').each(function () {
        if($b(this).position().top <= $b(document).scrollTop() && ($b(this).position().top + $b(this).outerHeight()) > $b(document).scrollTop()) {
          IDsectionScroll = $b(this).attr('id');
        }
      });

        sectionScroll =  $b('#'+IDsectionScroll).next().attr('id') ;
      $b('.scroll-top.down .smoothscroll').attr('href', '#'+sectionScroll);
    }else{
      $b('.scroll-top.down').removeClass('scroll-visible');
    }
        

  $b(window).on('scroll', function () {

    if($b('section').length > 1){
      $b('section').each(function () {
        if($b(this).position().top-1 <= $b(document).scrollTop() && ($b(this).position().top + $b(this).outerHeight()) > $b(document).scrollTop()) {
          sectionScroll = $b(this).attr('id');
        }
      });
      
      
      sectionScroll =  $b('#'+sectionScroll).next().attr('id');
      console.log(sectionScroll)
      
      if ($b(window).scrollTop() >= pxShow) {   
        $b('.scroll-top.down').removeClass('scroll-visible');
      }else{
        $b('.scroll-top.down').addClass('scroll-visible');
      }
      if(sectionScroll =='eighth-section') {

        sectionScroll = 'footer-home';

      }
        
      $b('.scroll-top.down .smoothscroll').attr('href', '#'+sectionScroll);

    }
    
  });

  $b('.smoothscroll').on('click', function (e) {
    e.preventDefault();
    var scrollTo = $b(this).attr('href');
    $b('html,body').animate({
      scrollTop: $b(scrollTo).position().top 
    }, 600 );
    return false;
  });

}


/*------------------------------------
  TOGGLE MENU HEADER
--------------------------------------*/

function toggleMenuHeader() {

  $b('#main-header .container-toggle').click(function(){
    console.log('hola')
    if($b('#main-header').hasClass('open')){
        $b('#main-header').removeClass('open');
        $b('body').removeClass('overflow');
    }else{
      $b('#main-header').addClass('open');
      $b('body').addClass('overflow');
    }


  });


};

$b(document).ready(function() {
  scrolltop();
  toggleMenuHeader();
});

//RESPONSIVE PLANETS
$b(".container-planets").slick({
  dots: false,
  infinite: true,
  speed: 500,
  slidesToShow: 3,
  lazyLoad: 'ondemand',
  autoplay: true,
  slidesToScroll: 3,
  nextArrow: jQuery('#planets-section .next'),
  prevArrow:  jQuery('#planets-section .prev'),
  responsive: [
    {
      breakpoint: 5000,
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
      breakpoint: 700,
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



function ResponsiveTablet(x) {
  if (x.matches) { // If media query matches
    console.log('Media 900')


  }
}

var x = window.matchMedia("(max-width: 900px)")
ResponsiveTablet(x) // Call listener function at run time
x.addListener(ResponsiveTablet) // Attach listener function on state changes


