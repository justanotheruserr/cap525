<?php
   $image = imageCreateTrueColor(500, 600);
   $green = imageColorAllocate($image, 132, 135, 28);
   $points = array (   176,  328, //uhm p1    
                205, 328,   //p2
                217, 297,   //p3
                229, 328,   //p44
                256, 328,   //p5
                235, 346,   //p6
                249, 385,   //p7
                217, 360,   //p8
                182, 388,   //p9
                198, 345    //p10 
            );
   imagefilledpolygon($image, $points, 10, $green);
   header('Content-Type:image/png');
   imagepng($image);
   imagedestroy($image);
?>