ga('create', 'UA-8542965-5', 'auto', 'adClickTracker');


(function($) {

  $('.ad a').on('click', function() {
      var label = $(this).attr('data-slot-name');
      var adName = $(this).attr('class');


      ga('adClickTracker.send', 'event', {
        eventCategory: 'Advertisements',
        eventAction: 'Banner Click',
        eventLabel: label,
        eventValue: adName,
        transport: 'beacon'
      });


    });
    ga(function() {
      // Logs an array of all tracker objects.
      console.log('here are all', ga.getAll());
    });
})(jQuery);
