
jQuery(function ($) {
    $(window).load(function(){

        $('.site-content').masonry({
          itemSelector: '.grid-item',
          columnWidth: '.grid-item',
          percentPosition: true
        });

  
  });
});