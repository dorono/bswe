<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/10mfan-innovation-multiwidth";
$Alt1 = "Bulletproof Saxophone Playing";
$Url1 = "http://www.bestsaxophonewebsiteever.com/bulletproof-saxophone-playing/";
$class1 = "bsp-narrow-sidebar";
$slot_name1 = "Bulletproof Saxophone Playing All Devices";q

$Img2 = get_bloginfo('url') . "/wp-content/uploads/10mfan-innovation-multiwidth";
$Alt2 = "Bulletproof Saxophone Playing";
$Url2 = "http://www.bestsaxophonewebsiteever.com/bulletproof-saxophone-playing/";
$class2 = "bsp-narrow-sidebar";
$slot_name2 = "Bulletproof Saxophone Playing All Devices";

$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};

<<<<<<< HEAD
print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-120x600-01\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." boxunit-banner\" data-slot-name=\"".$slot_name."\" data-boxunit-name=\"".$class."\"><img src=\"".$Image."-300.jpg\"
 alt=\"".$Alt."\"
class=\"mobile-boxunit-img\"><img
src=\"".$Image."-120.jpg\" alt=\"".$Alt."\" class=\"desktop-tablet-boxunit-img\"></a></div>";
=======
print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-120x600-01\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\" data-ad-name=\"".$class."\"><img src=\"".$Image."-300.png\"
 alt=\"".$Alt."\"
class=\"mobile-ad-img\"><img
src=\"".$Image."-120.png\" alt=\"".$Alt."\" class=\"desktop-tablet-ad-img\"></a></div>";
>>>>>>> updated with new advertiser, removed nofollow tag from retro-revival
?>
