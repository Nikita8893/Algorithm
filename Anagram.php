<?php
include 'Utility.php';
echo "Enter first string: \n";
$str1=Utility::user_string_input();

echo "Enter second string: \n";
$str2=Utility::user_string_input();

$result=Utility::is_anagram($str1,$str2);
echo $result;
?>