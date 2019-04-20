<?php
include 'Utility.php';
echo "Enter temperature type: ";
echo "1 for fahrenheit , 2 for celsius ";
$num=Utility::Integer_input();
echo "Enter the temperature ::";
$temp=Utility::Integer_input();

$res=Utility::temperature($temp,$num);
if($num==1)
{
    echo "Temperature from Faherenheit to celcius is ".(int)$res." Celcius \n";
}
else
{
    echo "Temperature from celcius to Faherenheit is ".(int)$res." Faherenheit \n";
}
?>