<?php  
    $image = imagecreatetruecolor(600, 300);
    //define colors based on rgb
    $safron = imagecolorallocate($image, 255, 153, 51);
    $white = imagecolorallocate($image, 255, 255, 255);
    $green = imagecolorallocate($image, 18, 136, 7);
    
    /*
    attempt 1
    */
    
    //attempt 2
    imagefilledrectangle($image, 0, 0, 600, 100, $saffron);
    imagefilledrectangle($image,0, 100, 600, 200, $white);
    imagefilledrectangle($image, 0, 200, 600, 300, $green);
    header('Content-Type: image/png');
    imagepng($image);
    imagedestroy($image);
?>