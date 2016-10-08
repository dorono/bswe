<?php

// ADS 1 & 2
$Img1 = get_bloginfo('url') . "/wp-content/uploads/vandoren-s-mouthpiece.jpg";
$Alt1 = "Vandoren";
$Url1 = "http://www.dansr.com/vandoren/products/mouthpieces/saxophone/alto/v16";
$class1 = "vandoren_468x60";
$slot_name1 = "Vandoren S+";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/corry-bros-sep-2016.jpg";
$Alt2 = "Corry Brothers";
$Url2 = "http://www.corrybros.com/";
$class2 = "CorryBros_300x250_handmade";
$slot_name2 = "Corry Brothers - Sept 2016";

$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};


print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-02\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
