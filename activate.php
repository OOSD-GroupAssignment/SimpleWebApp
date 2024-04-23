<?php
session_start();
$mail=$_SESSION['mail'];
$rr= $_SESSION['token'];

require_once('connect.php');

if (isset($_POST['submit'])) {
	$kiki=$_POST['token'];

	if ($kiki!= $rr) {
		echo "invalid token";
	} else{
		$sql= "UPDATE `users` SET `status`='active' where email='$mail'";
		if (mysqli_query($conn,$sql)) {
			header("location:index.php");
		}
		
	}
}



?>

<link rel="stylesheet" type="text/css" href="login.css">

<body>
	<div id="main">
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
		<center>
			<h1 style="text-align-last: center;">HRMS</h1>
  			<img id="home" src="house.png" width="100" height="100"><br><br>
		<p><b>Thank you for registering</b></p><br>
		<p><b>your account is current inactive, please activate your account with token sent via your email </b></p><br>
		<input type="number" name="token" class="text" placeholder="Enter your token" required><br><br>
		
   	   <input type="submit" name="submit" value="Activate" class="button"><br><br>

   	   </center>
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