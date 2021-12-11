<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php  
      $c = mysqli_connect("localhost","root","");
      if(!$c)
      die("not connected");
      echo "connected";
      
      $q = "create database CAP525";
      if(mysqli_query($c,$q))
      {
        echo "Database Created";
      }
      else
      {
        echo "Database not created";
      }
      mysqli_close($c);
    ?>
  </body>
</html>