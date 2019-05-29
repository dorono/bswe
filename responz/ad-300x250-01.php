<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/lfcc-300x250-sheet-music-ad.jpg";
$Alt1 = "Lightning-Fast and Crystal-Clean";
$Url1 = "http://saxtechnique.com";
$ad_name1 = "lfcc-wide-sidebar";
$slot_name1 = "Lightning-Fast and Crystal-Clean 300x250 wide sidebar";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/lfcc-300x250-sheet-music-ad-video.jpg";
$Alt2 = "Lightning-Fast and Crystal-Clean";
$Url2 = "http://saxtechnique.com";
$ad_name2 = "lfcc-video-still-wide-sidebar";
$slot_name2 = "Lightning-Fast and Crystal-Clean VIDEO STILL 300x250 wide sidebar";

$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-01\"><a href=\"".$URL."\" target=\"_blank\"
class=\"ad-banner\" data-ad-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
