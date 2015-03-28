<?php

// ADS 9 & 10

$Img9 = get_bloginfo('url') . "/wp-content/uploads/claude-lakey.jpg";
$Alt9 = "Claude Lakey Ivry Reeds";
$Url9 = "http://www.claudelakey.com/collections/ivry-reeds";
$class9 = "Claude-Lakey-Banner";
$slot_name9 = "Claude Lakey Sidebar";


$Img10 = get_bloginfo('url') . "/wp-content/uploads/reed-geek.jpg";
$Alt10 = "Reed Geek";
$Url10 = "http://www.reedgeek.com/";
$class10 = "Reed-Geek-Banner";
$slot_name10 = "Reed Geek Sidebar";

$num = rand (9,10);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-05\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
