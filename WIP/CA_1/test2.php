<?php
$x = " ";     //fixed 0 to prevent error blank initialization
if(isset($_POST["add"])){ //fixed 1 block code
  $x = $_POST['char'];
  if($x=="R"){  // fixed 2 you used single = instead of ==
  	$color="Red";
  }
  elseif ($x=="r"){ // fixed 3 you used single = instead of ==
  	$color="Red";
  }
  elseif ($x=="P"){ // fixed 4 you used single = instead of ==
  	$color="Pink";
  }
  elseif ($x=="p"){ // fixed 5 you used single = instead of ==
  	$color="Pink";
  }
  elseif($x=="W"){  // fixed 6 you used single = instead of ==
  	 $color="White";
  }
  elseif($x=="w"){  // fixed 7 you used single = instead of ==
  	 $color="White";
  }
  else if ($x=="Y"){  // fixed 8 you used single = instead of ==
  	$color="Yellow";
  }
  else if ($x=="y"){  // fixed 9 you used single = instead of ==
  	$color="Yellow";
  }
  else{
  	$color="Wrong Symbol";
  }
} // fixed 10 you forgot to close the if(isset) block
?>

<body>
<form method="post" >
Write the character  <input type="text" name="char"/></br></br>
Color Name <input type="text" value="<?php echo @$color;?>"/></br></br>
<input type="submit" name="add" value="Show"/>
</form>
</body>
