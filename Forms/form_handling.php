<?php
// Initialize variables to store user input and messages
$name = "";
$email = "";
$message = "";

// Check if the form is submitted using POST method
if (isset($_POST['submit'])) {
    
    // Get form data and sanitize it using htmlspecialchars()
    // This prevents XSS (cross-site scripting attacks)
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    
    // Validate input fields (check if empty)
    if (empty($name) || empty($email)) {
        $message = "All fields are required!";
    } else {
        // If validation passes
        $message = "Form submitted successfully!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Handling</title>
</head>
<body>

<h2>Simple Form</h2>

<?php
// Display message if any (error or success)
if ($message != "") {
    echo "<p>$message</p>";
}
?>

<!-- HTML Form starts here -->
<form method="post" action="">
    
    <!-- Name input field -->
    Name:
    <!-- value attribute keeps old input after form submission -->
    <input type="text" name="name" value="<?php echo $name; ?>">
    <br><br>
    
    <!-- Email input field -->
    Email:
    <input type="email" name="email" value="<?php echo $email; ?>">
    <br><br>
    
    <!-- Submit button -->
    <input type="submit" name="submit" value="Submit">

</form>

<?php
// If form submitted successfully, display entered data
if ($message == "Form submitted successfully!") {
    
    echo "<h3>Entered Details:</h3>";
    
    // Print user input
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
?>

</body>
</html>