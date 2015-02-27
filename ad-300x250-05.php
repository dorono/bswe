<?php

// ADS 9 & 10

$Img9 = get_bloginfo('url') . "/wp-content/uploads/lakey-BSWEad.jpg";
$Alt9 = "Claude Lakey";
$Url9 = "http://www.claudelakey.com/products/compass";
$class9 = "Claude-Lakey-Banner";
$slot_name9 = "Claude Lakey Sidebar";


$Img10 = get_bloginfo('url') . "/wp-content/uploads/lakey-BSWEad.jpg";
$Alt10 = "Claude Lakey";
$Url10 = "http://www.claudelakey.com/products/compass";
$class10 = "Claude-Lakey-Banner";
$slot_name10 = "Claude Lakey Sidebar";

$num = rand (9,10);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-05\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
