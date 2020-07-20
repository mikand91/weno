(function($) {
  "use strict";


  $(document).ready(function() {

    $('.submenu-with-images li').hover(function(){
        // if($(this).hasAttribute('data-link-image')){
          $(this).closest('.submenu-with-images').find('.links-images-container').css("background-image", "url("+$(this).data('link-image')+")");
        // }
    });

  });

})(jQuery);