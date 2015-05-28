<?php

// ADS 7 & 8

$Img7 = get_bloginfo('url') . "/wp-content/uploads/trevor-james-saxophones.jpg";
$Alt7 = "Trevor James Signature Custom Raw Saxophone";
$Url7 = "http://massullomusic.com/trevor-james-signature-custom-raw-saxophones/";
$class7 = "massullo";
$slot_name7 = "Massullo Music 300x250 Ad";

$Img8 = get_bloginfo('url') . "/wp-content/uploads/trevor-james-saxophones.jpg";
$Alt8 = "Trevor James Signature Custom Raw Saxophone";
$Url8 = "http://massullomusic.com/trevor-james-signature-custom-raw-saxophones/";
$class8 = "massullo";
$slot_name8 = "Massullo Music 300x250 Ad";


$num = rand (7,8);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-06\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
