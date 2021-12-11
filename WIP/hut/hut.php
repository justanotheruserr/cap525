<?php
  $image = imagecreatetruecolor(700,500);
   
  $black = imagecolorallocate($image, 0, 0, 0);
  $white = imagecolorallocate($image, 255, 255, 255);
   
  imagefill($image, 0, 0, $white);
   
  imagerectangle($image, 140, 230, 280, 400, $black);
  imagerectangle($image, 280, 230, 560, 400, $black);
   
  imagepolygon($image, [210, 110, 140, 230, 280, 230], 3, $black);
  imageopenpolygon($image, [210, 110, 490, 110, 560, 230], 3, $black);
  
  imagerectangle($image, 180, 320, 240, 400, $black);
  imagerectangle($image, 400, 310, 440, 350, $black);
  
  imageline($image, 0, 400, 700, 400, $black);
  header("Content-type: image/png");
  imagepng($image);
?>