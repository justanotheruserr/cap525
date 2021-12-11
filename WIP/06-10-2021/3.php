<?php
  $resu = 0;
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $oper = $_POST['operand'];
  echo "<h2>Result</h2>";
  echo "Number 1: " .$num1. "<br>";
  echo "Number 2: " .$num2. "<br>";
  echo "Operation: " .$oper. "<br>";
  echo "<br>";
  switch ($oper) {
    case '+':
      $resu = $num1 + $num2;
      echo "Sum is: " .$resu;
      break;
    case '-':
      $resu = $num1 - $num2;
      echo "Difference is: " .$resu;
      break;
    case '*':
      $resu = $num1 * $num2;
      echo "Product is: " .$resu;
      break;
    case '/':
      $resu = $num1 / $num2;
      echo "Quotient is: " .$resu;
      break;
    case '%':
      $resu = $num1 % $num2;
      echo "Reminder is: " .$resu;
      break;
    default:
      echo "Unknown Error"; //if user puts some useless values
      break;
  }
?>