<?php  
  //creata a 100x100 imagearc
  $im = imagecreatetruecolor(100, 100);
  $white = imagecolorallocate($im, 75, 150, 200);
  //draw a vertical dashed line
  imagedashedline($im, 50, 25, 50, 75, $white);
  //save image
  header('Content-Type: image/jpeg');
  imagepng($im);
  imagedestroy($im);
?>