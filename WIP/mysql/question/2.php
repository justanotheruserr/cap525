<?php  
  $con = mysqli_connect("localhost","root","","employeedatabase");
  
  $q2 = "INSERT INTO employee VALUES ('Albert', 1001, 20, 5, 41000), ('Bob', 1002, 21, 6, 30000), ('Beretta', 1003, 36, 6, 42000), ('Bruce', 1004, 40, 6, 45000), ('Christina', 1005, 23, 7, 51000), ('Diana', 1006, 22, 6, 35000), ('Eugio', 1007, 21, 7, 52000), ('Fred', 1008, 23, 6, 42000), ('Gerald', 1009, 24, 7, 53000), ('Henry', 1010, 36, 6, 37000)";
  if(mysqli_query($con, $q2)) {
    echo "Rows Added";
  }
  else {
    echo "Rows Not Added";
  }
  mysqli_close($con);
?>