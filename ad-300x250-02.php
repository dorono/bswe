<?php

// ADS 1 & 2

$Img1 = get_bloginfo('url') . "/wp-content/uploads/bob-sheppard-signature-300x250-blue.jpg";
$Alt1 = "MACSAX Bob Sheppard Signature Series Mouthpieces";
$Url1 = "http://macsax.com/macsax-hard-rubber-saxophone-mouthpieces";
$class1 = "macsax_sheppard_300x250_top_banner";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/10m-fan.jpg";
$Alt2 = "10mFan";
$Url2 = "http://10mfan.com/";
$class2 = "10mFan_300x250_top_banner";

$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$class = ${'class'.$num};

print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-02\"><a href=\"".$URL."\" target=\"_blank\"
class=\"".$class." ad-banner\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
height=\"250\"></a></div>";
?>
