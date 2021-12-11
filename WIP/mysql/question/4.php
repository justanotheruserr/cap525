<?php 
  //Create connection
  $con = mysqli_connect("localhost","root","","employeedatabase");
  //Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " .mysqli_connect_error();
  }
  $sql = "SELECT * FROM employee WHERE WorkExperience>5";
  $result = mysqli_query($con, $sql);
  echo "<table border='2' bgcolor='yellow'>
  <tr>
  <th>Name</th>
  <th>EmpNo</th>
  <th>Age</th>
  <th>WorkExperience</th>
  <th>Salary</th>
  </tr>";
  while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" .$row['Name'] . "</td>";
    echo "<td>" .$row['EmpNo'] . "</td>";
    echo "<td>" .$row['Age'] . "</td>";
    echo "<td>" .$row['WorkExperience'] . "</td>";
    echo "<td>" .$row['Salary'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  mysqli_close($con);
?>