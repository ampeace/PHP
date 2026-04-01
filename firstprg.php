<?php
// PHP inline processing
$name = "";
$email = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // get values safely
    $name  = htmlspecialchars($_POST["name"] ?? "");
    $email = htmlspecialchars($_POST["email"] ?? "");

    // simple validation
    if ($name == "" || $email == "") {
        $message = "Please fill all fields.";
    } else {
        $message = "Form submitted successfully. Welcome, " . $name . "!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forms</title>
</head>
<body>

<h2>Simple PHP Form</h2>

<form method="post" action="">

    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $name; ?>">
    <br><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $email; ?>">
    <br><br>

    <input type="submit" value="Submit">

</form>

<p><?php echo $message; ?></p>

</body>
</html>
