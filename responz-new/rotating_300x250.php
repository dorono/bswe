<div class="300px_ad">

<?php

$Img1 = "http://www.bestsaxophonewebsiteever.com/wp-content/uploads/bob-sheppard-signature-300x250-blue.jpg";
$Alt1 = "MACSAX Bob Sheppard Signature Series Mouthpieces";
$Url1 = "http://macsax.com/macsax-hard-rubber-saxophone-mouthpieces";

/*$Img2 ="http://www.bestsaxophonewebsiteever.com/wp-content/uploads/scalehelper.jpg";
$Alt2 = "Jazz Scale Helper";
$Url2 = "http://www.scalehelper.com/?utm_source=bswse&utm_medium=ad130111_2";*/

$Img2 ="http://www.bestsaxophonewebsiteever.com/wp-content/uploads/scalehelper1.jpg";
$Alt2 = "Jazz Scale Helper";
$Url2 = "http://www.musicapps.scalehelper.com/?utm_source=bswse&utm_medium=musicapps";

$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};

print "<a href=\"".$URL."\" rel=\"noopener noreferrer nofollow\" target=\"_blank\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"250\"></a>";
?>

</div>