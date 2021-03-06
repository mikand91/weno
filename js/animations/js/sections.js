(function($) {
  "use strict";


  $(document).ready(function() {

    /**
     * sections fade in
     */
    const showSections = function(){
      var scrollTop = $(window).scrollTop();

      $('section').each(function(){
        if(!$(this).hasClass('active')){
          let elementOffset = $(this).offset().top;
          let distance = (elementOffset - scrollTop);
          if(distance < ($( window ).height() - 250)){
            $(this).addClass('active');
          }
        }

      });
    };

    /**
     * sections fade in
     */
    $(window).scroll(function() {
      showSections();
    });

    showSections();
  });

})(jQuery);