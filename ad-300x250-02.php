<?php

// ADS 1 & 2

/*$Img1 = get_bloginfo('url') . "/wp-content/uploads/bob-sheppard-signature-300x250-blue.jpg";
$Alt1 = "MACSAX Bob Sheppard Signature Series Mouthpieces";
$Url1 = "http://macsax.com/macsax-hard-rubber-saxophone-mouthpieces";
$class1 = "macsax_sheppard_300x250_top_banner";
$slot_name1 = "MACSAX Sheppard Mouthpiece 350 top";*/

$Img1 = get_bloginfo('url') . "/wp-content/uploads/10m-fan.jpg";
$Alt1 = "10mFan";
$Url1 = "http://10mfan.com/";
$class1 = "10mFan_300x250_top_banner";
$slot_name1 = "10mFan 350";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/10m-fan.jpg";
$Alt2 = "10mFan";
$Url2 = "http://10mfan.com/";
$class2 = "10mFan_300x250_top_banner";
$slot_name2 = "10mFan 350";


$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-02\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
