<?php session_start();?>
<link rel="stylesheet" type="text/css" href="home.css">

<link rel="stylesheet" type="text/css" href="table.css">
<body>
	<?php include 'topbar.php'?>
	<div id="idk"><?php include 'leftbar.php'?></div>
	<div id="left">
<table border="1" id="tenants">
	<tr>
		<th>Sno</th>
		<th>Landlord name</th>
		<th>Room location</th>
		<th>Room Type</th>
		<th>Price</th>
		<th></th>
		<th></th>

	</tr>
	<?php
	require_once('connect.php');
	$sql = "SELECT * FROM ROOMS";
	$qr = mysqli_query($conn,$sql);
	$q = 1;
	while ($row = mysqli_fetch_array($qr)) {
		$n = $row['id'];
		$fn = $row['laname'];
		$un = $row['location'];
		$em = $row['room_type'];
		$tt= $row['price'];

		echo "<tr>";
		echo "<td>$q</td>";
		echo "<td>$fn</td>";
		echo "<td>$un</td>";
		echo "<td>$em</td>";
		echo "<td>$tt</td>";
		echo "<td><button><a href='more_info.php?m=$n'>INFO</a></button></td>";
		echo "<td><button><a href='mkataba.php?m=$n'>RENT</a></button></td>";
		echo "</tr>";
	$q++;
	}
	?>
</div>

</table>
<div id="footer"><?php include "footer.php"?></div>
</body>
</html>