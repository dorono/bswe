<style>
.rando {
  background-color: #CCC;
  background-image:url(https://bswestage.wpengine.com/wp-content/uploads/lfcc-sheet-music-ALT-1.jpg);
  background-size: 133%;
  display: block;
}

.fixed-ar::before {
  content: "";
  float: left;
  width: 1px;
  margin-left: -1px;
/*     border: 1px solid red;
 */
}
/* .fixed-ar::after {
  content: "";
  display: table;
  clear: both;
} */

.fixed-ar-16-9::before {
  padding-top: 56.25%;
}
.fixed-ar-3-2::before {
  padding-top: 66.66%;
}
.fixed-ar-4-3::before {
  padding-top: 83%;
}
.fixed-ar-1-1::before {
  padding-top: 100%;
}

.width-50 {
  display: inline-block;
  width: %;
}
.width-20 {
  display: inline-block;
  width: 20%;
}

.width-fluid {
    display: inline-block;
  width: 100%;
  max-width: 300px;
}
</style>

<?php

$Img1 = get_bloginfo('url') . "/wp-content/uploads/lfcc-300x250-sheet-music-ad.jpg";
$Alt1 = "Lightning-Fast and Crystal-Clean";
$Url1 = "http://saxtechnique.com";
$ad_name1 = "lfcc-wide-sidebar";
$slot_name1 = "Lightning-Fast and Crystal-Clean 300x250 wide sidebar";

$Img2 = get_bloginfo('url') . "/wp-content/uploads/lfcc-300x250-sheet-music-ad-video.jpg";
$Alt2 = "Lightning-Fast and Crystal-Clean";
$Url2 = "http://saxtechnique.com";
$ad_name2 = "lfcc-video-still-wide-sidebar";
$slot_name2 = "Lightning-Fast and Crystal-Clean VIDEO STILL 300x250 wide sidebar";

$num = mt_rand(1,2);

$Image = ${'Img'.$num};
$Alt = ${'Alt' .$num};
$URL = ${'Url'.$num};
$ad_name = ${'ad_name'.$num};
$slot_name = ${'slot_name'.$num};


// print "<div class=\"sidebar-ads ad\" data-ad-slot=\"ad-300x250-01\"><a href=\"".$URL."\" target=\"_blank\"
// class=\"ad-banner\" data-ad-name=\"".$ad_name."\" data-slot-name=\"".$slot_name."\"><img src=\"".$Image."\" alt=\"".$Alt."\" width=\"300\"
// height=\"250\"></a></div>";
print '<div><a href="https://www.google.com" class="rando fixed-ar fixed-ar-4-3 width-fluid"></a></div>'
?>
