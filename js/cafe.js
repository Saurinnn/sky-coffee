jQuery(function() {
  console.log("Document ready");
  jQuery(window).scroll(function() {
    console.log("Window scrolled");
    let fadeIn = jQuery('.face-pic, .fadein');
    
    jQuery(fadeIn).each(function() {
      let offset = jQuery(this).offset().top;
      let scroll = jQuery(window).scrollTop();
      let windowHeight = jQuery(window).height();
      
      if (scroll > offset - windowHeight + 50) {
        jQuery(this).addClass('is-scrollIn');
        console.log("Element is in view:", this);
      }
    });
  });
});