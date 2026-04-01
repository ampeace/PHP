// Cretae a registration form with the following fields: Name, Email, Phone number, Date of Birth, Gender and a Register button. Validate the form to ensure that all fields are filled out, the email is in a valid format, and the password and confirm password fields match. Display appropriate error messages for any validation failures.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h1> Registration From</h1>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <br><br>
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>
        <br><br>
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
        <br><br>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <br><br>

        <button type="submit">Register</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $phone = $_POST["phone"];
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];

        $errors = [];

        if (empty($name)) {
            $errors[] = "Name is required.";
        }

        if (empty($email)) {
            $errors[] = "Email is required.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }

        if (empty($password)) {
            $errors[] = "Password is required.";
        }

        if (empty($confirm_password)) {
            $errors[] = "Confirm Password is required.";
        }

        if ($password !== $confirm_password) {
            $errors[] = "Passwords do not match.";
        }

        if (empty($phone)) {
            $errors[] = "Phone number is required.";
        }

        if (empty($dob)) {
            $errors[] = "Date of birth is required.";
        }

        if (empty($gender)) {
            $errors[] = "Gender is required.";
        }
        
        if (empty($errors)) {
            echo "<p>Registration successful!</p>";
        } else {
            foreach ($errors as $error) {
                echo "<p style='color: red;'>$error</p>";
            }
        }
    }
    ?>