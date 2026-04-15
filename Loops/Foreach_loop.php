<?php
// foreach loop is mainly used for arrays

// Example 1: Indexed array
$colors = ["Red", "Green", "Blue"];

foreach ($colors as $value) {
    // $value stores each element of array
    
    echo $value . "<br>";
}

echo "<br>";

// Example 2: Indexed array with index
foreach ($colors as $index => $value) {
    // $index = position, $value = element
    
    echo "Index: $index, Value: $value <br>";
}

echo "<br>";

// Example 3: Associative array
$student = [
    "name" => "Rahul",
    "age" => 20,
    "course" => "BCA"
];

foreach ($student as $key => $value) {
    // $key = field name, $value = data
    
    echo "$key : $value <br>";
}

echo "<br>";

// Example 4: Modify array using reference
$numbers = [10, 20, 30];

foreach ($numbers as &$value) {
    // & allows modifying original array
    
    $value = $value * 2;
}

// Print updated array
print_r($numbers); // [20, 40, 60]
?>