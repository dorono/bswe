<div class="banner728 ad">
  <?php

  $Img1 = "http://www.bestsaxophonewebsiteever.com/wp-content/uploads/robertos-only-the-best.jpg";
  $Alt1 = "Roberto's Winds";
  $Url1 = "https://www.robertoswinds.com/";
  $class1 = "robertos_winds_728x90";
  $gaEventLabel1 = "Robertos Winds - Only the Best";

  $Img2 = "http://www.bestsaxophonewebsiteever.com/wp-content/uploads/robertos-only-the-best.jpg";
  $Alt2 = "Roberto's Winds";
  $Url2 = "https://www.robertoswinds.com/";
  $class2 = "robertos_winds_728x90";
  $gaEventLabel2 = "Robertos Winds - Only the Best";

  $num = mt_rand (1,2);

  $Image = ${'Img'.$num};
  $Alt = ${'Alt' .$num};
  $URL = ${'Url'.$num};
  $class = ${'class'.$num};
  $gaEventLabel = ${'gaEventLabel'.$num};

  print "<a data-slot-name=\"".$gaEventLabel."\" rel=\"noopener noreferrer nofollow\" href=\"".$URL."\" target=\"_blank\" class=\"".$class."\"><img src=\"".$Image."\" alt=\"".$Alt."\"></a>";

  ?>
</div>