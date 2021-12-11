<!DOCTYPE html>
<html>
  <head>
    <title>Sum</title>
  </head>
  <body>
    <h1>Sum of Number</h1>
    <?php
    $num = 1234;
    $sum = 0;
    while ($num > 0)
    {
      $sum= $sum + ($num % 10);
      $num= $num / 10;
    }
    echo "Sum of digits is: ", $sum;
      ?>
  </body>
</html>
