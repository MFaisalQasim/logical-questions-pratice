<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<body> 
<?php
// function isPalindrome($str) {
//     $clearStr = strtolower(str_replace(" ", "", $str));

//     $reversedStr = strrev($clearStr);

//     return $reversedStr == $clearStr;
// }
// echo isPalindrome('123');

// // Test cases
// echo isPalindrome("level"); // Should print: true
// echo isPalindrome("Hello"); // Should print: false
// echo isPalindrome("A man a plan a canal Panama"); // Should print: true
// function generateFibonacci($numTerms) {

//     $fibonacci = [];

//     if ($numTerms >= 1) {
//         $fibonacci[] = 0;
//     }
//     if ($numTerms >= 2) {
//         $fibonacci[] = 1;
//     }

//     for ($i=2; $i <=$numTerms-2; $i++) {
//         $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
//     }
//     echo implode("\n", $fibonacci);
// }

// function generateFibonacci($numTerms, $first = 0, $second = 1 , $count = 0) {
//     if ($numTerms > $count) {
//         echo '<br>' . $first;
//         generateFibonacci($numTerms, $second, $first + $second, $count + 1);
//     }
// }

// // Test case
// generateFibonacci(10); // Should print: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34
// function isPrime($number) {
//     return $number%2;
// }

// // Test cases
// echo isPrime(5); // Should print: true
// echo isPrime(10); // Should print: false
// echo isPrime(17); // Should print: true

// function calculateFactorial($n) {
//     if ($n == 0) {
//         return 1 . "(since 0! is defined as 1)  <br>";
//     }
//     for ($i=$n; $i>1; $i--) { 
//         $n*=($i-1);
//     }
//     return $n . " <br>";
// }

// // Test cases
// echo calculateFactorial(5); // Should print: 120 (since 5! = 5 * 4 * 3 * 2 * 1)
// echo calculateFactorial(0); // Should print: 1 (since 0! is defined as 1)

// function manipulateArray($arr) {
//     echo " <br>";
//     $sum = array_sum($arr);
//     echo $sum. " <br>";

//     $average = $sum / count($arr);
//     echo $average. " <br>";

//     $reversed = array_reverse($arr);
//     echo implode($reversed). " <br>";
// }

// // Test case
// $array = [1, 2, 3, 4, 5];
// manipulateArray($array);
// // Should print:
// // Sum: 15
// // Average: 3
// // Reversed array: 5, 4, 3, 2, 1

// function removeDuplicates($arr) {
//     return array_keys(array_flip($arr));
// }

// // Test case
// $array = [1, 2, 3, 2, 4, 5, 1, 6];
// print_r(removeDuplicates($array));
// Should print: Array ( [0] => 1 [1] => 2 [2] => 3 [4] => 4 [5] => 5 [7] => 6 )

// Zahid's Questions
// Table 20
// using for-loop

// $table = 20;

// for ($i=1; $i <= 10 ; $i++) { 
//     echo( $table . 'X' . $i .'='. $i*$table);
//      `<br>`;
//      '<br>';
//     echo (`<br>`);
// }

// swape variables value without use of third variable
// $a = 20;
// $b = 10;
// function swipeTwoVar($a, $b){
//     $a = $a + $b;
//     $b = $a - $b;
//     $a = $a - $b;
// }

// $x = 20
// $y = 10;
// swipeTwoVar($x, $y)

// array sort without use of any builtin function
// Original Array: 64, 34, 25, 12, 22, 11, 90
// Sorted Array: 11, 12, 22, 25, 34, 64, 90

// $arr_org = [64, 34, 25, 12, 22, 11, 90];
// echo "Original Array: " . implode(', ', $arr_org) . PHP_EOL;

// function customSort(&$arr) {
//     $n = count($arr);
//     for ($j=0; $j < $n -1; $j++) {
//         for ($i=0; $i < $n-$j-1; $i++) {
//             if ($arr[$i] > $arr[$i+1]) {
//                 $temp = $arr[$i];
//                 $arr[$i] =  $arr[$i + 1];
//                 $arr[$i + 1] = $temp;
//             }
//         }
//     }
// }

