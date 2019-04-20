<?php

include 'Utility.php';
echo "Enter payment : \n";
$p=Utility::Integer_input();
echo "Enter year : \n";
$y=Utility::Integer_input();
echo "Rate of interest : \n";
$r=Utility::Integer_input();

$result=Utility::monthlypayment($p,$y,$r);
echo "Monthly payment is ".$result."\n";
?>