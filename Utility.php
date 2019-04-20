<?php
class Utility
{

    public static function user_string_input()
    {
        fscanf(STDIN, "%s\n", $str);
        //validating user input
        while (!(strlen($str) >= 3) || (is_integer($str))) {
            echo "enter valid string";
            fscanf(STDIN, "%s", $str);
        }
        return $str;
    }

    public static function is_anagram($str1, $str2)
    {
        if (count_chars($str1, 1) == count_chars($str2, 1)) {
            return "String is anagram";
        } else {
            return "String is not anagram";
        }

    }

    public static function check_float($num)
    {
        if (is_numeric($num) && strpos($num, ".")) {
            return true;
        } else {
            return false;
        }

    }

    public static function Integer_input()
    {
        fscanf(STDIN, "%s\n", $num);
        while ((Utility::check_float($num)) || (!(is_numeric($num)))) {
            echo "Enter valid input : \n";
            $num = Utility::Integer_input();
        }
        return $num;
    }

    public static function is_prime($num)
    {
        $num = abs($num);
        for ($i = 2; $i <= $num; $i++) {
            if ($num % $i == 0) {

                return false;
            } else {
                return true;
            }
        }
    }

    public static function prime_range($start, $end)
    {
        $arr = array();
        $j = 0;
        for ($i = $start; $i < $end; $i++) {
            if (Utility::is_prime($i)) {
                if (abs($i) != 0 && abs($i) != 1) {
                    $arr[$j++] = $i;
                }
            }
        }
        return $arr;
    }

    public static function prime_anagram($arr)
    {
        $length = count($arr);
        $anagram = false;

        for ($i = 0; $i < $length; $i++) {
            for ($j = $i + 1; $j < $length; $j++) {
                $anagram = Utility::is_anagram($arr[$i], $arr[$j]);
                if ($anagram) {
                    echo "anagram pairs are " . $arr[$i] . "," . $arr[$j] . "\n";
                }
            }
        }
    }

    public static function is_palindrome($str1)
    {
        $str1 = $str1 . "";
        $str2 = "";
        for ($i = (strlen($str1) - 1); $i >= 0; $i--) {
            $str2 = $str2 . $str1[$i];
        }
        if (strcasecmp($str1, $str2)) {
            return true;
        } else {
            return false;
        }

    }

    public static function prime_palindrome($arr)
    {
        $length = count($arr);
        for ($i = 0; $i < $length; $i++) {
            $x = $arr[$i];
            if (Utility::is_palindrome($x)) {
                echo $arr[$i] . " is palindrome\n";
            }
        }
    }

    /*public static function Palindrome1($end)
    {
    for($no = 2; $no<=$end; $no++)
    {
    $temp = 0;$temp1=0; $rev= 0;
    for($i = 2; $i<=$no-1;$i++)
    {
    if($no%$i==0)
    {
    $temp = $temp + 1;
    }
    }
    if($temp == 0)
    {

    $temp1=$no;
    while($temp1>0)
    {
    $rev = ($rev*10)+($temp1%10);
    $temp1 = $temp1/10;
    }

    if($rev == $no)
    {
    echo $rev." ";
    }
    }
    }
    }*/

    //function for binary search for integer
    public static function binary_search_int($arr, $num)
    {
        $low = 0;
        $high = count($arr) - 1;

        sort($arr);
        while ($high >= $low) {
            $mid = floor($low + ($high - $low) / 2);
            if ($arr[$mid] == $num) {
                return "Number Found";
            } else if ($arr[$mid] > $num) {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }

        }
        return "Number not found";
    }

    //function for time elpased to calculate search num using binary search
    public static function Time_elapsed_binary($arr, $num)
    {
        $start = 0;
        $arr1 = $arr;
        $end = count($arr) - 1;
        $num1 = $num;

        $starttime = microtime(true);
        echo "Start time is " . $starttime;
        if (Utility::binary_search_int($arr1, $num1)) {
            echo "\n";
            echo "number found \n";
        } else {
            echo "\n";
            echo "number not found\n";
        }
        $stop = microtime(true);
        echo "Stop time is " . $stop;
        $time = $stop - $starttime;
        return $time;
    }

