!function($){var BSWE=BSWE||{};BSWE.applySkipClass=function(list){$.each(list,function(index,item){var currentSelector=item;$(currentSelector).each(function(){$(this).addClass("skip")})})},BSWE.distributeAds=function(settings){function shuffle(array){for(var t,i,m=array.length;m;)i=Math.floor(Math.random()*m--),t=array[m],array[m]=array[i],array[i]=t;return array}var adArray=[];$(".sidebar-ads").each(function(){adArray.push({adSlot:$(this).data("ad-slot"),adContainer:$(this).parents(".ad-container").attr("id")})});var adIdentifier,currentAd,adParent,sourceAd,shuffledAdArray=shuffle(adArray),adNum=0,contentContainer=settings.contentContainer;$(contentContainer).find(settings.adDivider).each(function(index){(index+1)%settings.frequency===0&&$(".widgetwrap .sidebar-ads").length>adNum&&(adIdentifier=shuffledAdArray[adNum].adSlot,adParent=shuffledAdArray[adNum].adContainer,currentAd=".sidebar-ads[data-ad-slot="+adIdentifier+"]",sourceAd=$("#"+adParent).find(currentAd),sourceAd.clone().insertAfter(contentContainer+" "+settings.adDivider+":eq("+index+")").prepend("<div class='sponsored'>Sponsored</div>"),sourceAd.parents(".widgetwrap").addClass("hide-mobile"),adNum++)})},BSWE.skipList=[".writer_promo p"],BSWE.applySkipClass(BSWE.skipList),$("body").hasClass("grid2")?BSWE.distributeAds({contentContainer:"#loops-wrapper",adDivider:"article",frequency:2}):$("body").hasClass("single-format-standard")&&BSWE.distributeAds({contentContainer:"article",adDivider:"p:not(.skip)",frequency:4})}(jQuery),ga("create","UA-8542965-5","auto","adClickTracker"),function($){$(".ad a").on("click",function(){var label=$(this).attr("data-slot-name"),adName=$(this).attr("class");ga("adClickTracker.send","event",{eventCategory:"Advertisements",eventAction:"Banner Click",eventLabel:label,eventValue:adName,transport:"beacon"})}),ga(function(){console.log("here are all",ga.getAll())})}(jQuery);