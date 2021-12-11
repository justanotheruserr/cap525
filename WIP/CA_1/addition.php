<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $s = ""; $p = "";
      if(isset($_POST["xyz"])) {
        $a = $_POST['number1'];
        $b = $_POST['number2'];
        $c = $_POST['number3'];
        $s = $a + $b + $c;
        $p = $a * $b * $c;
      }
    ?>
    <h2>Sum and Product of Two Numbers</h2>
    <form method="post">
      Number 1: <input type="text" name="number1"><br>
      Number 2: <input type="text" name="number2"><br>
      Number 3: <input type="text" name="number3"><br>
      Sum: <input type="text" value="<?php echo ($s); ?>"><br>
      Product: <input type="text" value="<?php echo ($p); ?>"><br>
      <input name="xyz" type="submit" value="Calculate">
    </form>
  </body>

</html>
