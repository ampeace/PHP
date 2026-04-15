<?php
// Create an indexed array (numeric keys start from 0 automatically)
$fruits = array("Apple", "Banana", "Mango", "Orange");

// You can also use short array syntax (recommended in modern PHP)
$colors = ["Red", "Green", "Blue"];

// Access elements using index (0-based index)
echo $fruits[0]; // Output: Apple
echo "<br>";
echo $fruits[2]; // Output: Mango

echo "<br>";

// Modify an element in the array
$fruits[1] = "Grapes"; // Replaces Banana with Grapes

// Add a new element at the end of array
$fruits[] = "Pineapple";

echo "<br>";

// Loop through array using for loop
for ($i = 0; $i < count($fruits); $i++) {
    // count($fruits) gives total number of elements
    echo "Fruit at index $i: " . $fruits[$i] . "<br>";
}

echo "<br>";

// Loop using foreach (best and simple way)
foreach ($colors as $index => $value) {
    // $index = position, $value = actual element
    echo "Index: $index, Color: $value <br>";
}
?>