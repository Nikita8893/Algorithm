<?php
include 'Utility.php';

echo "enter day: \n";
$day=Utility::Integer_input();

echo "Enter month : \n";
$month=Utility::Integer_input();

echo "Enter Year: \n";
$year=Utility::Integer_input();

$result=Utility::dayOfWeek($day,$month,$year);
echo "Day of week is: \n".$result."\n";
?>