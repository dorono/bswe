var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-8542965-5']);
_gaq.push(['_gat._forceSSL']);
_gaq.push(['_trackPageview']);

(function($) {


    $('.ad a').on('click', function() {
        var label = $(this).attr('data-slot-name');
        _gaq.push(['_trackEvent', 'Advertisements', 'Banner Click', label]);
    });



    /*$('.ad a').on('click', function() {
        var label = $(this).attr('data-slot-name');
        ga('send', 'event', 'Advertisements', 'Banner Click', label)
    });*/

    /*$('.ad a').on('click', function() {
        var label = $(this).attr('data-slot-name');
        console.log(label);
        ga('send', 'event', 'Advertisements', 'Banner Click', label)
    });*/

})(jQuery);

