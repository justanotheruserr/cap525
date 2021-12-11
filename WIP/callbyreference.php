<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function increment(&$num)
      {
        $num = $num + 1;
        return $num;
      }
      $n = 1;
      echo (increment($n))."<br>";
      echo $n;
    ?>
  </body>
</html>
