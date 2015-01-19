<?php

// ADS 9 & 10

$Img9= get_bloginfo('url') . "/wp-content/uploads/claude-lakey-compass.jpg";
$Alt9= "Claude Lakey";
$Url9= "http://www.claudelakey.com/products/compass";

$Img10 = get_bloginfo('url') . "/wp-content/uploads/Melodic-Minor-bannerBSWE.jpg";
$Alt10 = "Melodic Minor Jazz Studies";
$Url10 = "http://billplakemusic.org/my-books/melodic-minor-landing-page/";

$num = rand (9,10);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};

print "<div class=\"sidebar-ads\" data-ad-slot=\"ad-300x120-01\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a></div>";
?>
