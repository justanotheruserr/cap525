<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $tot = ""; $avg = ""; $grade = "";
      if (isset($_POST["gradecalc"])) {
        $m1 = $_POST['mark1'];
        $m2 = $_POST['mark2'];
        $m3 = $_POST['mark3'];
        $tot = $m1 + $m2 + $m3;
        $avg = $tot / 3;
        $percent = ($avg * 100) / 100;
        if($percent >= 90) {
          $grade = "A Grade";
        }
        elseif ($percent >= 80) {
          $grade = "B Grade";
        }
        elseif ($percent >= 70) {
          $grade = "C Grade";
        }
        elseif ($percent >= 55) {
          $grade = "D Grade";
        }
        elseif ($percent > 40) {
          $grade = "E Grade";
        }
        else {
          $grade = "F Grade";
        }
      }
    ?>
    <form method="post">
      First Subject Marks: <input type="text" name="mark1"><br>
      Second Subject Marks: <input type="text" name="mark2"><br>
      Third Subject Marks: <input type="text" name="mark3"><br>
      Total Marks: <input type="text" value="<?php echo ($tot); ?>"><br>
      Average Marks: <input type="text" value="<?php echo ($avg); ?>"><br>
      Final Result: <input type="text" value="<?php echo ($grade); ?>"><br>
      <input name="gradecalc" type="submit" value="Calculate">
    </form>
  </body>
</html>
