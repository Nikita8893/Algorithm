<?php 
include 'Utility.php';

echo "Enter the number where N = 2^n ::";

//function call for taking input 
$num=Utility::number();
Utility::find_number($num);
?>