<?php
include 'Utility.php';
echo "enter the notes : \n";
$num=Utility::Integer_input();

Utility::note($num);



/*function note($value)
{
 $notes=array('1000', '500', '100', '50', '10', '5', '2', '1');
 $total=0;
 $i=0;

    if($value/$notes[$i] != 0)
    {
        $total += ($value/$notes[$i]);
        echo "total ".$total."\n";
        echo $notes[$i]." is notes ".$value/$notes[$i];
        $value = $value % $notes[$i];
        
    }
    $i++;
    if($value == 0)
    {
       echo "Total notes :: ".$total."\n";
        return;
    }
    note($value);
}
*/
?>