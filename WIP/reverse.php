<!DOCTYPE html>
<html>
  <head>
    <title>Reverse</title>
  </head>
  <body>
    <h1>Factorial</h1>
    <?php
      $num = 1234;
      $reverse = 0;
      while ($num > 0)
      {
        $remainder = $reverse % 10;
        $reverse = ($reverse * 10) + $remainder;
        $num = $num/10;
      }
      echo "Reverse is ", $reverse;
    ?>
  </body>
</html>
