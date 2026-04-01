<!DOCTYPE html>
<html>
    <head>
        <title>Greater number</title>
</head>
<body>
    <h1>Find Greater number among three number </h1>
    <form method="post" action="">
        <lable for="num1">number 1:</lable>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Number 2:</label>
        <input type="number" id ="num2" name ="num2" required>
        <br><br>
        <lable for="num3">Number 3:</lable>
        <input type="number" id="num" name="num3" required>
        <br><br>
        <button type="submit">Find Greater</button>
</form>
<?php
if ($_SERVER['REQUEST METHOD']==POST)
{
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $num3=$_POST['num3'];
    if($num1>$num2 && $num1>$num3)
    {
        echo "<h2>Result: $num1 is greater than $num2 and $num3</h2>";
    }
    elseif($num2>$num1 && $num2>$num3)
    {
        echo "<h2>Result: $num2 is greater than $num1 and $num3</h2>";
    }
    else
    {
        echo "<h2>Result: $num3 is greater than $num1 and $num2</h2>";
    }
}
    