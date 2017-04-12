<?php

// ADS 1 & 2

$Img1 = get_bloginfo('url') . "/wp-content/uploads/dakota-astonished.jpg";
$Alt1 = "Sax Dakota";
$Url1 = "http://www.saxdakota.com/";
$class1 = "saxdakota_468x60";
$slot_name1 = "Sax Dakota - Up to $250";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/dakota-astonished.jpg";
$Alt2 = "Sax Dakota";
$Url2 = "http://www.saxdakota.com/";
$class2 = "saxdakota_468x60";
$slot_name2 = "Sax Dakota - Up to $250";


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
