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

$Img1 = "http:s//www.bestsaxophonewebsiteever.com/wp-content/uploads/select_jazz_mouthpiece_300x250.png";
$Alt1 = "D'Addario Select Jazz";
$Url1 = "http://www.woodwinds.daddario.com/woodwindsMedia.Page?ActiveID=2953&MediaId=10234&utm_source=BestSaxWebsiteEver&utm_medium=300x250Banner&utm_campaign=SelectJazz";
$class1 = "daddario_300x250_banner";

$Img2 ="http:s//www.bestsaxophonewebsiteever.com/wp-content/uploads/trevor-james-saxophones.jpg";
$Alt2 = "Trevor James Signature Custom Raw Saxophone";
$Url2 = "http://massullomusic.com/trevor-james-signature-custom-raw-saxophones/";
$class2 = "massullo";


$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};

print "<a href=\"".$URL."\" target=\"_blank\" class=\"".$class."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a>";
?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery("a.daddario_300x250_banner").click(function() {
		_gaq.push(['_trackEvent', 'Advertisements', 'Banner Click', 'Viking Position 3']);
	});

	jQuery("a.massullo").click(function() {
		_gaq.push(['_trackEvent', 'Advertisements', 'Banner Click', 'Massullo Music 300x250 Ad']);
	});
});

</script>

</body>
</html>
