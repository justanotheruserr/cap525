<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>TSHERING DEMA
<br> CAP 525<b>
    <meta charset="utf-8">
    <title>ca2</title>
  </head>
  <body>
    <?php
    $a= $_POST["x"];
    $b= $_POST["y"];
    $c= $_POST["z"];
    $sum=$a+$b+$c;
    $avg =$sum/3;
    $percent=($avg*100)/100;

     if($percent>=90) {
     $grade="a Grade";
     }
     elseif($percent>=80) {
      $grade="b Grade";
    }
   elseif($percent>=70) {
   $grade="c Grade";
   }
   elseif($percent>=55) {
    $grade="de Grade";
    }
   elseif($percent>40) {
    $grade ="e Grade";
    }
   else {
   $grade="f Grade";
   }
?>
<form method="post">
 Total marks	<input type="text" value="<?php echo ($sum);?>"> <br>
 Average marks	<input type="text" value="<?php echo ($avg);?>"> <br>
 Percantage	<input type="text" value="<?php echo ($percent);?>"> <br>
 Final result	<input type="text" value="<?php echo ($grade);?>"> <br>
</form>
</body>
</html>
