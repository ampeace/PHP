<?php
// Initialize variables for form data and error messages
$name = $email = "";
$nameErr = $emailErr = "";
$success = "";

// Check if form is submitted
if (isset($_POST['submit'])) {

    // -------- NAME VALIDATION --------
    
    // Check if name is empty
    if (empty($_POST['name'])) {
        $nameErr = "Name is required";
    } else {
        // Sanitize input (remove harmful characters)
        $name = htmlspecialchars($_POST['name']);
        
        // Check if name contains only letters and spaces
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and spaces allowed";
        }
    }

    // -------- EMAIL VALIDATION --------
    
    // Check if email is empty
    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
    } else {
        // Sanitize email
        $email = htmlspecialchars($_POST['email']);
        
        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // -------- FINAL CHECK --------
    
    // If no errors, show success message
    if (empty($nameErr) && empty($emailErr)) {
        $success = "Form submitted successfully!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation</title>
    <style>
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>

<h2>Form Validation</h2>

<!-- Show success message -->
<?php if ($success != "") echo "<p class='success'>$success</p>"; ?>

<form method="post" action="">
    
    <!-- Name Field -->
    Name:
    <input type="text" name="name" value="<?php echo $name; ?>">
    <!-- Show error message -->
    <span class="error"><?php echo $nameErr; ?></span>
    <br><br>

    <!-- Email Field -->
    Email:
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $emailErr; ?></span>
    <br><br>

    <!-- Submit Button -->
    <input type="submit" name="submit" value="Submit">

</form>

<?php
// Display data if validation passed
if ($success != "") {
    echo "<h3>Valid Data:</h3>";
    echo "Name: $name <br>";
    echo "Email: $email";
}
?>

</body>
</html>