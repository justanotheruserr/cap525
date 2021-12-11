<?php
    switch (strtolower($_POST['char1'])) {
      case 'j':
        echo "Cityname: Jalandhar";
      //echo "Cityname: Jelandhar";
        break;
      case 'd':
        echo "Cityname: Delhi";
        break;
      case 'l':
        echo "Cityname: Ludhiana";
        break;
      case 'h':
        echo "Cityname: Hyderabad";
        break;
      case 'c':
        echo "Cityname: Chennai";
        break;
      default:
        echo "Cityname: Wrong Symbol";
        break;
    }
?>
