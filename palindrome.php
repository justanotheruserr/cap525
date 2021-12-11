<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //WAP to check entered string is palindrome or not
      $word = "radarr";
      $word_reverse = strrev($word);
      $result = strcmp($word, $word_reverse);
      echo $result;
      echo $word;
      echo $word_reverse;
      if ($result == true)
      {
        echo "The word ", $word , " is palindrome";
      }
      else {
        echo "The word ", $word , " is not palindrome";
      }
    ?>
  </body>
</html>
