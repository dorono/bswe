<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/ad-iframe.css">
    <title>300x250</title>

    <style>
        * {
            padding: 0;
            margin: 0;
        }
    </style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">//<![CDATA[
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-8542965-5']);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
        //]]>

    </script>

</head>

<body>

<div class="300px_ad">

<?php

$Img1 = "http://www.bestsaxophonewebsiteever.com/wp-content/uploads/diminished_scale.jpg";
$Alt1 = "Understanding the Diminished Scale (by Walt Weiskopf)";
$Url1 = "http://www.waltweiskopf.com/books/";

$Img2 ="http://www.bestsaxophonewebsiteever.com/wp-content/uploads/live_album1.jpg";
$Alt2 = "Walt Weiskopf Quartet Live";
$Url2 = "http://www.waltweiskopf.com/recordings/";

$Img3 ="http://www.bestsaxophonewebsiteever.com/wp-content/uploads/words4.jpg";
$Alt3 = "Sam Sadigursky - Words Project IV";
$Url3 = "http://samsadigursky.bandcamp.com/";

$num = rand (1,3);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};

print "<a href=\"".$URL."\" target=\"_blank\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\" height=\"120\"></a>";
?>

</div>

</body>
