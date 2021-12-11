<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>String Function</title>
  </head>
  <body>
    <h1>String Functions</h1>
    <?php
      //Case Functions
      $name = "Albert";
      echo "To lower: ", strtolower($name), "<br>";
      echo "To upper: ", strtoupper($name), "<br>";
      echo "Capitalize: ", ucfirst($name), "<br>";
      echo "Word Capitalize: ", ucwords($name), "<br>";

      //Adds forward slash
      $str = addcslashes("Global Domination", "D");
      echo "Forward Slash: ", $str, "<br>";

      //Add back slash
      $str1 = addslashes('Complete "Global" Domination');
      echo "Back Slash: ", $str1, "<br>";

      //String Replace
      $str2 = str_replace("Domination", "Conquest", "Global Domination");
      echo "String Replace: ", $str2, "<br>";

      //String Replace Case Insensitive
      $str3 = str_replace("domination", "Conquest", "Global Domination");
      echo "String I-Replace: ", $str3, "<br>";

      //String Repeat
      echo "String Repeat: ", str_repeat("f",9), "<br>";

      //String Length
      $slen = strlen("laptop");
      echo "String Length: ", $slen, "<br>";

      //String Word Count
      $wlen = str_word_count("Global Domination");
      echo "Word Length: ", $wlen, "<br>";

      //String Reverse
      echo "String Reverse: ", strrev("Aim for the stars"), "<br>";

      //String Position
      echo "String Position: ", strpos("Aliens exist on Mars", "on"), "<br>";

      //String Replace
      echo "String Replace: ", str_replace("Best", "Worst", "Best Friend"), "<br>";

      //String Case-Sensitive Compare
      $result = strcmp("Text 1", "Text 1");
      echo "String Sensitive Compare: ";
      if ($result == 0) { echo "Same Word <br>"; }
      else { echo "Different Word <br>"; }

      //String Case-Insensitive Compare
      $result1 = strcasecmp("text 1", "TEXT 1");
      echo "String Insensitive Compare: ";
      if ($result1 == 0) { echo "Same Word <br>"; }
      else { echo "Different Word <br>"; }

      //Sring Substring
      $word = "wikipedia";
      echo "Substring: ", substr($word,2,5), "<br>";
    ?>
  </body>
</html>
