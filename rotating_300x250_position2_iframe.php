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

$Img1 = "http://www.bestsaxophonewebsiteever.com/wp-content/uploads/BSWE-Side-Ad-4.jpg";
$Alt1 = "Theo Wanne";
$Url1 = "http://www.theowanne.com/";
$class1 = "theo_wanne_300x250_position2_banner";

$Img2 ="http://www.bestsaxophonewebsiteever.com/wp-content/uploads/just_joes.jpg";
$Alt2 = "Just Joe's Sax Gel Strap";
$Url2 = "http://justjoessaxgelstrap.com";
$class2 = "just_joes_position2";


$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};

print "<a href=\"".$URL."\" target=\"_blank\" class=\"".$class."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a>"; 
?>

<script type="text/javascript">
jQuery(document).ready(function() {
	
	jQuery("a.theo_wanne_300x250_position2_banner").click(function() {
		_gaq.push(['_trackEvent', 'Advertisements', 'Banner Click', 'Theo Wanne Banner Position 2']);
	});
	
	jQuery("a.just_joes_position2").click(function() {
		_gaq.push(['_trackEvent', 'Advertisements', 'Banner Click', 'Just Joes 300x250 bottom']);
	});	
});	
 	
</script>

</body>
</html>
