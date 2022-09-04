

gsap.registerPlugin(ScrollTrigger);

let primary_section = gsap.timeline({
  scrollTrigger: {
    trigger: '#primary-section',
    start: "0% center",
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
        start: "top 30%",
        end:  "85% 30%" ,
				//toggleActions: "play none reverse none",
        scrub: true,
        markers: false,
        //toggleClass: {targets: section , className:"is-inview"}
			},
			defaults: {ease: "none"}
		});


    tl.to( section.querySelector(".spaceship"), {
      onStart: () => {
          $b(section).addClass('is-inview');
          //$b("#au_regol").counter('start');
        
      },
      onReverseComplete: () => {
          //$b(section).removeClass('is-inview');
      },
    })
});


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