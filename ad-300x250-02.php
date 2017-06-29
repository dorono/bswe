<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/bswe-JAVA-Green.jpg";
$Alt1 = "Vandoren";
$Url1 = "http://www.dansr.com/vandoren/products/reeds/saxophone/alto/java";
$ad_name1 = "vandoren_300x250";
$slot_name1 = "Vandoren S+";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/bswe-JAVA-Green.jpg";
$Alt2 = "Vandoren";
$Url2 = "http://www.dansr.com/vandoren/products/reeds/saxophone/alto/java";
$ad_name2 = "vandoren_300x250";
$slot_name2 = "Vandoren S+";

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
