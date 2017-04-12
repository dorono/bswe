<?php

// ADS 7 & 8

$Img1 = get_bloginfo('url') . "/wp-content/uploads/trevor-james-saxophones.jpg";
$Alt1 = "Trevor James Signature Custom Raw Saxophone";
$Url1 = "http://www.trevorjamessaxophones.com";
$class1 = "massullo";
$slot_name1 = "Massullo Music 300x250 Ad";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/MorganAdv1.jpg";
$Alt2 = "Morgan Mouthpieces";
$Url2 = "http://www.morganmouthpieces.com/";
$class2 = "morgan-mouthpieces-handmade";
$slot_name2 = "Morgan Mouthpieces 300x250 Ad";


$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-03\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
