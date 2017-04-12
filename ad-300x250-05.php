<?php

// ADS 5 & 6

$Img0 = get_bloginfo('url') . "/wp-content/uploads/BestSax_SuperJet_300x250.jpg";
$Alt0 = "JodyJazz - SUPER JET Alto";
$Url0 = "http://jodyjazz.com/super-jet-alto/";
$class0 = "jodyjazz_super_jet";
$slot_name0 = "Jody Jazz Slot 1 - 300x250";

$Img1 = get_bloginfo('url') . "/wp-content/uploads/BestSax_PowerRing_300x250.jpg";
$Alt1 = "JodyJazz - POWER RING Ligature";
$Url1 = "http://jodyjazz.com/dv-metal-sax-mouthpieces/";
$class1 = "jodyjazz_power_ring";
$slot_name1 = "Jody Jazz Slot 2 - 300x250";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/rampone.jpg";
$Alt2 = "Rampone";
$Url2 = "http://www.ramponecazzani-usa.com/";
$class2 = "ramponecazzani_italian_family";
$slot_name2 = "Rampone 300x250";

$Img3 = get_bloginfo('url') . "/wp-content/uploads/rampone.jpg";
$Alt3 = "Rampone";
$Url3 = "http://www.ramponecazzani-usa.com/";
$class3 = "ramponecazzani_italian_family";
$slot_name3 = "Rampone 300x250";

$num = mt_rand (0,3);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-05\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
