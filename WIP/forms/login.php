<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login - PHP</title>
  </head>
  <body>
    <?php
      $username = 'administrator';
      $pass = 'password';

      $uname = $_POST["uname"];
      $upass = $_POST["upass"];
      if($uname==$username && $upass==$password){
        echo "Success - Valid login credentials";
      }
      else {
        echo "Error - Invalid login credential";
      }
    ?>
  </body>
</html>
