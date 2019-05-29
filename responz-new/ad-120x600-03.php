<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/placeholder-multiwidth";
$Alt1 = "";
$Url1 = "";
$class1 = "placeholder-5";
$slot_name1 = "Placeholder 5";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/placeholder-multiwidth";
$Alt2 = "";
$Url2 = "";
$class2 = "placeholder-6";
$slot_name2 = "Placeholder 6";

$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-120x600-03\"><a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\"
class=\"".$class." ad-banner\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."-300.jpg\"
 alt=\"".$Alt."\"
class=\"mobile-ad-img\"><img
src=\"".$Image."-120.jpg\" alt=\"".$Alt."\" class=\"desktop-tablet-ad-img\"></a></div>";
?>
