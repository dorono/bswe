<?php

// ADS 1 & 2

$Img1 = get_bloginfo('url') . "/wp-content/uploads/sporanoplanet.png";
$Alt1 = "Soprano Planet";
$Url1 = "http://sopranoplanet.com/";
$class1 = "sopranoplanet_468x60";
$slot_name1 = "Soprano Planet - World Class";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/SaxDakota_BannerAd468x60_Artists4.jpg";
$Alt2 = "Sax Dakota";
$Url2 = "http://saxdakota.com/phaetondakota-rebate/";
$class2 = "saxdakota_468x60";
$slot_name2 = "Sax Dakota - Up to $250";


$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-468x60\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\"
alt=\"".$Alt."\" width=\"468\" height=\"60\"></a></div>";
?>
