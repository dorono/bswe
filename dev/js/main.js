(function() {
    //var sidebarAdArray = ['ad-300x250-01' , 'ad-300x250-02' , 'ad-300x250-03' , 'ad-300x250-04' , 'ad-300x120-01.php' , 'ad-300x250-05'];

    // count # pairs of ads

    jQuery('#loops-wrapper').find('article').each(function(index) {
        if((index + 1) % 2 === 0) {
            jQuery(this).css('border', '2px solid red');
        }
        console.log(index);
    });

})();
