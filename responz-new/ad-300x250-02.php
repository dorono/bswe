<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/Wedge.jpg";
$Alt1 = "The Wedge Distribution";
$Url1 = "https://www.thewedgedistribution.com/";
$ad_name1 = "wedge-distribution";
$slot_name1 = "The Wedge Distribution";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/Wedge.jpg";
$Alt2 = "The Wedge Distribution";
$Url2 = "https://www.thewedgedistribution.com/";
$ad_name2 = "wedge-distribution";
$slot_name2 = "The Wedge Distribution";

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
