<?php
//WAP to merge 2 arrays 
$arr1 = array("A", "B", "C", "D", "E");
$arr2 = array("F", "G", "H", "I", "J");
$arr3 = array_merge($arr1,$arr2);
print_r($arr1);
echo "<br>";
print_r($arr2);
echo "<br>";
print_r($arr3);
?>