<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Sum of 2 array</h1>
    <?php
      $sum1 = 0;
      $sum2 = 0;
      $num1 = array(100, 200, 300, 400, 500, 600);
      $num2 = array(700, 800, 900, 1000, 1100, 1200);
      $arrlength1 = count($num1);
      $arrlength2 = count($num2);
      for ($x = 0; $x < $arrlength1; $x++){
        $sum1 = $sum1 + $num1[$x];
      }
      for ($x = 0; $x < $arrlength2; $x++){
        $sum2 = $sum2 + $num2[$x];
      }
      echo "Sum is: " .$sum1 + $sum2;
    ?>
  </body>
</html>
