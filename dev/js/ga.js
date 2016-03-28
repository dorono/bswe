var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-8542965-5']);
_gaq.push(['_gat._forceSSL']);
_gaq.push(['_trackPageview']);


(function($) {
    $('.ad a').on('click', function() {
        var label = $(this).attr('data-slot-name');
        var adName = $(this).attr('class');
        _gaq.push(['_setCustomVar', 1, 'ad name', adName, 1]);
        _gaq.push(['_trackEvent', 'Advertisements', 'Banner Click', label]);
        console.log('ad slot name', label, 'ad name', adName);
    });
})(jQuery);

