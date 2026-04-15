<?php
// Create an associative array (key => value pairs)
$student = array(
    "name" => "Rahul",
    "age" => 20,
    "course" => "BCA"
);

// Short syntax (recommended)
$car = [
    "brand" => "Toyota",
    "model" => "Fortuner",
    "year" => 2022
];

// Access elements using keys instead of index
echo $student["name"]; // Output: Rahul
echo "<br>";
echo $student["course"]; // Output: BCA

echo "<br>";

// Modify a value
$student["age"] = 21; // Update age

// Add a new key-value pair
$student["city"] = "Delhi";

echo "<br>";

// Loop using foreach (best way for associative arrays)
foreach ($student as $key => $value) {
    // $key = field name, $value = actual data
    echo "$key : $value <br>";
}

echo "<br>";

// Check if a key exists
if (array_key_exists("name", $student)) {
    echo "Name key exists";
}

echo "<br>";

// Remove an element
unset($student["course"]); // Deletes 'course' key

// Print full array (for debugging)
print_r($student);
?>