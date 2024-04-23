<?php
session_start();
	require_once('connect.php');
	$aa = $_GET['m'];
	$sql = "SELECT * FROM `rooms` WHERE id='$aa'";
	$result = mysqli_query($conn,$sql);

	$rw = mysqli_fetch_array($result);

	$fn =$rw['laname'];
	$mn =$rw['location'];
	$em =$rw['room_type'];
	$me =$rw['price'];
?>
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" type="text/css" href="table.css">
	<body>
			<?php include 'topbar.php'?>
	<div id="idk"><?php include 'leftbar.php'?></div>
	<div id="left">
		<table id="tenants">
			<tr>
				<TD>
					House owner:
				</TD>
				<td>
					<?php echo $fn?>
				</td>
			</tr>
			<tr>
				<TD>
					House Location:
				</TD>
				<td>
					<?php echo $mn?>
				</td>
			</tr>
			<tr>
				<TD>
					House Type:
				</TD>
				<td>
					<?php echo $em?>
				</td>
			</tr>
			<tr>
				<TD>
					House Price(per month);
				</TD>
				<td>
					<?php echo $me?>
				</td>
			</tr>
		</table>
	</div>
	<div id="footer"><?php include "footer.php"?></div>
	</body>