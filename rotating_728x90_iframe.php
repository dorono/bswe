<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/ad-iframe.css">
<title>728x90</title>

<style>
* {
	padding: 0;
	margin: 0;
}
</style>

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>-->
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

/*jQuery(document).ready(function() {

	jQuery("a.rs_berkeley_728_banner").click(function(e) {
		_gaq.push(['_trackEvent', 'Advertisements', 'Banner Click', 'RS Berkeley 728x90']);
	});

	jQuery("a.navarro_728_banner").click(function() {
		_gaq.push(['_trackEvent', 'Advertisements', 'Banner Click', 'Rafael Navarro 728x90']);
	});
});	*/


</script>

</head>

<body>

<?php

$Img1 = "http://www.bestsaxophonewebsiteever.com/wp-content/uploads/rs_berkeley.jpg";
$Alt1 = "RS Berkeley Saxophones";
$Url1 = "http://www.rsberkeley.com";
$class1 = "rs_berkeley_728_banner";
$gaEventLabel1 = "RS Berkeley 728x90";
$onClickVal1 = "_gaq.push(['_trackEvent', 'Advertisements', 'Banner Click','".$gaEventLabel1."']);";

$Img2 ="http://www.bestsaxophonewebsiteever.com/wp-content/uploads/Navarro-BestSaxWebsiteEver_anim.gif";
$Alt2 = "Navarro Saxophone Mouthpieces";
$Url2 = "http://rafaelnavarro.com/";
$class2 = "navarro_728_banner";
$gaEventLabel2 = "Rafael Navarro 728x90";
$onClickVal2 = "_gaq.push(['_trackEvent', 'Advertisements', 'Banner Click','".$gaEventLabel2."']);";



$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$gaEventLabel = ${'gaEventLabel'.$num};
$onClickVal = ${'onClickVal'.$num};

print "<a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\" class=\"".$class."\" onclick=\"".$onClickVal."\"><img src=\"".$Image."\" alt=\"".$Alt."\"></a>";

?>

</body>
</html>
