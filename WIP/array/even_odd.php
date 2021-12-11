<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Odd Even Number</h1>
    <?php
      $num = array(100, 200, 300, 400, 500, 600, 121, 113, 115, 247);
      $arrlength = count($num);
      echo "Even numbers are: ";
      for ($x = 0; $x < $arrlength; $x++){
        if($num[$x] % 2 == 0){
          echo $num[$x].", ";
        }
      }
      echo "<br><br>";
      echo "Odd numbers are: ";
      for ($x = 0; $x < $arrlength; $x++){
        if($num[$x] % 2 != 0){
          echo $num[$x].", ";
        }
      }
    ?>
  </body>
</html>
