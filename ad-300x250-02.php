<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/dansr-juno.jpg";
$Alt1 = "Vandoren";
$Url1 = "http://www.dansr.com/vandoren/products/reeds/saxophone/alto/juno";
$ad_name1 = "vandoren_dansr-300x250";
$slot_name1 = "Vandoren DANSR Juno";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/dansr-juno.jpg";
$Alt2 = "Vandoren";
$Url2 = "http://www.dansr.com/vandoren/products/reeds/saxophone/alto/juno";
$ad_name2 = "vandoren_dansr-300x250";
$slot_name2 = "Vandoren DANSR Juno";

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
