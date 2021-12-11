<!DOCTYPE html>
<html>
<body>
  <?php
    function lpu()
    {
      static $x = 1;
      echo $x;
      $x++;
    }
    lpu();
    lpu();
    lpu();
  ?>
</body>
</html>
