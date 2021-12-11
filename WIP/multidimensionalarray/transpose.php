<?php
//transpose of 2D array
  $a = array(
    array(10,20,30),
    array(40,50,60)
  );

  for ($r = 0; $r <3; $r++){
    echo "<b> Row Number " .$r. "</b> <br>";
    for ($c = 0; $c < 2; $c++){
      echo $a[$c][$r]."<br>";
    }
  }
  //  INPUT
  //  10  20  30
  //  40  50  60
  //  TRANSPOSE :)
  //  10  40
  //  20  50
  //  30  60
?>
