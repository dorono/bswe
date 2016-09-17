(function($) {
    var BSWE = BSWE || {};
    console.log('13333 effff');
    BSWE.applySkipClass = function (list) {
        $.each(list, function(index , item) {
            var currentSelector = item;

            console.log('item: ' + item);

            $(currentSelector).each(function() {
               $(this).addClass('skip');
            });
        });
    };

    BSWE.distributeAds = function(settings) {
        var adArray = [];

        console.log(settings.adDivider + ' ' + settings.frequency + ' ' + settings.contentContainer);

        // randomize the array
        function shuffle(array) {
            var m = array.length, t, i;

            // While there remain elements to shuffle...
            while (m) {
                // Pick a remaining element…
                i = Math.floor(Math.random() * m--);

                // And swap it with the current element.
                t = array[m];
                array[m] = array[i];
                array[i] = t;
            }

            return array;
        }

        $('.sidebar-ads').each(function () {
            console.log('this is the parent id: ' + $(this).parents('.ad-container').attr('id'));

            // put all ads into an array
            adArray.push({
                adSlot: $(this).data('ad-slot'),
                adContainer: $(this).parents('.ad-container').attr('id')
            });
        });

        var shuffledAdArray = shuffle(adArray),
            adIdentifier,
            currentAd,
            adNum = 0,
            contentContainer = settings.contentContainer, // '#loops-wrapper',
            adParent,
            sourceAd;


        console.log('skip? : ' + settings.adDivider);

        $(contentContainer).find(settings.adDivider).each(function (index) {
            console.log('content container: ' + contentContainer);

            if ((index + 1) % settings.frequency === 0 && $('.widgetwrap .sidebar-ads').length > adNum) {
                adIdentifier = shuffledAdArray[adNum].adSlot;
                adParent = shuffledAdArray[adNum].adContainer;

                console.log('number of ad slots: ' + $('.widgetwrap .sidebar-ads').length);

                currentAd = '.sidebar-ads[data-ad-slot=' + adIdentifier + ']';
                sourceAd = $('#' + adParent).find(currentAd);
                sourceAd.clone().insertAfter(contentContainer + ' '+ settings.adDivider + ':eq(' + index + ')').prepend('<div class=\'sponsored\'>Sponsored</div>');
                sourceAd.parents('.widgetwrap').addClass('hide-mobile');

                adNum++;
            }
        });
    };


    // list of elements that should not be counted
    // as part of the distribution of ads in content
    BSWE.skipList = ['.writer_promo p'];

    // Feed the skip list to a function that adds the skip class to
    // the elements to be skipped.
    BSWE.applySkipClass(BSWE.skipList);

    if($('body').hasClass('grid2')) {
        BSWE.distributeAds({
            contentContainer: '#loops-wrapper',
            adDivider: 'article',
            frequency: 2
        });
    } else if($('body').hasClass('single-format-standard')) {
        BSWE.distributeAds({
            contentContainer: 'article',
            adDivider: 'p:not(.skip)',
            frequency: 4
        });
    }

    // slide toggle topics widget, keeping this functionality
    // out of commission for the time-being
    /*
    BSWE.topicsWidget = $('.widget_taxonomy_list_widget');
    BSWE.topicsWidgetHdr = BSWE.topicsWidget.find('h4');
    BSWE.topicsWidget.prepend('<span class=\'open\'></span>');

    BSWE.topicsWidget.on('click', 'h4, span', function() {
        BSWE.topicsWidget.find('ul').slideToggle();
        BSWE.topicsWidget.find('span').toggleClass('closed');

        if(BSWE.topicsWidgetHdr.text() === 'Hide Topics') {
            BSWE.topicsWidgetHdr.text('View Topics');
        } else {
            BSWE.topicsWidgetHdr.text('Hide Topics');
        }
    });
    */

})(jQuery);

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

