<?php  
  $con = mysqli_connect("localhost","root","","CAP525");
  
  $q1 = "create table CAP(Name varchar(20), Roll integer(4), Class varchar(10))";
  
  if(mysqli_query($con,$q1)) {
    echo "table created";
  }
  else {
    echo "table not created";
  }
  mysqli_close($con);
?>