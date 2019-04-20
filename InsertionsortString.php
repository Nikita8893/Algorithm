<?php 

include 'Utility.php';

echo "Enter size of array ::\n";
$num=Utility::Integer_input();
echo "Enter string values ::\n";
$arr2=Utility::array_input_string($num);

//function call to insertion sort of string array
$arr3=Utility::insertion_sort_string($arr2,$num);

echo implode(" ",$arr3);
echo "\n";
echo "\n";

?>