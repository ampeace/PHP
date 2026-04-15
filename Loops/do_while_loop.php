<?php
// Basic do-while loop

$i = 1; // initialization

do {
    // This block runs at least once (even if condition is false)
    echo "Number: $i <br>";
    
    $i++; // increment
} while ($i <= 5); // condition checked AFTER execution

echo "<br>";

// Example: print array using do-while
$colors = ["Red", "Green", "Blue"];

$index = 0;

do {
    echo $colors[$index] . "<br>";
    $index++;
} while ($index < count($colors));

echo "<br>";

// Example: condition false but still runs once
$x = 10;

do {
    echo "This will run once even if condition is false <br>";
} while ($x < 5); // false condition

echo "<br>";

// Example: sum of numbers from 1 to 5
$num = 1;
$sum = 0;

do {
    $sum += $num; // add number
    $num++;
} while ($num <= 5);

echo "Sum = " . $sum; // Output: 15
?>