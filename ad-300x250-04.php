<?php

// ADS 5 & 6

$Img5 = get_bloginfo('url') . "/wp-content/uploads/abelet-xn.jpg";
$Alt5 = "Abelet";
$Url5 = "http://www.abelet.com/";
$class5 = "abelet_300x250_position3_banner";

$Img6 = get_bloginfo('url') . "/wp-content/uploads/SaxDakota_BannerAd300x250_4.jpg";
$Alt6 = "Dakota";
$Url6 = "http://www.saxdakota.com/";
$class6 = "dakota_position3_banner";

$num = rand (5,6);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};

print "<a href=\"".$URL."\" target=\"_blank\" class=\"".$class." ad-banner\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a>";
?>
