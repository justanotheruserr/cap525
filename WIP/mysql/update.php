<?php  
  $c = mysqli_connect("localhost","root","","db1");
  if(!$c)
  die("can't connect"."<br>");
  echo "connected";
  echo "<br>";
  $s = "update ta1 set Name='raman' where city = 'japandhar'";
  if(mysqli_query($c,$s))
  {
    echo "Record Updated";
  }
  else
  {
    echo "Problem in command";
  }
  mysqli_close($c);
?>