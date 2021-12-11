<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Character Pattern</title>
  </head>
  <body>
    <?php
      $x = $_POST["number"];
      function characterPattern($count)
      {
        $ASCII = 65;
        for ($i = 0; $i < $count; $i++)
        {
          for ($j = 0; $j <= $i; $j++)
          {
            $character = chr($ASCII);
            echo $character." ";
          }
          $ASCII+=1;
          echo "<br>";
        }
      }
      characterPattern($x);
    ?>
  </body>
</html>
