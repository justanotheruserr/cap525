<?php  
  $c = mysqli_connect("localhost","root","","employeedatabase");
  if(!$c)
  die("Can't connect to database"."<br>");
  echo "Connected";
  echo "<br>";
  echo "<h4>Before Update</h4>";
  $sql = "SELECT * FROM employee";
  $result = mysqli_query($c, $sql);
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
  echo "<br>";
  $s = "UPDATE employee SET WorkExperience=8 WHERE Age=40 AND Salary BETWEEN 40000 AND 50000";
  if(mysqli_query($c,$s))
  {
    echo "Record Updated";
  }
  else
  {
    echo "Problem in command";
  }
  echo "<br>";
  echo "<h4>AFTER Update</h4>";
  $sql = "SELECT * FROM employee";
  $result = mysqli_query($c, $sql);
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
  echo "<br>";
  mysqli_close($c);
?>