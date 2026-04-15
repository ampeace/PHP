<?php
// Basic for loop

// syntax: for(initialization; condition; increment/decrement)

for ($i = 1; $i <= 5; $i++) {
    // runs from 1 to 5
    
    echo "Number: $i <br>";
}

echo "<br>";

// Example: print array using for loop
$colors = ["Red", "Green", "Blue"];

for ($i = 0; $i < count($colors); $i++) {
    // count($colors) gives total elements
    
    echo $colors[$i] . "<br>";
}

echo "<br>";

// Example: reverse loop
for ($i = 5; $i >= 1; $i--) {
    // decreasing loop
    
    echo $i . " ";
}

echo "<br><br>";

// Example: sum of numbers from 1 to 5
$sum = 0;

for ($i = 1; $i <= 5; $i++) {
    $sum += $i; // add each number
}

echo "Sum = " . $sum; // Output: 15

echo "<br>";

// Example: nested for loop (pattern)
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>