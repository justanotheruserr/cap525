<!DOCTYPE html>
<html>
  <head>
    <title>Factorial</title>
  </head>
  <body>
    <h1>Factorial</h1>
    <?php
      $num = $_POST["number"];
      $fact = 1;
      for ($i = $num; $i >= 1; $i--)
      {
        $fact = $fact * $i;
      }
      echo "The factorial of ", $num, " is: ", $fact;
    ?>
  </body>
</html>
