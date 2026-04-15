<?php
// Basic while loop

$i = 1; // initialization

while ($i <= 5) { 
    // condition is checked before each iteration
    
    echo "Number: $i <br>";
    
    $i++; // increment (important, otherwise infinite loop)
}

echo "<br>";

// Example: print elements of an array using while loop
$colors = ["Red", "Green", "Blue"];

$index = 0; // start from first element

while ($index < count($colors)) {
    // loop runs until index is less than array size
    
    echo $colors[$index] . "<br>";
    
    $index++; // move to next index
}

echo "<br>";

// Infinite loop example ( be careful)
// Uncomment to test
/*
$x = 1;
while ($x <= 5) {
    echo $x;
    // Missing increment → loop never ends
}
*/

echo "<br>";

// Example: sum of numbers from 1 to 5
$num = 1;
$sum = 0;

while ($num <= 5) {
    $sum += $num; // add current number to sum
    $num++; // increment
}

echo "Sum = " . $sum; // Output: 15
?>