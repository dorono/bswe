<?php

//ADS 3 & 4

$Img3 = get_bloginfo('url') . "/wp-content/uploads/BSWE-Side-Ad-4.jpg";
$Alt3 = "Theo Wanne";
$Url3 = "http://www.theowanne.com/";
$class3 = "theo_wanne_300x250_position2_banner";

$Img4 = get_bloginfo('url') . "/wp-content/uploads/just_joes.jpg";
$Alt4 = "Just Joe's Sax Gel Strap";
$Url4 = "http://justjoessaxgelstrap.com";
$class4 = "just_joes_position2";


$num = rand (3,4);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};

print "<div class=\"sidebar-ads\" data-ad-slot=\"ad-300x250-03\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
