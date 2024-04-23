
	<?php
	session_start();
	if (isset($_POST['login'])) {
		require_once('connect.php');
		$un = $_POST['uname'];
		$pw = $_POST['pass'];

		$find = "SELECT * FROM users WHERE username = '$un'";
		$run = mysqli_query($conn,$find);

		if ($run) {
			$rows = mysqli_num_rows($run);
			if ($rows==1) {
				$data = mysqli_fetch_array($run);
				$pass  = $data['password'];
				$iscorrect = password_verify($pw,$pass);
					if ($iscorrect==TRUE) {
					 $_SESSION['login_user']=$un;
					header("location:Home.php?m=$n");
					die();
				}else{
					$error = "Wrong Password Username";           
				}
				}
			}
		}

	?>
	<html>
	<style type="text/css">
		#main{
			border: 1px solid black;
		}
	</style>
<body>
	<div id="main">
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
		
		Username <input type="text" name="uname"><br><br>
		Password <input type="Password" name="pass"><br><br>
		
   	   Reset
   	   Password <input type="submit" name="login" value="Login">
	</form>
<div>
	<?php
	if (isset($error)) {
		echo "<style='color:red'>$error";
	}
	?>
</div>
</div>
</body>
</html>