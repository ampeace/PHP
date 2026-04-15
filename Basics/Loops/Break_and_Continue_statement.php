<?php
// BREAK statement
// It is used to EXIT the loop immediately

for ($i = 1; $i <= 5; $i++) {
    
    if ($i == 3) {
        break; // loop stops when i = 3
    }
    
    echo $i . " "; // Output: 1 2
}

echo "<br><br>";


// CONTINUE statement
// It is used to SKIP current iteration and move to next

for ($i = 1; $i <= 5; $i++) {
    
    if ($i == 3) {
        continue; // skip when i = 3
    }
    
    echo $i . " "; // Output: 1 2 4 5
}

echo "<br><br>";


// Example with while loop
$i = 1;

while ($i <= 5) {
    
    if ($i == 2) {
        $i++; // important (avoid infinite loop)
        continue; // skip 2
    }
    
    echo $i . " "; // Output: 1 3 4 5
    $i++;
}

echo "<br><br>";


// Example: break in foreach
$colors = ["Red", "Green", "Blue"];

foreach ($colors as $color) {
    
    if ($color == "Green") {
        break; // stop loop when Green found
    }
    
    echo $color . " "; // Output: Red
}

echo "<br><br>";


// Example: continue in foreach
foreach ($colors as $color) {
    
    if ($color == "Green") {
        continue; // skip Green
    }
    
    echo $color . " "; // Output: Red Blue
}
?>