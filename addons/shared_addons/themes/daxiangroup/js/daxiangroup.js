if (!window.DG) {
    var DG = {};
}

DG.common = (function($, undefined) {

    "use strict";

    var documentReady = function() {
        if ($('#navigation-main').length) {
            $('#navigation-main').find('.link').each(function() {
                $(this).click(function() { document.location.href = $(this).data('link'); });
            });
        }
    };

    $(documentReady);

} (jQuery));