    //function for taking array input of integer
    public static function array_input($num)
    {
        $arr = array($num);
        for ($i = 0; $i < $num; $i++) {
            $value = Utility::Integer_input();
            $arr[$i] = $value;
        }
        return $arr;
    }

//function for taking array input of integer
    public static function array_input_string($num)
    {
        $arr = array($num);
        for ($i = 0; $i < $num; $i++) {
            $value = Utility::user_string_input();
            $arr[$i] = $value;
        }
        return $arr;
    }

    //function for binary search of string
    public static function binary_search_String($arr, $str)
    {
        $low = 0;
        $high = count($arr) - 1;

        sort($arr);
        while ($high >= $low) {
            $mid = floor($low + ($high - $low) / 2);
            if (strcmp($arr[$mid], $str) == 0) {
                return true;
            }

            //for string comparison
            else if (strcmp($arr[$mid], $str) > 0) {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }

        }
        return false;
    }

    //function to do insertion sort for array of integer
    //by using parameter as array and its length

    public static function insertion_sort_integer($arr, $length)
    {
        for ($i = 0; $i < $length; $i++) {
            $val = $arr[$i];
            $j = $i - 1;
            while ($j >= 0 && $arr[$j] > $val) {
                $arr[$j + 1] = $arr[$j];
                $j--;

            }
            $arr[$j + 1] = $val;
        }
        return $arr;
    }

    //function to do insertion sort for array of string
    //by using parameter as array and its length
    public static function insertion_sort_string($arr, $length)
    {
        for ($i = 0; $i < $length; $i++) {
            $val = $arr[$i];
            $j = $i - 1;
            while ($j >= 0 && (strcmp($arr[$j], $val) > 0)) {
                $arr[$j + 1] = $arr[$j];
                $j--;
            }
            $arr[$j + 1] = $val;
        }

        return $arr;
    }

