<?php
$basic_sal=2000;


$hra = .09*$basic_sal;
$ta = .08*$basic_sal;
$da = .04*$basic_sal;

$total_sal = $basic_sal - ($hra+$da+$ta);
$total_exp = .4*$basic_sal;
echo $hra, ", " .$ta, ", " .$da, ", " .$total_sal, ", ".$total_exp;
if ($total_sal > $total_exp)
echo "Savings Done!!\n
Eligible for
Promotion";
else
echo "Overdue!!\n";
?>
