<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/jlwg_300x250.jpg";
$Alt1 = "Jazz Lessons with Giants";
$Url1 = "http://jazzlessonswithgiants.com/";
$ad_name1 = "jlwg-orange-ad";
$slot_name1 = "JLWG 300x250 300x250-02.php";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/jlwg_300x250.jpg";
$Alt2 = "Jazz Lessons with Giants";
$Url2 = "http://jazzlessonswithgiants.com/";
$ad_name2 = "jlwg-orange-ad";
$slot_name2 = "JLWG 300x250 300x250-02.php";

$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-300x250-02\"><a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\"
class=\"boxunit-banner\" data-boxunit-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
