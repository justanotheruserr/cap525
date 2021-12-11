<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Palindrome</title>
  </head>
  <body>
    <?php
      //WAP to check entered string is palindrome or not
      $word = "Noon";
      $word_reverse = strrev($word);
      $result = strcasecmp($word, $word_reverse);
      //echo $result;
      //echo $word;
      //echo $word_reverse;
      if ($result == 0)
      {
        echo "The word ", $word , " is palindrome";
      }
      else {
        echo "The word ", $word , " is not palindrome";
      }
    ?>
  </body>
</html>
