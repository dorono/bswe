ga('create', 'UA-8542965-5', 'auto', 'adClickTracker');

(function($) {

  $('.ad a').on('click', function() {
      var label = $(this).attr('data-slot-name');
      var adName = $(this).attr('data-ad-name');

      ga('adClickTracker.send', 'event', 'Advertisements', 'Banner Click', label, adName);
    });
})(jQuery);
