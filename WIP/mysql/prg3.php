<?php
  //connect to mysql server
  $con = mysqli_connect("localhost","root","");
  if(!$con)
  die("not connected");
  echo "connected";
  //------------------------------
  //create student database
  $q = "CREATE DATABASE students";
  if(mysqli_query($con, $q))
  {
    echo "Database Created";
  }
  else
  {
    echo "Database Not Created";
  }
  $con = mysqli_connect("localhost","root","","students");
  //------------------------------
  //create table
  $q1 = "CREATE TABLE cap(Name varchar(20), Roll integer(4), Age integer(4), Gender varchar(5), Class varchar(10))";
  if(mysqli_query($con, $q1)) {
    echo "Table Created";
  }
  else {
    echo "Table Not Created";
  }
  //------------------------------
  //insert 5 values
  $q2 = "INSERT INTO cap VALUES ('Albert', 1001, 20, 'M', 'D1903'), ('Bob', 1002, 21, 'M', 'D1903'), ('Christina', 1003, 23, 'F', 'D1903'), ('Diana', 1004, 22, 'F', 'D1903'), ('Eugio', 1005, 21, 'M', 'D1903'), ('Fred', 1006, 23, 'M', 'D1904'), ('Gerald', 1007, 24, 'M', 'D1905'), ('Henry', 1008, 22, 'F', 'D1901'), ('Ifrit', 1009, 21, 'M', 'D1903'), ('Jessica', 1010, 23, 'F', 'D1905')";
  if(mysqli_query($con, $q2)) {
    echo "Rows Added";
  }
  else {
    echo "Rows Not Added";
  }
  mysqli_close($con);
?>