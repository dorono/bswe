<?php

// ADS 7 & 8

$Img1 = get_bloginfo('url') . "/wp-content/uploads/Master-97.jpg";
$Alt1 = "P. Mauriat Master 97 ";
$Url1 = "http://www.pmauriatmusic.com";
$class1 = "p.mauriat-master-97";
$slot_name1 = "P. Mauriat Master 97";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/trevor-james-saxophones.jpg";
$Alt2 = "Trevor James Signature Custom Raw Saxophone";
$Url2 = "http://massullomusic.com/trevor-james-signature-custom-raw-saxophones/";
$class2 = "massullo";
$slot_name2 = "Massullo Music 300x250 Ad";


$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-06\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
