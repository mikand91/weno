(function ($) {
    "use strict";

    $(document).ready(function () {

        $('#tags-section .tags .item').click(function () {
            const catalog = $(this).data('catalog-type');
            $.get("/weno/catalogs_api.php?type=" + catalog, function (data) {
                $("#tags-section .catalogs").fadeOut('fast');
                window.setTimeout(function () {
                    $("#tags-section .catalogs").html(data);
                    $("#tags-section .catalogs").fadeIn('fast');
                }, 200)

            });
        })

    });

})(jQuery);