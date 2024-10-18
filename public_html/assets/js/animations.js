jQuery(document).ready(function ($) {

  window.sr = ScrollReveal({ reset: true, distance: '60px' });

  sr.reveal('.text-about-us', { duration: 1000, origin: 'right' });
  sr.reveal('.sub_title', { duration: 1500, reset: false });
  sr.reveal('.historia', { duration: 1500, reset: false });
  sr.reveal('.conquistas', { duration: 1500, reset: false });
  sr.reveal('.fancybox-layout1', { duration: 900, reset: false });
  sr.reveal('.cd-horizontal-timeline', { duration: 1000, reset: false})
  sr.reveal('.slide__title', { duration: 1000, reset: false })

  sr.reveal('.timeline-carousel', {duration: 1000, origin: 'right'} );
  sr.reveal('.bg-anim', {duration:1000, origin:'top', reset: false})
  sr.reveal('.display-anim', {duration:3000, origin:'left'})
  sr.reveal('.empresas', {duration:1000, origin:'left', reset: false})
  sr.reveal('.big-agro', {duration:1500, origin:'bottom', reset: false})
  sr.reveal('.conheca', {duration:4500, origin:'right', reset: false})

  sr.reveal('.cicllo', {duration:1000, origin:'bottom', reset: false})
  sr.reveal('.crt', {duration:1500, origin:'bottom', reset: false})
  sr.reveal('.ctec', {duration:2000, origin:'bottom', reset: false})
  sr.reveal('.goplan', {duration:2500, origin:'bottom', reset: false})

  sr.reveal('.sub_title.last-news', { duration: 1500, origin:'top' });
  sr.reveal('.heading__title.comunic', { duration: 800, origin:'bottom' });

});