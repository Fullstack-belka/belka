
gsap.registerPlugin(ScrollTrigger);
$b( document ).ready(function() {
  //$b('#primary-section .container-section').addClass('active')
});

var widthS = $b( document ).width();

// TRIGER ANIMACION LOGO SECCION 1
let primarySection = gsap.timeline({
  scrollTrigger: {
      trigger: "#primary-section",
      markers: false,
      toggleClass: {targets: $b("#primary-section .container-section") , className:"active"},
      start: "top center",
      end: "bottom center",
      scrub: 0,
     
    },
});

// ANIMACIÓN HEADER
let tlHeader = gsap.timeline();
tlHeader.to("#main-header" , { y: 0,ease : 'none',opacity:1,duration:0.6});


// TRIGGER ANIMACIÓN HEADER

ScrollTrigger.create({
    trigger: "#secondary-section",
    animation: tlHeader,
    markers: false,
    toggleClass: {targets: $b("#main-header"), className:"active"},
    start: "top center",
    end: () => "=" + $b('body').height(),
    toggleActions : "play none none reverse ",
});



/* PLANETA ANIMACION */
gsap.utils.toArray("#secondary-section").forEach(section => {
	let tl = gsap.timeline({
			scrollTrigger: {
				trigger: section,
				start: "25% center",
        // makes the height of the scrolling (while pinning) match the width, thus the speed remains constant (vertical/horizontal)
				end: "bottom center", 
        //end: () => "+=" + section.offsetHeight, 
				scrub: true,
        markes:false,
        toggleClass: "active"
			},
			defaults: {ease: "none"}
		});

    tl.to( ".main-rocket" , { y:-300 } ,"someLabel" )
    tl.to( ".content-earth" , { y:100 } ,"someLabel" )
    tl.to(".main-rocket" , {xPercent:150,  y:300  , scaleX: 5,scaleY: 5});
    tl.to("#secondary-section .content-earth" ,  {xPercent:-100,  y:0  , scaleX: 0.3,scaleY: 0.3} ,">-0.5"  );
    tl.to(".main-rocket" , {xPercent:150,  y:600  , scaleX: 5,scaleY: 5});
    tl.to(".main-rocket" , {xPercent:150,  y:600  , x:-500 , scaleX: 1,scaleY: 1} ,">-0.5"  );
});
/*ANIMACION OCULTAR PLANETA Y NAVE*/
let lead_section = gsap.timeline({
  scrollTrigger: {
    trigger: '#secondary-section',
    start: "80% top",
    end: '150% top',
    toggleClass: {targets: $b(".container-earth ") , className:"minimize"},
    markers: false,
    scrub: 0,
  },
  
});
/* ANIMACION SECCION LEAD*/
let lead_section_show = gsap.timeline({
  scrollTrigger: {
    trigger: '#lead-section',
    start: "-20% center",
    end: '80% center',
    markers: false,
    scrub: 1,
  },
});

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
lead_section_show.to("#lead-section " , {className:"sas"} );
lead_section_show.to("#lead-section " , {className:"active"} );

let fourth_sectionHome_start = "-10% top";
let fourth_sectionHome_end ='100% top';
if(widthS <= 900){
  fourth_sectionHome_start = '0% 40%';
  fourth_sectionHome_end ='100% 40%';
}

/* ANIMACION ESPACIO NEGRO*/

let fourth_sectionHome = gsap.timeline({
  scrollTrigger: {
    trigger: '#fourth-section',
    start: fourth_sectionHome_start,
    end: fourth_sectionHome_end,
    toggleClass: {targets: $b(".stars,.twinkling") , className:"black"},
    markers: false,
    scrub: 1,
  },
  
});


let astronauta_lost_start = "5% top";
let astronauta_lost_end = '65% top';
if(widthS <= 900){
  astronauta_lost_start = '10% center';
 astronauta_lost_end = '80% center';
}

/* ANIMACION PERDIDO*/
let astronauta_lost = gsap.timeline({
  scrollTrigger: {
    trigger: '#fourth-section',
    start: astronauta_lost_start,
    end: astronauta_lost_end,
    toggleClass: {targets: $b("#fourth-section") , className:"active"},
    markers: false,
    scrub: 1,
  },
});



/* ANIMACION SECCION LEAD*/
let newsletter_section = gsap.timeline({
  scrollTrigger: {
    trigger: '#six-section',
    start: "0% center",
    end: '80% center',
    markers: false,
    scrub: 1,
  },
});

newsletter_section.to( '#six-section', {
  onStart: () => {
      $b( '#six-section').addClass('active');
  },
})

