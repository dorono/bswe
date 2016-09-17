<?php

// ADS 9 & 10

$Img9 = get_bloginfo('url') . "/wp-content/uploads/lakey-saxmouthpiece-photo.jpg";
$Alt9 = "Claude Lakey";
$Url9 = "http://www.claudelakey.com/";
$class9 = "Claude-Lakey-Banner-Sax-And-Mouthpiece-Photo";
$slot_name9 = "Claude Lakey Sidebar";


$Img10 = get_bloginfo('url') . "/wp-content/uploads/reedgeek-black-diamond.jpg";
$Alt10 = "Reed Geek";
$Url10 = "http://www.reedgeek.com/";
$class10 = "Reed-Geek-Black-Diamond";
$slot_name10 = "Reed Geek Sidebar - Sanborn";

$num = rand (9,10);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-05\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
