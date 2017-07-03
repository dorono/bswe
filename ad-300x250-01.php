<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/jlwg300x250-all-devices.jpg";
$Alt1 = "Jazz Lessons with Giants";
$Url1 = "http://www.jazzlessonswithgiants.com/";
$ad_name1 = "jazz-lessons-with-giants-all-devices";
$slot_name1 = "Jazz Lessons with Giants All Devices";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/jlwg300x250-all-devices.jpg";
$Alt2 = "Jazz Lessons with Giants";
$Url2 = "http://www.jazzlessonswithgiants.com/";
$ad_name2 = "jazz-lessons-with-giants-all-devices";
$slot_name2 = "Jazz Lessons with Giants All Devices";

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
