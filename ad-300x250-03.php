<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/trevor-james-saxophones.jpg";
$Alt1 = "Trevor James Signature Custom Raw Saxophone";
$Url1 = "http://www.trevorjamessaxophones.com";
$ad_name1 = "massullo";
$slot_name1 = "Massullo Music 300x250 Ad";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/MorganAdv1.jpg";
$Alt2 = "Morgan Mouthpieces";
$Url2 = "http://www.morganmouthpieces.com/";
$ad_name2 = "morgan-mouthpieces-handmade";
$slot_name2 = "Morgan Mouthpieces 300x250 Ad";


$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-03\"><a href=\"".$URL."\" target=\"_blank\"
class=\"ad-banner\" data-ad-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
