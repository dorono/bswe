<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/saxlife-multiwidth";
$Alt1 = "Saxophone Life";
$Url1 = "http://www.saxophonelife.com/?utm_source=bswe%20banner&utm_medium=banner&utm_content=Feb%202015&utm_campaign=BSWE%20Banner";
$class1 = "saxophone-life-120-ad";
$slot_name1 = "Sax Life 120 Slot 2";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/saxlife-multiwidth";
$Alt2 = "Saxophone Life";
$Url2 = "http://www.saxophonelife.com/?utm_source=bswe%20banner&utm_medium=banner&utm_content=Feb%202015&utm_campaign=BSWE%20Banner";
$class2 = "saxophone-life-120-ad";
$slot_name2 = "Sax Life 120 Slot 2";

$num = rand (1,2);

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
