<?php
  $a = array(
    array(10,20,30),
    array(40,50,60),
    array(5,15,25),
    array(11,22,33)
  );

  for ($r = 0; $r < 4; $r++){
    echo "<b> Row Number " .$r. "</b> <br>";
    for ($c = 0; $c < 3; $c++){
      echo $a[$r][$c]."<br>";
    }
  }
?>
