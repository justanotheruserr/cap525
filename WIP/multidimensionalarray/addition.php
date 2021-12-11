<?php
//addition of two 2D arrays
  $a = array(
    array(10,20),
    array(40,50)
  );
  $b = array(
    array(60,70),
    array(80,90)
  );
  for ($x = 0; $x < 2; $x++){
    echo "<b> Row Number " .$x. "</b> <br>";
    for ($y = 0; $y < 2; $y++){
      echo "Sum of " .$a[$x][$y]. " and " .$b[$x][$y]. " = ";
      echo $a[$x][$y] + $b[$x][$y]."<br>";
    }
  }
?>
