<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Array Functions</h1>
    <h2>Array Flipped</h2>
    <?php
      $input = array("Apple", "Banana", "Strawberry");
      $flipped = array_flip($input);  //interchange key and values
      print_r($input);
      echo "<br>";
      print_r($flipped);
    ?>
    <h2>Array Reverse</h2>
    <?php
      $input  = array("PHP", 3.0, "Red", "Green");
      $reversed = array_reverse($input);  //reverses array values without key
      print_r($input);
      echo "<br>";
      print_r($reversed);
    ?>
    <h2>Array Shift</h2>
    <?php
      $stack = array("Apple", "Banana", "Strawberry", "Blueberry");
      $fruit = array_shift($stack);
      $fr = array_unshift($stack,"hello"); //removes first element and add "hello" in its place with key 0
      print_r($stack);
      echo "<br>";
      print_r($fruit);
      echo "<br>";
      print_r($fr);
    ?>
    <h2>Array UnShift</h2>
    <?php
      $a = array("a" => "red", "b" => "green");
      array_unshift($a,"blue"); //adds new element at beginning of array without removing first element
      print_r($a);
    ?>
    <h2>Array Pop</h2>
    <?php
      $stack = array("orange", "banana", "apple", "raspberry");
      $fruit = array_pop($stack); //removes the last element from stack
      print_r($fruit);
      echo "<br>";
      print_r($stack);
    ?>
    <h2>Array Push</h2>
    <?php
      $stack = array("Mango", "Banana");
      array_push($stack, "Strawberry", "Raspberry"); //push one or more element into the end of the array
      print_r($stack);
    ?>
    <h2>Array Slice</h2>
    <?php
      $input = array("a", "b", "c", "d", "e");
      $output = array_slice($input, 2); //removes items from index 2 - c, d, e
      $output = array_slice($input, 0, 3); //removes items from 0-2 - a, b, c
    ?>
    <h2>Array Splice</h2>
    <?php
      $a1 = array("a"=>"red", "b"=>"green", "c"=>"blue", "d"=>"yellow");
      $a2 = array("a"=>"purple");
      array_splice($a1, 1, 1, $a2);
      Array_splice($a1, 2, 1,"hello");
      Array_splice($a1, 3, 0, $a2);
      Array_splice($a, 3, 0, "how are you");
      print_r($a1);
    ?>
    <h2>Array Search</h2>
    <?php
      $a = array("Key 1"=>"red", "Key 2"=>"green", "Key 3"=>"blue");
      echo array_search("green", $a); //searches based on value and displays key value
    ?>
    <h2>Array Merge</h2>
    <?php
      $array1 = array("color" => "red", 2, 4);
      $array2 = array("a", "b", "color" => "green", "shape" => "cylinder", 4);
      $result = array_merge($array1, $array2);
      print_r($result);
    ?>
    <h2>Array Sorting</h2>
    <?php
      $input = array("Zack", "Andrew", "George", "Benedict", "Abby", "Ifrit", "BlazeIt");
      sort($input); //ascending order
      print_r($input);
      echo "<br>";
      rsort($input);  //descending order
      print_r($input);
      echo "<br>";
      asort($input);  //associative array - ascending order - value
      print_r($input);
      echo "<br>";
      ksort($input);  //associative array - ascending order - key
      print_r($input);
      echo "<br>";
      arsort($input); //associative array - descending order - value
      print_r($input);
      echo "<br>";
      krsort($input); //associative array - descending order - key
      print_r($input);
    ?>
  </body>
</html>
