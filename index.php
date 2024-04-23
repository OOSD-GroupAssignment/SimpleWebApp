<?php
session_start();

// Check if the login form is submitted
if (isset($_POST['login'])) {
    require_once('connect.php');
    
    // Get username and password from the form
    $un = $_POST['uname'];
    $pw = $_POST['pass'];

    // Fetch user data from the database based on the provided email (username)
    $find = "SELECT * FROM users WHERE email = '$un' ";
    $run = mysqli_query($conn, $find);

    if ($run) {
        $rows = mysqli_num_rows($run);
        if ($rows == 1) {
            $data = mysqli_fetch_array($run);
            $hashed_password = $data['password'];

            // Verify the provided password with the hashed password from the database
            if (password_verify($pw, $hashed_password)) {
                // Password is correct, set session and redirect to the home page
                $_SESSION['login_user'] = $un;
                header("location: tenants/Home.php");
                exit();
            } else {
                // Password is incorrect
                $error = "Wrong Password or Username";
            }
        } else {
            // User with the provided email (username) not found
            $error = "User not found";
        }
    } else {
        // Error in executing the SQL query
        $error = "Database error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - HRMS</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div id="main">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <center>
            <h1>HRMS</h1>
            <img id="home" src="house.png" width="100" height="100"><br><br>
            <input type="email" name="uname" placeholder="Username" class="text"><br><br>
            <input type="password" name="pass" placeholder="Password" class="text"><br><br>
            <input type="submit" name="login" value="Log In" class="button"><br><br>
            <a href="register.php">Create Account</a><br><br>
            <a href="reset_password.php">Forgot Password</a>
        </center>
    </form>
    <div>
        <?php
        if (isset($error)) {
            echo "<p style='color:red'>$error</p>";
        }
        ?>
    </div>
</div>
</body>
</html>
