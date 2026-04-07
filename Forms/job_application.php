<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $cover_letter = $_POST['cover_letter'];

    // File Upload Handling
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = basename($_FILES["resume"]["name"]);
    $targetFile = $targetDir . $fileName;

    if (move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFile)) {
        $message = "Application submitted successfully!";
    } else {
        $message = "Error uploading resume.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Job Application Form</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
        }
        .container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }
        button {
            background: #28a745;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
        .msg {
            color: green;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Job Application</h2>

    <?php if ($message != "") echo "<p class='msg'>$message</p>"; ?>

    <form method="POST" enctype="multipart/form-data">
        <label>Full Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Phone</label>
        <input type="text" name="phone" required>

        <label>Position</label>
        <select name="position">
            <option>Developer</option>
            <option>Designer</option>
            <option>Manager</option>
        </select>

        <label>Resume</label>
        <input type="file" name="resume" required>

        <label>Cover Letter</label>
        <textarea name="cover_letter"></textarea>

        <button type="submit">Apply</button>
    </form>
</div>

</body>
</html>