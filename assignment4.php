<?php
// 1. Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
// 1. Answer :

function sortStringsByLength($arr) {
    function compareLength($a, $b) {
        if (strlen($a) == strlen($b)) {
            return 0;
        }
        return (strlen($a) < strlen($b)) ? -1 : 1;
    }

    usort($arr, 'compareLength');

    return $arr;
}

// Example :

$words = array('apple', 'banana', 'pear', 'grape', 'orange');
$sortedWords = sortStringsByLength($words);
print_r($sortedWords); 
// output: Array ( [0] => pear [1] => grape [2] => apple [3] => banana [4] => orange )

//===============================================================================

// 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
//2. Answer :

function concatStringsFromEnd($str1, $str2) {
    $len1 = strlen($str1);

    $len2 = strlen($str2);

    $maxLen = $len1 + $len2;

    $concatenated = '';

    for ($i = 0; $i < $maxLen; $i++) {
        if ($i < $len1) {
            $concatenated .= $str1[$i];
        }

        if ($i >= $len1 && $i < $maxLen) {
            $concatenated .= $str2[$i - $len1];
        }
    }

    return $concatenated;
}

$str1 = 'hello';
$str2 = 'world';
$concatenated = concatStringsFromEnd($str1, $str2);
echo $concatenated; // output: helloworld

//===========================================================================

// 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
// 3. Answer:
  function removeFirstAndLast($arr) {
    array_shift($arr); 
    array_pop($arr); 
    return $arr;
}

// Example :

    $original = array('apple', 'banana', 'orange', 'grape');
    $newArray = removeFirstAndLast($original);
    print_r($newArray); 
    // output: Array ( [0] => banana [1] => orange )

//===========================================================================

//4.Write a PHP function to check if a string contains only letters and whitespace.
//4. Answer :

function containsOnlyLettersAndWhitespace($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str);
  }
 
  // Example :
$str1 = "Hello World";
$str2 = "Hello World!";
$str3 = "123";
$str4 = "This is a test string.";

var_dump(containsOnlyLettersAndWhitespace($str1)); // bool(true)
var_dump(containsOnlyLettersAndWhitespace($str2)); // bool(false)
var_dump(containsOnlyLettersAndWhitespace($str3)); // bool(false)
var_dump(containsOnlyLettersAndWhitespace($str4)); // bool(true)

//===========================================================================

//5.Write a PHP function to find the second largest number in an array of numbers.
//5. Answer:

function findSecondLargest($arr) {
    if (count($arr) < 2) {
        return null;
    }

    $largest = $arr[0];
    $secondLargest = null;

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $largest) {
            $secondLargest = $largest;
            $largest = $arr[$i];
        } else if ($arr[$i] != $largest && ($secondLargest === null || $arr[$i] > $secondLargest)) {
            $secondLargest = $arr[$i];
        }
    }

    return $secondLargest;
}
// Example :
$numbers = array(1, 5, 2, 8, 3);
$secondLargest = findSecondLargest($numbers);
echo "The second largest number is: " . $secondLargest; // output: The second largest number is: 5 



?>