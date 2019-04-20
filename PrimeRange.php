<?php
include 'Utility.php';

$start=0;
$end=100;

 $arr=Utility::prime_range($start,$end);
 echo implode(" ",$arr);
 echo "\n";
 echo "\n";

 Utility::prime_anagram($arr);

 Utility::prime_palindrome($arr)



?>