<?php
session_start();
	require_once('connect.php');
$mail=$_SESSION['login_user'];
	$sql = "SELECT * FROM `users` WHERE email ='$mail'";
	$result = mysqli_query($conn,$sql);

	$rw = mysqli_fetch_array($result);

	$fn =$rw['fullname'];
	$mn =$rw['username'];
	$em =$rw['email'];
	

	if (isset($_POST['Register'])) {

	$fn = $_POST['fname'];
	$un = $_POST['uname'];
	$em = $_POST['email'];
  	$ut= $_POST['usertype'];
	
	$sql = "UPDATE `users` SET `fullname`='$fn',`username`='$un',`email`='$em',`usertype`='$ut' WHERE id='$aa'";
	if (mysqli_query($conn,$sql)) {
	header("location:tenants_lists.php");
}else{
	echo "Ain't Register";
}
}

?>
<link rel="stylesheet" type="text/css" href="rooms.css">
<body><?php include 'topbar.php'?>
<div>
<form method="POST" id="myform">
	Full Name <input type="text" name="fname" value="<?php echo$fn;?>"><br><br>
Username <input type="text" name="uname" value="<?php echo$mn;?>"><br><br>
Email <input type="email" name="email" class="imp" value="<?php echo$em;?>"><br><br>
 <select id="usertype" name="usertype" placeholder="usertype" class="text">
      <option>User Type</option>
      <option value="tenant">TENANT</option>
      <option value="landlord">LANDLORD</option>
    </select><br><br>

 <input type="submit" name="Register" value="update" class="button">
 </form>
 </div
 <?php include 'footer.php'?>

</body></html>