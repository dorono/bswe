<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/lfcc-bluenote-font-multiwidth";
$Alt1 = "Lightning-Fast and Crystal-Clean";
$Url1 = "http://saxtechnique.com";
$class1 = "lfcc-narrow-sidebar";
$slot_name1 = "Lightning-Fast and Crystal-Clean Multiwidth Slot";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/lfcc-bluenote-font-multiwidth";
$Alt2 = "Lightning-Fast and Crystal-Clean";
$Url2 = "http://saxtechnique.com";
$class2 = "lfcc-narrow-sidebar";
$slot_name2 = "Lightning-Fast and Crystal-Clean Multiwidth Slot";

$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-120x600-01\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\" data-ad-name=\"".$class."\"><img src=\"".$Image."-300.jpg\"
 alt=\"".$Alt."\"
class=\"mobile-ad-img\"><img
src=\"".$Image."-120.jpg\" alt=\"".$Alt."\" class=\"desktop-tablet-ad-img\"></a></div>";
?>
