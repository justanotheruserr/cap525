<!DOCTYPE html>
<html>
  <head>
    <title>Prime Number</title>
  </head>
  <body>
    <h1>Prime Number Checker - Result</h1>
    <?php
      $num = $_POST["number"];
      $flag = 1;
      if ($num == 1)
        echo "Number is prime";
      else
      {
        for ($i = 2; $i <= $num/2; $i++)
        {
          if ($num % $i == 0)
            $flag = 0;
        }
        if ($flag == 1)
          echo "Number is prime";
        else
          echo "Number is not prime";
        }
    ?>
  </body>
</html>
