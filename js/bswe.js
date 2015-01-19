(function($) {

    var indivAdObj = {},
        adArray = [];

    // randomize the array
    function shuffle(array) {
        var m = array.length, t, i;

        // While there remain elements to shuffle…
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

    $('.sidebar-ads').each(function() {
        console.log('this is the parent id: ' + $(this).parents('.ad-container').attr('id'));

        // get all ads
        adArray.push({
            adSlot: $(this).data('ad-slot'),
            adContainer: $(this).parents('.ad-container').attr('id')
        });

        // put the data-ad-slot value and the container into an array as an object literal



        // space the ads into the content, hiding the sidebar versions, letting the rest fall to the bottom


    });

    var shuffledAdArray = shuffle(adArray);

    console.log(shuffledAdArray);



    var currentAd,
        adNum = 0,
        articleContainer = '#loops-wrapper',
        // sidebarContainer = '#sidebar',
        adParent;

    // count # pairs of ads

    $(articleContainer).find('article').each(function(index) {

        console.log('index: ' + index);

        if((index + 1) % 2 === 0) {
            currentAd = shuffledAdArray[adNum].adSlot;
            adParent = shuffledAdArray[adNum].adContainer;
            console.log('current ad: ' + currentAd + ' | ad parent:' + adParent);

            $('#' + adParent).find('.sidebar-ads[data-ad-slot=' + currentAd + ']').clone().insertAfter(articleContainer + ' article:eq(' + index + ')');
            adNum++;
        }
    });

})(jQuery);
