<?php

// ADS 1 & 2

$Img1 = get_bloginfo('url') . "/wp-content/uploads/V16_metal_BSWE-2.jpg";
$Alt1 = "Vandoren";
$Url1 = "http://dansr.com/vandoren/products/293/318";
$class1 = "vandoren_468x60";
$slot_name1 = "Vandoren Ad In Header";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/Sticky-Pads-Banner-Final.jpg";
$Alt2 = "Sticky Pads Remedy";
$Url2 = "http://www.stickypadsremedy.com/";
$class2 = "sticky-pads-remedy-468x60";
$slot_name2 = "10mFan 350";


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
