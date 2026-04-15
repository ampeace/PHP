<?php
// Create a multidimensional array (array of arrays)
$students = array(
    array("Rahul", 20, "BCA"),
    array("Amit", 22, "BBA"),
    array("Neha", 19, "BSc")
);

// Short syntax (recommended)
$marks = [
    ["Maths" => 80, "Science" => 85],
    ["Maths" => 75, "Science" => 90]
];

// Access elements (row index, column index)
echo $students[0][0]; // Rahul
echo "<br>";
echo $students[1][2]; // BBA

echo "<br>";

// Access associative multidimensional array
echo $marks[0]["Maths"]; // 80

echo "<br>";

// Modify value
$students[2][1] = 20; // Update Neha's age

// Add new row
$students[] = ["Priya", 21, "BCom"];

echo "<br>";

// Loop using nested for loop
for ($i = 0; $i < count($students); $i++) {
    for ($j = 0; $j < count($students[$i]); $j++) {
        // Access each element
        echo $students[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>";

// Loop using foreach (better and clean)
foreach ($students as $row) {
    foreach ($row as $value) {
        echo $value . " ";
    }
    echo "<br>";
}

echo "<br>";

// Multidimensional associative array (real-life example)
$employees = [
    ["name" => "Ravi", "salary" => 30000],
    ["name" => "Sita", "salary" => 35000]
];

// Access associative data
echo $employees[1]["name"]; // Sita

echo "<br>";

// Loop associative multidimensional array
foreach ($employees as $emp) {
    echo "Name: " . $emp["name"] . ", Salary: " . $emp["salary"] . "<br>";
}
?>