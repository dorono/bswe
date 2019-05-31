<?php

// ADS 5 & 6

$Img1 = get_bloginfo('url') . "/wp-content/uploads/BestSax_SuperJet.jpg";
$Alt1 = "JodyJazz - SUPER JET Alto";
$Url1 = "http://jodyjazz.com/super-jet-alto/";
$ad_name1 = "jodyjazz_super_jet";
$slot_name1 = "Jody Jazz Slot 1 - 300x250";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/BestSax_PowerRing.jpg";
$Alt2 = "JodyJazz - POWER RING Ligature";
$Url2 = "http://jodyjazz.com/dv-metal-sax-mouthpieces/";
$ad_name2 = "jodyjazz_power_ring";
$slot_name2 = "Jody Jazz Slot 2 - 300x250";

$Img3 = get_bloginfo('url') . "/wp-content/uploads/rampone.jpg";
$Alt3 = "Rampone";
$Url3 = "http://www.ramponecazzani-usa.com/";
$ad_name3 = "ramponecazzani_italian_family";
$slot_name3 = "Rampone 300x250";

$Img4 = get_bloginfo('url') . "/wp-content/uploads/rampone.jpg";
$Alt4 = "Rampone";
$Url4 = "http://www.ramponecazzani-usa.com/";
$ad_name4 = "ramponecazzani_italian_family";
$slot_name4 = "Rampone 300x250";

$num = mt_rand (1,4);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-05\"><a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
