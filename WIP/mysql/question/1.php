<?php
  //connect to mysql server
  $con = mysqli_connect("localhost","root","");
  if(!$con)
  die("not connected");
  echo "connected";
  //------------------------------
  //create student database
  $q = "CREATE DATABASE employeedatabase";
  if(mysqli_query($con, $q))
  {
    echo "Database Created";
  }
  else
  {
    echo "Database Not Created";
  }
  $con = mysqli_connect("localhost","root","","employeedatabase");
  //------------------------------
  //create table
  $q1 = "CREATE TABLE employee(Name varchar(20), EmpNo integer(4), Age integer(4), WorkExperience integer(5), Salary integer(10))";
  if(mysqli_query($con, $q1)) {
    echo "Table Created";
  }
  else {
    echo "Table Not Created";
  }
  mysqli_close($con);
?>