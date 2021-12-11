<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Sum of elements of 2 array</h1>
    <?php
      $num1 = array(100, 200, 300, 400, 500, 600);
      $num2 = array(700, 800, 900, 1000, 1100, 1200);
      $arrlength1 = count($num1);
      for ($x = 0; $x < $arrlength1; $x++){
        echo "Sum of " .$x. " element of array: " .$num1[$x]+$num2[$x]. "<br>";
      }
    ?>
  </body>
</html>
