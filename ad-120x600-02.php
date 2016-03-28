<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/improvise-multiwidth";
$Alt1 = "Improvise for Real";
$Url1 = "https://improviseforreal.com/welcome-sax/";
$class1 = "improvise-for-real-ad-2";
$slot_name1 = "Improvise for Real - Ad #2";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/improvise-multiwidth";
$Alt2 = "Improvise for Real";
$Url2 = "https://improviseforreal.com/welcome-sax/";
$class2 = "improvise-for-real-ad-2";
$slot_name2 = "Improvise for Real - Ad #2";

$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-120x600-02\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."-300.jpg\"
 alt=\"".$Alt."\"
class=\"mobile-ad-img\"><img
src=\"".$Image."-120.jpg\" alt=\"".$Alt."\" class=\"desktop-tablet-ad-img\"></a></div>";
?>
