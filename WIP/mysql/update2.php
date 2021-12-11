<?php  
  $c = mysqli_connect("localhost","root","","students");
  if(!$c)
  die("can't connect"."<br>");
  echo "connected";
  echo "<br>";
  $s = "UPDATE cap SET Name = 'NameXYZ' WHERE Roll = 1005";
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