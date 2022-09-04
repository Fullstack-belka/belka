

gsap.registerPlugin(ScrollTrigger);


let lead_section_show = gsap.timeline({
    scrollTrigger: {
      trigger: '#lead-section',
      start: "-20% center",
      end: '90% center',
      markers: false,
      scrub: 1,
    },
  });
  lead_section_show.to("#lead-section " , {className:"sas"} );
  lead_section_show.to("#lead-section " , {className:"active"} );



