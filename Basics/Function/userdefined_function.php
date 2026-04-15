<?php
// Basic function (no parameter, no return)
function greet() {
    // function definition
    echo "Hello, Welcome!<br>";
}

// function call
greet();

echo "<br>";


// Function with parameters
function add($a, $b) {
    // takes input values
    
    $sum = $a + $b;
    echo "Sum = " . $sum . "<br>";
}

// calling function with arguments
add(10, 20);

echo "<br>";


// Function with return value
function multiply($x, $y) {
    return $x * $y; // returns result
}

$result = multiply(5, 4);
echo "Multiplication = " . $result;

echo "<br><br>";


// Default parameter value
function sayHello($name = "Guest") {
    // if no value passed, "Guest" is used
    
    echo "Hello, $name <br>";
}

sayHello("Rahul");
sayHello(); // uses default value

echo "<br>";


// Function with array parameter
function printArray($arr) {
    foreach ($arr as $value) {
        echo $value . " ";
    }
    echo "<br>";
}

$numbers = [1, 2, 3, 4];
printArray($numbers);

echo "<br>";


// Recursive function (function calling itself)
function factorial($n) {
    if ($n == 1) {
        return 1; // base case
    }
    
    return $n * factorial($n - 1);
}

echo "Factorial = " . factorial(5); // 120
?>