<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function abc()
      {
        echo "In moon()<br>\n";
      }
      function add($string)
      {
        echo $string;
      }
      $f1 = 'abc';
      $f1();
      $f2 = 'add';
      $f2('hello');
     ?>
  </body>
</html>
