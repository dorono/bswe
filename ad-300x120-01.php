<?php

// ADS 9 & 10

$Img9= get_bloginfo('url') . "/wp-content/uploads/claude-lakey-compass.jpg";
$Alt9= "Claude Lakey";
$Url9= "http://www.claudelakey.com/products/compass";
$slot_name9 = "Claude Lakey 300x120 Sidebar";


$Img10 = get_bloginfo('url') . "/wp-content/uploads/Melodic-Minor-bannerBSWE.jpg";
$Alt10 = "Melodic Minor Jazz Studies";
$Url10 = "http://billplakemusic.org/my-books/melodic-minor-landing-page/";
$slot_name10 = "Bill Plake 300x120 Sidebar";

$num = rand (9,10);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x120-01\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
