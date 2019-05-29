<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/ad-iframe.css">
<title>300x250</title>

<style>
* {
	padding: 0;
	margin: 0;
}
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">//<![CDATA[
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-8542965-5']);
					_gaq.push(['_trackPageview']);
	(function () {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();
	//]]>

</script>

</head>

<body>

<?php

$Img1 = "http://www.bestsaxophonewebsiteever.com/wp-content/uploads/abelet-xn.jpg";
$Alt1 = "Abelet";
$Url1 = "http://www.abelet.com/";
$class1 = "abelet_300x250_position3_banner";

$Img2 ="http://www.bestsaxophonewebsiteever.com/wp-content/uploads/SaxDakota_BannerAd300x250_4.jpg";
$Alt2 = "Dakota";
$Url2 = "http://www.saxdakota.com/";
$class2 = "dakota_position3_banner";

/*$Img2 ="http://www.bestsaxophonewebsiteever.com/wp-content/uploads/bsp_300x250_kindle.jpg";
$Alt2 = "Bulletproof Saxophone Playing";
$Url2 = "http://www.bestsaxophonewebsiteever.com/bulletproof-saxophone-playing/";
$class2 = "bulletproof_saxophone_playing_position3_banner";
*/

$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};

print "<a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\" class=\"".$class."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a>";
?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery("a.abelet_300x250_position3_banner").click(function() {
		_gaq.push(['_trackEvent', 'Advertisements', 'Banner Click', 'Abelet 300x250']);
	});

	jQuery("a.dakota_position3_banner").click(function() {
		_gaq.push(['_trackEvent', 'Advertisements', 'Banner Click', 'Antigua 300x250']);
	});

	/*jQuery("a.bulletproof_saxophone_playing_position3_banner").click(function() {
		_gaq.push(['_trackEvent', 'Advertisements', 'Banner Click', 'Bulletproof Saxophone Playing 300x250']);
	});
	*/
});

</script>

</body>
</html>
