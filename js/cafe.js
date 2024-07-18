jQuery(function() {
  jQuery(window).scroll(function() {
    let fadeIn = jQuery('.face-pic, .fadein, .menu');
    
    jQuery(fadeIn).each(function() {
      let offset = jQuery(this).offset().top;
      let scroll = jQuery(window).scrollTop();
      let windowHeight = jQuery(window).height();
      
      if (scroll > offset - windowHeight + 50) {
        jQuery(this).addClass('is-scrollIn');
      }
    });
  });
});