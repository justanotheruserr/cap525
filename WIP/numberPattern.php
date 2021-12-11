<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Number Pattern</title>
  </head>
  <body>
    <?php
      function numberPattern($count)
      {
        $number = 1;
        for ($i = 0; $i < $count; $i++)
        {
          for ($j = 0; $j <= $i; $j++)
          {
            echo $number;
          }
          $number+=1;
          echo "<br>";
        }
      }
      numberPattern(5);
    ?>
  </body>
</html>
