<?php
  //WAP to perform Bubble Sort
  $temp = 0;
  $pass = 1;
  echo "Un-Sorted Array: ";
  $arr = array("C", "A", "Z", "B", "E", "D");
  $size = sizeof($arr);
  echo $size;
  print_r($arr);
  echo "<br>";
  for($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size - $i-1; $j++) {     //eg: 6-0-1 -- 6-1-1 -- 6-2-1 -- 6-3-1
      if ($arr[$j] > $arr[$j+1]) {
        $temp = $arr[$j];
        $arr[$j] = $arr[$j+1];
        $arr[$j+1] = $temp;
      }
      echo "Pass " .$pass. " ";
      print_r($arr);
      echo "<br>";
      $pass+=1;
    }
  }
  echo "<br>";
  echo "Bubble Sorted Array: ";
  print_r($arr);
?>