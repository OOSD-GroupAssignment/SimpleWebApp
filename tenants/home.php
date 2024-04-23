<?php session_start();
$mail=$_SESSION['login_user'];
require_once('connect.php');

$select="SELECT * FROM users WHERE email='$mail'";
$qry=mysqli_query($conn,$select);
$fet=mysqli_fetch_array($qry);

$jina=$fet["Firstname"];

?>
<body><?php include 'topbar.php'?>
<div id="idk"><?php include 'leftbar.php'?></div>

<div id="left">
<h2>Welcome <?php echo $jina?> to HRMS Tenant portal</h2>
</div>
<div id="footer"><?php include "footer.php"?></div>