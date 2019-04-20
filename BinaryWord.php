<?php
include 'Utility.php';

//opening file
$file=fopen("new.txt","r") or die ("Unable to open file!");

//reading contents of file
$str=fread($file,filesize("new.txt"));

//for storing word in array
$arr=explode(",",$str);

echo "enter the word to be searched :";
//taking user input for search string

$str2=Utility::user_string_input();

if(Utility::binary_search_String($arr, $str2))
{
    echo "word found\n";
}
else
{
    echo "word not found\n";
}
fclose($file);
?>