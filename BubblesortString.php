<?php
include 'Utility.php';
//taking length of an array
echo "Enter size of array ::\n";
$num=Utility::Integer_input();

// input for bubble sort of string
echo "Enter string values ::\n";
$arr2=Utility::array_input_string($num);

//function call of bubble sort of string
$arr3=Utility::bubble_sort_string($arr2,$num);

echo implode(" ",$arr3);
echo "\n";
echo "\n";
 ?>