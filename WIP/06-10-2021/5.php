<?php
  $flag = 0;
  $arr = array("Alex", "Bob", "Chris", "David", "Eugio");
  $ele = $_POST['element'];
  for($i = 0; $i < sizeof($arr); $i++) {
    if($arr[$i] == $ele) {
      echo "Element found at location: " .$i;
      $flag = 1;
      break;
    }
  }
  if($flag == 0) {
    echo "Element not found";
  }
?>