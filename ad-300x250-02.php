<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/Wedge-Ad-300x250.jpg";
$Alt1 = "The Wedge Distribution";
$Url1 = "https://www.thewedgedistribution.com/";
$ad_name1 = "wedge-distribution";
$slot_name1 = "The Wedge Distribution";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/Wedge-Ad-300x250.jpg";
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


print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-02\"><a href=\"".$URL."\" target=\"_blank\"
class=\"ad-banner\" data-ad-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
