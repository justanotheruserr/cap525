<?php
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
?>

Total Marks: <input type="text" value="<?php echo ($tot); ?>"><br>
Average Marks: <input type="text" value="<?php echo ($avg); ?>"><br>
Final Result: <input type="text" value="<?php echo ($grade); ?>"><br>
