<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>300x120</title>

<style>
* {
	padding: 0;
	margin: 0;
}
</style>

</head>

<body>

<?php

$Img1 ="http://www.bestsaxophonewebsiteever.com/wp-content/uploads/claude-lakey-compass.jpg";
$Alt1 = "Claude Lakey";
$Url1 = "http://www.claudelakey.com/products/compass";

$Img2 ="http://www.bestsaxophonewebsiteever.com/wp-content/uploads/Melodic-Minor-bannerBSWE.jpg";
$Alt2 = "Melodic Minor Jazz Studies";
$Url2 = "http://billplakemusic.org/my-books/melodic-minor-landing-page/";

$num = rand (1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};

print "<a href=\"".$URL."\" target=\"_blank\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"120\"></a>";
?>


</body>
</html>
