<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Sum of array</h1>
    <?php
      $sum = 0;
      $num = array(100, 200, 300, 400, 500, 600);
      $arrlength = count($num);
      for ($x = 0; $x < $arrlength; $x++){
        $sum = $sum + $num[$x];
      }
      echo "Sum is: " .$sum;
    ?>
  </body>
</html>
