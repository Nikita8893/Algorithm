<?php
include 'Utility.php';
//taking length of an array
echo "Enter size of array ::\n";
$num=Utility::Integer_input();

//input for bubble sort of integer 
echo "Enter values ";
$arr=Utility::array_input($num);

//function call of bubble sort of integer
$arr1=Utility::bubble_sort_integer($arr,$num);

echo "Sorted elements :: \n";
// function to return string from array elements
echo implode(" ",$arr1);
echo "\n";
echo "\n";

?>