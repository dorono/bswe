<?php

// ADS 1 & 2

$Img1 = get_bloginfo('url') . "/wp-content/uploads/jlwg300x250-all-devices.jpg";
$Alt1 = "Jazz Lessons with Giants";
$Url1 = "http://www.jazzlessonswithgiants.com/";
$class1 = "jazz-lessons-with-giants-all-devices";
$slot_name1 = "Jazz Lessons with Giants All Devices";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/jlwg300x250-all-devices.jpg";
$Alt2 = "Jazz Lessons with Giants";
$Url2 = "http://www.jazzlessonswithgiants.com/";
$class2 = "jazz-lessons-with-giants-all-devices";
$slot_name2 = "Jazz Lessons with Giants All Devices";


$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-01\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
