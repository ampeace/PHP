<?php
// Create an array
$numbers = [10, 20, 30, 40, 50];

// count() → returns number of elements
echo count($numbers); // 5

echo "<br>";

// array_push() → add element at end
array_push($numbers, 60);
print_r($numbers); // [10,20,30,40,50,60]

echo "<br>";

// array_pop() → remove last element
array_pop($numbers);
print_r($numbers); // [10,20,30,40,50]

echo "<br>";

// array_shift() → remove first element
array_shift($numbers);
print_r($numbers); // [20,30,40,50]

echo "<br>";

// array_unshift() → add element at beginning
array_unshift($numbers, 5);
print_r($numbers); // [5,20,30,40,50]

echo "<br>";

// in_array() → check if value exists
if (in_array(30, $numbers)) {
    echo "30 exists in array";
}

echo "<br>";

// array_search() → find index of element
echo array_search(40, $numbers); // returns index

echo "<br>";

// sort() → sort array ascending
sort($numbers);
print_r($numbers);

echo "<br>";

// rsort() → sort array descending
rsort($numbers);
print_r($numbers);

echo "<br>";

// array_merge() → combine arrays
$arr1 = [1, 2];
$arr2 = [3, 4];
$result = array_merge($arr1, $arr2);
print_r($result); // [1,2,3,4]

echo "<br>";

// array_slice() → get part of array
$slice = array_slice($numbers, 1, 2); 
// start from index 1, take 2 elements
print_r($slice);

echo "<br>";

// array_reverse() → reverse array
print_r(array_reverse($numbers));

echo "<br>";

// implode() → convert array to string
$str = implode(", ", $numbers);
echo $str; // "50, 40, 30..."

echo "<br>";

// explode() → convert string to array
$text = "apple,banana,mango";
$arr = explode(",", $text);
print_r($arr);
?>