<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Addition - PHP</title>
  </head>
  <body>
    <?php
      $a = $_POST["number1"];
      $b = $_POST["number2"];
      $c = $a + $b;
      echo "Sum of ", $a, " and ", $b, " is: ", $c;
    ?>
  </body>
</html>
