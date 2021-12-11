<?php
    $cinput = strtolower($_POST['cinput']);
    if($cinput == 'r') {
      echo "Color: Red";
    }
    elseif ($cinput == 'p') {
      echo "Color: Pink";
    }
    elseif ($cinput == 'w') {
      echo "Color: White";
    }
    elseif ($cinput == 'y') {
      echo "Color: Yellow";
    }
    else {
    echo "wrong symbol";
  }
?>