// // Call the customSort function
// customSort($arr_org);
// echo "<br/> Sorted Array: " . implode(', ', $arr_org) . PHP_EOL;
// echo "<hr/>";

// Fibonacci series is a sequence of numbers in which each number is the sum of the two preceding ones
// Fibonacci Series (first 10 numbers): 0, 1, 1, 2, 3, 5, 8, 13, 21, 34

// function fibonacciSeries($num) {
//     $arr = [];
//     $arr[] = 0;
//     $arr[] = 1;
//     for ($i=1; $i < $num-1; $i++) {
//         $arr[]=$arr[$i]+$arr[$i-1];
//     }
//     echo implode($arr);
// }

// function fibonacciSeries($num,$first=0,$second=1,$count=0) {
//     echo $first;
//     if ($num>$count) {
//         fibonacciSeries($num,$second,$first+$second,$count+1);
//     }
// }
// fibonacciSeries(10);
// echo '<br/>';
// fibonacciSeries(4);

// Original Given Array : 34, 3, 2, 45, 32, 12, 33
// Reverse Array : 33, 12, 32, 45, 2, 3, 34

// function reverseArray(&$arr)  {
//     $n = count($arr)-1;
//     $reverseArray=[];
//     for ($j=$n; $j >= 0; $j--) {
//         $reverseArray[] = $arr[$j];
//     }
//     return $reverseArray;
// }

// $myArray=[34, 3, 2, 45, 32, 12, 33];
// $reverseArray = reverseArray($myArray);
// echo "<br/> Sorted Array: " . implode(', ', $reverseArray) . PHP_EOL;

// function strReverseArray(&$arr)  {
//     $n = strlen($arr)-1;
//     $reverseArray='';
//     for ($a=$n; $a >= 0; $a--) {
//         $reverseArray.= $arr[$a];
//     }
//     return $reverseArray;
// }

// $myArray='my name is faisal';
// $reverseArray = strReverseArray($myArray);
// echo "<br/> Sorted Array: ".($reverseArray) . PHP_EOL;

// function rotateArray($arr, $positions) {
//         $n = count($arr);
//         $arr= array_merge(array_slice($arr, -$positions),array_slice($arr, 0, $n-$positions));
//         return $arr;
// }

// $array = [11, 12, 13, 14, 15];
// echo "<pre>";
// print_r(rotateArray($array, 3));
// // Should print: Array ( [0] => 4 [1] => 5 [2] => 1 [3] => 2 [4] => 3 )

// function areAnagrams($str1, $str2) {
//     $equal ='';
//     $n1 = strlen($str1)-1;
//     $n2 = strlen($str2)-1;
//     for ($i=0; $i < $n1; $i++) { 
//         for ($j=0; $j < $n2; $j++) { 
//             if ($str1[$i] == $str2[$j]) {
//                 $equal = 'true';
//             } 
//         }
//         if ($equal != 'true') {
//             $equal = 'false';
//             break;
//         }
//     }
//     return $equal;
// }

// function areAnagrams($str1, $str2) {
//     $cleanstr1 = strtolower(str_replace(' ', '', $str1));
//     $cleanstr2 = strtolower(str_replace(' ', '', $str2));

//     $sortStr1 = str_split($cleanstr1);
//     sort($sortStr1);
//     $sortStr2 = str_split($cleanstr2);
//     sort($sortStr2);
//     return ($sortStr1 == $sortStr2) ? 'true' : 'false' ;
// }

// // Test cases
// echo areAnagrams("listen", "silent"); // Should print: true
// echo areAnagrams("hello", "world"); // Should print: false

// function isPangram($sentence) {
//     $sen = strtolower(str_replace(' ', '', $sentence));
//     $uniqueValues  = array_unique(str_split($sen));
//     return (count($uniqueValues) == 26) ? 'true' : 'false' ;
// }

// // Test cases
// echo isPangram("The quick brown fox jumps over the lazy dog"); // Should print: true
// echo isPangram("Hello World"); // Should print: false


?>

</body>
</html>