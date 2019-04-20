<?php 

include 'Utility.php';
echo "enter the number : \n";
$num=Utility::Integer_input();

$result=Utility::sqroot($num);
echo "The square root of given number is :: ".$result."\n";
?>