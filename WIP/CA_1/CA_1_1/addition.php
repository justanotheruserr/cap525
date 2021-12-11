<?php
  $s = ""; $p = "";
  $a = $_POST['number1'];
  $b = $_POST['number2'];
  $c = $_POST['number3'];
  $s = $a + $b + $c;
  $p = $a * $b * $c;
?>

<h2>Sum and Product of Two Numbers</h2>
Sum: <input type="text" value="<?php echo ($s); ?>"><br>
Product: <input type="text" value="<?php echo ($p); ?>"><br>
