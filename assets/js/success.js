

gsap.registerPlugin(ScrollTrigger);

function commaSeparateNumber(val){
  while (/(\d+)(\d{3})/.test(val.toString())){
    val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
  }
  return val;
}


let primary_section = gsap.timeline({
  scrollTrigger: {
    trigger: '#primary-section',
    start: "-10% center",
    end: '100% center',
    toggleClass: {targets: $b("#primary-section"), className:"active"},
    markers: false,
    scrub: 1,
  },
});
primary_section.to("#primary-section .container-rocket img" , {className:"sas"} );
primary_section.to("#primary-section .container-rocket img" , {className:"active"} );


// ANIMACIONES SECCIONES
gsap.utils.toArray(".cliente").forEach(section => {
	let tl = gsap.timeline({
			scrollTrigger: {
				trigger: section,
        start: "-10% 30%",
        end:  "bottom 30%" ,
				//toggleActions: "play none reverse none",
        scrub: true,
        markers: false,
        toggleClass: {targets: section , className:"is-inview"}
			},
			defaults: {ease: "none"}
		});

    
    tl.to( section.querySelector(".spaceship"), {
      onStart: () => {  
        $b( section ).find(".number_count").each(function( index ) {
          let element = $b(this);
          console.log(element)
          let value =  Number($b(this).attr('data-number'))
          if(!value){ value = 0}
          $b({someValue: 0}).animate({someValue: value}, {
            duration: 2000,
            easing:'swing', // can be anything
            step: function() { // called on every step
                // Update the element's text with rounded-up value:
                $b(element).text(commaSeparateNumber(Math.round(this.someValue)));
            }
          });
        });

         
        
      },
      onReverseComplete: () => {
          //$b(section).removeClass('is-inview');
      },
    })
    
});


function slickClients(){
  //RESPONSIVE BIG CLIENTES
  $b(".container-clients.big").slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    lazyLoad: 'ondemand',
    autoplay: true,
    slidesToScroll: 3,
    nextArrow: jQuery('.content-clients.big .next'),
    prevArrow:  jQuery('.content-clients.big .prev'),
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
        breakpoint: 700,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  //RESPONSIVE MEDIUM CLIENTES
  $b(".container-clients.medium").slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    lazyLoad: 'ondemand',
    autoplay: true,
    slidesToScroll: 3,
    nextArrow: jQuery('.content-clients.medium .next'),
    prevArrow:  jQuery('.content-clients.medium .prev'),
    responsive: [
      {
        breakpoint: 10000,
        settings: "unslick"
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4
        }
      },
      {
        breakpoint: 700,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
}

  //COUNTER REGOL
  $b("#au_regol").counter({
    autoStart: false,           // true/false, default: true
    duration: 1500,             // milliseconds, default: 1500
    countFrom: 0,              // start counting at this number, default: 0
    countTo: 3843,                // count to this number, default: 0
    runOnce: false,              // only run the counter once, default: false
    placeholder: "",           // replace the number with this before counting,
    onStart: function() {},     // callback on start of the counting
    onComplete: function() {}  // callback on completion of the counting
  });


//$("#counter").counter('start');



$b(document).ready(function() {
  slickClients();
});
