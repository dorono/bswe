<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/bsp-multiwidth";
$Alt1 = "Bulletproof Saxophone Playing";
$Url1 = "http://www.bulletproofsaxophoneplaying.com";
$class1 = "bsp-narrow-sidebar";
$slot_name1 = "Bulletproof Saxophone Playing Narrow Sidebar";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/bsp-multiwidth";
$Alt2 = "Bulletproof Saxophone Playing";
$Url2 = "http://www.bulletproofsaxophoneplaying.com";
$class2 = "bsp-narrow-sidebar";
$slot_name2 = "Bulletproof Saxophone Playing Narrow Sidebar";

$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-120x600-01\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."-300.jpg\"
 alt=\"".$Alt."\"
class=\"mobile-ad-img\"><img
src=\"".$Image."-120.jpg\" alt=\"".$Alt."\" class=\"desktop-tablet-ad-img\"></a></div>";
?>
