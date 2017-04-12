<?php

// ADS 8 & 9

$Img1 = get_bloginfo('url') . "/wp-content/uploads/retro-revival-white.jpg";
$Alt1 = "Retro Revival Saxophone Mouthpieces";
$Url1 = "https://retro-revival.com/";
$class1 = "retro-revival-white";
$slot_name1 = "Retro Revival 300x250 Ad";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/retro-revival-white.jpg";
$Alt2 = "Retro Revival Saxophone Mouthpieces";
$Url2 = "https://retro-revival.com/";
$class2 = "retro-revival-white";
$slot_name2 = "Retro Revival 300x250 Ad";


$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-07\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
