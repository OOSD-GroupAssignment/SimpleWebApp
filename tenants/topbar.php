
<link rel="stylesheet" type="text/css" href="home.css">

<body><?php

$mail=$_SESSION['login_user'];
require_once('connect.php');

$select="SELECT * FROM users WHERE email='$mail'";
$qry=mysqli_query($conn,$select);
$fet=mysqli_fetch_array($qry);

$picha="logo.png";

	echo "<body> <center>
	<div id='main'>
	<div class='header'>
  <h1 style='text-align-last: center;'>HOUSE RENTING MANAGEMENT SYSTEM</h1>
  <div align='center'><img id='home' src='house.png' width='100' height='100'></div>
	</div>
<ul>
  <li><a href='home.php'>Home</a></li>
  <li><a href='rooms_list.php'>Rooms</a></li>
  <li><a href='#news'>About Us</a></li>
  <li class='dropdown' style='float:right' >
    <a href='javascript:void(0)' class='dropbtn'><img id='home' src='../picha/$picha' width='40' height='40'></a>
    <div class='dropdown-content' >
      <a href='own_update.php' class='tooltip'>UPDATE
  <span class='tooltiptext'>UPDATE INFORMATION</span></a>
      <a href='../logout.php' class='tooltip'>LOG OUT<span class='tooltiptext'>LOG OUT</span></a>
    </div>
  </li>
</ul>"; ?>

