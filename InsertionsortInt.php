<?php
include 'Utility.php';

echo "Enter size of array ::\n";
$num=Utility::Integer_input();

echo "Enter values ";
$arr=Utility::array_input($num);

//function call for insertion sort of integer array 
$arr1=Utility::insertion_sort_integer($arr,$num);
echo implode(" ",$arr1);
echo "\n";
echo "\n";






?>