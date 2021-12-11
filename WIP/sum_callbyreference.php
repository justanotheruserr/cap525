<!DOCTYPE html>
<html>
  <head>
    <title>Sum</title>
  </head>
  <body>
    <h1>Sum of Number</h1>
    <?php
    $num = 1234;
    function factorial(&$num)
    {
      $sum = 0;
      while ($num > 0)
      {
        $sum= $sum + ($num % 10);
        $num= $num / 10;
      }
      return $sum;
    }
    echo "Sum of digits is: ", factorial($num);
      ?>
  </body>
</html>
