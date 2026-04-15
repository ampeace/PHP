<?php
// Initialize variables for data and error messages
$name = $email = $gender = "";
$nameErr = $emailErr = $genderErr = "";
$success = "";

// Check if form is submitted
if (isset($_POST['submit'])) {

    // -------- NAME FIELD --------
    
    // Check if name is empty
    if (empty($_POST['name'])) {
        $nameErr = "Name is required";
    } else {
        // Sanitize input
        $name = htmlspecialchars($_POST['name']);
    }

    // -------- EMAIL FIELD --------
    
    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars($_POST['email']);
    }

    // -------- GENDER FIELD --------
    
    if (empty($_POST['gender'])) {
        $genderErr = "Gender is required";
    } else {
        $gender = htmlspecialchars($_POST['gender']);
    }

    // -------- FINAL CHECK --------
    
    // If all required fields are filled
    if (empty($nameErr) && empty($emailErr) && empty($genderErr)) {
        $success = "All required fields are filled successfully!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Required Fields Form</title>
    <style>
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>

<h2>Required Fields Example</h2>

<!-- Show success message -->
<?php
if ($success != "") {
    echo "<p class='success'>$success</p>";
}
?>

<form method="post" action="">
    
    <!-- Name Field -->
    Name:
    <input type="text" name="name" value="<?php echo $name; ?>">
    <!-- Display error -->
    <span class="error"><?php echo $nameErr; ?></span>
    <br><br>

    <!-- Email Field -->
    Email:
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $emailErr; ?></span>
    <br><br>

    <!-- Gender Field (Radio Buttons) -->
    Gender:
    <input type="radio" name="gender" value="Male"
        <?php if ($gender == "Male") echo "checked"; ?>> Male

    <input type="radio" name="gender" value="Female"
        <?php if ($gender == "Female") echo "checked"; ?>> Female

    <span class="error"><?php echo $genderErr; ?></span>
    <br><br>

    <!-- Submit Button -->
    <input type="submit" name="submit" value="Submit">

</form>

<?php
// Display data only if all required fields are filled
if ($success != "") {
    echo "<h3>User Data:</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Gender: $gender";
}
?>

</body>
</html>