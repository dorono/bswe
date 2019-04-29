<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/eartraining-hq.jpg";
$Alt1 = "Ear Training HQ";
$Url1 = "http://dorono.eartraininghq.zaxaa.com/s/8252981521425";
$ad_name1 = "ear-training-hq";
$slot_name1 = "Ear Training HQ";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/eartraining-hq.jpg";
$Alt2 = "Ear Training HQ";
$Url2 = "http://dorono.eartraininghq.zaxaa.com/s/8252981521425";
$ad_name2 = "ear-training-hq";
$slot_name2 = "Ear Training HQ";

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
