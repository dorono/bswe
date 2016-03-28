<?php

// ADS 1 & 2

$Img1 = get_bloginfo('url') . "/wp-content/uploads/Vandoren_jazzmix.jpg";
$Alt1 = "Vandoren";
$Url1 = "http://dansr.com/vandoren/products/225/407/";
$class1 = "vandoren_468x60";
$slot_name1 = "Vandoren Jazzmix";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/SaxDakota_BannerAd468x60_Artists2.jpg";
$Alt2 = "Sax Dakota";
$Url2 = "http://saxdakota.com/";
$class2 = "saxdakota_468x60";
$slot_name2 = "Sax Dakota - Best Sax Around";


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
