<?php 

include 'Utility.php';
echo "enter the size of array :\n";
$num=Utility::Integer_input();

echo "Enter array input::\n";
$arr=Utility::array_input($num);

//input for binary search
$num1=Utility::Integer_input();

$time1=Utility::Time_elapsed_binary($arr, $num1);
echo "\nElapsed time for binary is ". $time1." mi\n";

$count=count($arr);
$time2=Utility::Time_elapsed_insertion($arr, $count);
echo "\nelapsed time for insertion sort is ".$time2." mi\n";

$time3=Utility::Time_elapsed_bubble($arr,$count);
echo "\nElapsed time for bubble sort is ".$time3." mi\n";
?>
