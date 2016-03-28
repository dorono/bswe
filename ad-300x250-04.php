<?php

// ADS 5 & 6

$Img0 = get_bloginfo('url') . "/wp-content/uploads/hinoki-CM2.jpg";
$Alt0 = "Forestone Reeds";
$Url0 = "http://www.forestone-japan.com/index.php/alto-saxophone-reeds/";
$class0 = "forestone_300x250_banner";
$slot_name0 = "Forestone 300x250";

$Img1 = get_bloginfo('url') . "/wp-content/uploads/hinoki-CM2.jpg";
$Alt1 = "Forestone Reeds";
$Url1 = "http://www.forestone-japan.com/index.php/alto-saxophone-reeds/";
$class1 = "forestone_300x250_banner";
$slot_name1 = "Forestone 300x250";

$num = mt_rand (0,1);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-04\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
