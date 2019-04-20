<?php
include 'Utility.php';
echo "enter size of array\n";
$num=Utility::Integer_input();

echo "Enter values ";
$arr=Utility::array_input($num);

echo "Enter num to search ";
$num1=Utility::Integer_input();

$num4=Utility::binary_search_int($arr, $num1);

echo $num4;

?>





