<?php  
  $values = array(
    150, 50,  //point 1
    55, 119,  //point 2
    91, 231,  //poing 3
    209, 231, //point 4
    245, 119, //point 5
    290, 140  //point 6
  );
  $image = imagecreatetruecolor(300, 300);
  $background_color = imagecolorallocate($image, 0, 153, 0);
  imagefill($image, 0, 0, $background_color);
  $col_poly = imagecolorallocate($image, 255, 255, 255);
  imagepolygon($image, $values, 5, $col_poly);
  header('Content-Type: image/png');
  imagepng($image);
?>