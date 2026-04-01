//given an array check weather a specified number is present or not and print its postion.
<?php
$arr = array(1, 2, 3, 4, 5);
$number = 3;
if (in_array($number, $arr)) {
    $position = array_search($number, $arr);
    echo "Number is present in the array at position: " . $position;
} else {
    echo "Number is not present in the array.";
}
?>