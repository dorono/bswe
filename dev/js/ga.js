(function($) {

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-8542965-5']);
    _gaq.push(['_gat._forceSSL']);
    _gaq.push(['_trackPageview']);

    $('.ad a').on('click', function() {
        var label = $(this).attr('data-slot-name');
        _gaq.push(['_trackEvent', 'Advertisements', 'Banner Click', label]);
        console.log('this is the label: ' + label);
    });

})(jQuery);
