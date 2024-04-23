<?php
require_once('connect.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST; // Retrieve form data

    // Check if all required fields are provided
    if (isset($data['fname'], $data['uname'], $data['email'], $data['pass'], $data['cpass'])) {
        $fn = mysqli_real_escape_string($conn, $data['fname']);
        $un = mysqli_real_escape_string($conn, $data['uname']);
        $pass = mysqli_real_escape_string($conn, $data['pass']);
        $em = mysqli_real_escape_string($conn, $data['email']);
        $cpass = mysqli_real_escape_string($conn, $data['cpass']);

        // Check if passwords match
        if ($pass !== $cpass) {
            echo json_encode("Password doesn't match");
            exit;
        }

        // Generate a random 4-digit number
        $random = rand(1000, 9999);
        $password = password_hash($pass,PASSWORD_DEFAULT);

        // Prepare SQL statement using prepared statement to prevent SQL injection
        $sql = "INSERT INTO users(Firstname, Secondname, email, Password) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            // Bind parameters to the prepared statement
            mysqli_stmt_bind_param($stmt, 'ssss', $fn, $un, $em, $password);

            // Execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Registration successful
               
               header("location:index.php?");
                echo json_encode("success");
            } else {
                // Registration failed
                echo json_encode("Registration failed");
            }

            // Close the prepared statement
            mysqli_stmt_close($stmt);
        } else {
            // SQL statement preparation failed
            echo json_encode("SQL statement preparation failed: " . mysqli_error($conn));
        }
    } else {
        // Required fields not provided
        echo json_encode("Missing fields");
    }
}

// Close the database connection
mysqli_close($conn);
?>


<<!DOCTYPE html>
<html>
<head>
    <title>HRMS - Create Account</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div id="main">
        <center>
            <h1>HRMS</h1>
            <img id="home" src="house.png" width="100" height="100"><br>
            <p><b>CREATE ACCOUNT</b></p>
            <form method="POST" action="register.php" name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data">
                <input type="text" name="fname" class="text" placeholder="Full Name"><br><br>
                <input type="text" name="uname" class="text" placeholder="Username"><br><br>
                <input type="email" name="email" class="text" placeholder="Email"><br><br>
                <input type="password" name="pass" class="text" placeholder="Password"><br><br>
                <input type="password" name="cpass" class="text" placeholder="Confirm Password"><br><br>
                <input type="submit" name="Register" value="Register" class="button">
            </form>
            <a href="index.php">Already have an account? Log in here.</a>
        </center>
    </div>

    <script type="text/javascript">
    function validateForm() {
        var a = document.forms["myForm"]["fname"].value;
        var b = document.forms["myForm"]["uname"].value;
        var c = document.forms["myForm"]["email"].value;
        var d = document.forms["myForm"]["pass"].value;
        var e = document.forms["myForm"]["cpass"].value;

        if (a == "" || b == "" || c == "" || d == "" || e == "") {
            alert("Please fill out all fields");
            return false;
        }

        if (d !== e) {
            alert("Password and Confirm Password must match");
            return false;
        }

        return true;
    }
    </script>
</body>
</html>
