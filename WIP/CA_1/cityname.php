<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      Character: <input type="text" name="char1"><br>
      <!--City Name: <input type="text" value="<?php echo ($cityname); ?>"><br> -->
      <input name="charcity" type="submit" value="Calculate">
    </form>
    <?php
      $cityname = "";
      if (isset($_POST["charcity"])) {
        $c1 = strtolower($_POST['char1']);
        switch ($c1) {
          case 'j':
            echo 'Cityname: Jelandhar';
            break;
          case 'd':
            echo 'Cityname: Delhi';
            break;
          case 'l':
            echo 'Cityname: Ludhiana';
            break;
          case 'h':
            echo 'Cityname: Hyderabad';
            break;
          case 'c':
            echo 'Cityname: Chennai';
            break;
          default:
          echo 'Wrong Symbol';
            break;
        }
      }
    ?>
  </body>
</html>
