<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/ochres-robot-multiwidth";
$Alt1 = "Ochres Music - Free Your Soul";
$Url1 = "http://www.ochresmusic.com/";
$class1 = "ochres-robot";
$slot_name1 = "Ochres Music - Free Your Soul";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/ochres-robot-multiwidth";
$Alt2 = "Ochres Music - Free Your Soul";
$Url2 = "http://www.ochresmusic.com/";
$class2 = "ochres-robot";
$slot_name2 = "Ochres Music - Free Your Soul";

$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};
$slot_name = ${'slot_name'.$num};

print "<div class=\"sidebar-boxunit boxunit\" data-boxunit-slot=\"boxunit-120x600-02\"><a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\"
class=\"".$class." boxunit-banner\" data-slot-name=\"".$slot_name."\" data-boxunit-name=\"".$class."\"><img src=\"".$Image."-300.jpg\"
 alt=\"".$Alt."\"
class=\"mobile-boxunit-img\"><img
src=\"".$Image."-120.jpg\" alt=\"".$Alt."\" class=\"desktop-tablet-boxunit-img\"></a></div>";
?>
