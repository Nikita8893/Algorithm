<?php
include 'Utility.php';

echo "enter length of array \n";
$num=Utility::Integer_input();

echo "Enter values ";
$arr=Utility::array_input($num);
echo "Array are: \n";
echo implode(',',$arr);
echo "Sorted array are : \n";
$arr=Utility::mergesort($arr);
echo implode(',',$arr);
?>