<?php  
  include('connectivity.php');
  $sql="select * from cap";
  $result=mysqli_query($con,$sql);
  echo "<table border='2' bgcolor='yellow'>
  <tr>
  <th>Name</th>
  <th>Roll</th>
  <th>Class</th>
  </tr>";
  while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" .$row['Name'] . "</td>";
    echo "<td>" .$row['Roll'] . "</td>";
    echo "<td>" .$row['Class'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  mysqli_close($con);
?>
