<?php
  $bs = $_POST["salary"];
  $hra = (19 /100) * $bs;           // 19% of basic salary
  $ta = (8 / 100) * $bs;            // 08% of basic salary
  $da = (4 / 100) * $bs;            // 04% of basic salary
  $ts = $bs - ($hra + $ta + $da);
  $te = (40 / 100) * $bs;           // 40% of basic salary
  if ($ts > $te)
  {
    echo "Eligible for promoton <br>";  //hmmmmm
    echo "Savings Done";
  }
  else
  {
    echo "Not Eligible for promotion <br>";
    echo "Over Due";
  }
?>