    //function to do bubble sort for array of integer
    //by using parameter as array and its length
    public static function bubble_sort_integer($arr, $length)
    {
        for ($i = 0; $i < $length; $i++) {
            for ($j = 0; $j < $length - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
        return $arr;
    }

    //function to do bubble sort for array of string
    //by using parameter as array and its length
    public static function bubble_sort_string($arr, $length)
    {
        for ($i = 0; $i < $length; $i++) {
            for ($j = 0; $j < $length - $i - 1; $j++) {
                if (strcmp($arr[$j], $arr[$j + 1]) > 0) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
        return $arr;
    }

    public static function Time_elapsed_insertion($arr, $num)
    {
        $start = 0;
        $arr1 = $arr;
        $end = count($arr) - 1;
        $num1 = $num;

        $starttime = microtime(true);
        echo "Start time is " . $starttime . "\n";

        $arr = Utility::insertion_sort_integer($arr, $num);
        echo "sorted array is \n";
        echo implode(" ", $arr) . "\n";

        $stop = microtime(true);
        echo "Stop time is :" . $stop . "\n";

        $time = $stop - $starttime;

        return $time;

    }

    public static function Time_elapsed_bubble($arr, $num)
    {
        $starttime = microtime(true);
        echo "Start time is " . $starttime;
        $arr1 = Utility::bubble_sort_integer($arr, $num);
        echo "\nsorted array is \n";
        echo implode(" ", $arr1) . "\n";

        $stop = microtime(true);
        echo "stop " . $stop;

        $time = $stop - $starttime;
        return $time;

    }

    //function for checking power of two
    public static function is_Powoftwo($num)
    {
        if (is_numeric($num) && (!(Utility::check_float($num)))) {
            while ($num % 2 == 0) {
                $num = $num / 2;
            }
            if ($num == 1) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    //function for taking question as input for find number
    public static function number()
    {
        fscanf(STDIN, "%s\n", $num);
        while (!(Utility::is_Powoftwo($num))) {
            echo "Enter valid input: \n";
            $num = Utility::number();
        }
        return $num;
    }

    //function for find number
    public static function find_number($num)
    {
        $arr = array();
        for ($i = 0; $i < $num; $i++) {
            $arr[$i] = $i;
        }
        echo "Think of number in the range 0 and " . ($num - 1) . "\n";
        $start = 0;
        $end = $num - 1;
        while ($end >= $start) {
            $mid = floor($start + ($end - $start) / 2);
            if ($end == $start) {
                echo "Your number is " . $arr[$start] . "\n";
                break;
            } else {
                echo "is your number greater or equal or less than " . $arr[$mid] . "\n";
                echo "enter y for greater e for equal and n less\n";
                fscanf(STDIN, "%s\n", $str);
                if ($str == 'e') {
                    echo "your number is " . $arr[$mid] . "\n";
                    break;
                } else if ($str == 'y') {
                    $start = $mid + 1;
                } else {
                    $end = $mid - 1;
                }
            }
        }
    }

    public static function temperature($temp, $num)
    {
        if ($num == 1) {
            $result = ($temp - 32) * 5 / 9;
        } else {
            $result = ($temp * 9 / 5) + 32;
        }
        return $result;
    }

    public static function monthlypayment($p, $y, $r)
    {
        $n = 12 * $y;
        $r = $r / (12 * 100);
        $pay = $p * $r / (1 - pow((1 + $r), -$n));
        return $pay;
    }

    public static function sqroot($c)
    {
        $epsilon = 1.0e-15;
        $t = $c;
        while (abs($t - $c / $t) > $epsilon * $t) {
            $t = ($c / $t + $t) / 2;
        }
        return $t;
    }

    public static function note($value)
    {
        static $notes = array('1000', '500', '100', '50', '10', '5', '2', '1');
        static $total = 0;
        static $i = 0;

        if ($value / $notes[$i] != 0) {
            $total = $total + ($value / $notes[$i]);
            echo "total " . $total . "\n";
            echo $notes[$i] . " is notes " . $value / $notes[$i];
            $value = $value % $notes[$i];

        }
        $i++;
        if ($value == 0) {
            echo "Total notes :: " . $total . "\n";
            return;
        }
        self::note($value);
    }

    public static function  mergesort($numlist)
    {
        if(count($numlist) == 1 ) return $numlist;
     
        $mid = count($numlist) / 2;
        $left = array_slice($numlist, 0, $mid);
        $right = array_slice($numlist, $mid);
     
        $left = Utility::mergesort($left);
        $right = Utility::mergesort($right);
         
        return Utility::merge($left, $right);
    }
     
    function merge($left, $right)
    {
        $result=array();
        $leftIndex=0;
        $rightIndex=0;
     
        while($leftIndex<count($left) && $rightIndex<count($right))
        {
            if($left[$leftIndex]>$right[$rightIndex])
            {
     
                $result[]=$right[$rightIndex];
                $rightIndex++;
            }
            else
            {
                $result[]=$left[$leftIndex];
                $leftIndex++;
            }
        }
        while($leftIndex<count($left))
        {
            $result[]=$left[$leftIndex];
            $leftIndex++;
        }
        while($rightIndex<count($right))
        {
            $result[]=$right[$rightIndex];
            $rightIndex++;
        }
        return $result;
    }
//function to call day of week
    public static function dayOfWeek( $d,$m,$y)
	{
		echo $d.$m.$y;
        $y0;
        $x;
        $m0;
        $d0;
		
		$y0=($y-(14-$m))/12;
		$x=(($y0)+(($y0)/4))- ((($y0)/100)+((($y0)/400)));
        $m0=(($m+12)*((14-$m)/12))-2;
        $d0=($d+$x+31*($m0)/12)%7;		
		return $d0;
		
		
	}


    public static function binary1($num)
    {
        
        $result=((($num & 0x0F) << 4 )| (($num & 0xF0) >> 4)); 
        $num1=decbin($result);
        echo "conversion of ".$num." After Swapping nibbles is ".$num1." in binary \n";
    }





}?>