<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2><u>Numeric/Indexed Arrays</u></h2>
    <?php
        $cars = array("Tesla", "GM", "Ferrari");
        foreach($cars as $x)
          echo $x."<br>";
    ?>
    <br>
    <?php
      $cars = array("Tesla", "GM", "Ferrari");
      $arrlength = count($cars);
      for($x = 0; $x < $arrlength; $x++){
        echo $cars[$x];
        echo "<br>";
      }
    ?>
    <hr>
    <h2><u>Associative Arrays</u></h2>
    <?php
      $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
      echo "Peter is " .$age["Peter"]. " years old";
    ?>
    <br>
    <br>
    <?php
      $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
      foreach($age as $x => $x_value){
        echo "Key=" .$x. ", Value= " .$x_value;
        echo "<br>";
      }
    ?>
  </body>
</html>
