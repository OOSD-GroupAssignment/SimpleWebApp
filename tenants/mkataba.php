<?php


session_start();
include("connect.php");
$aa = $_GET['m'];
$mail=$_SESSION['login_user'];
require "../fpdf/fpdf.php";

$pdf=new FPDF('P','mm','A4');

$pdf->addPage();
$pdf->setFont('Arial','B','14');

$pdf->cell(190,8,"MKATABA WA NYUMBA",0,0,'C');
$pdf->cell(190,8,"MKATABA WA NYUMBA",0,1,'C');


$pdf->setFont('Arial','','14');

$QUERY="select * from users where email='$mail'";
$QUERY2="select * from rooms where id= '$aa'";;
$ans=mysqli_query($conn,$QUERY);
$ans2=mysqli_query($conn,$QUERY2);
$sn=1;
$row=mysqli_fetch_array($ans);
$row2=mysqli_fetch_array($ans2);
$jina=$row['fullname'];
$em=$row['email'];
$lc=$row2['location'];
$house=$row2['room_type'];
$price=$row2['price'];
$laname=$row2['laname'];
$contact=$row2['contact'];

    $pdf->cell(20,8,"Dear $jina ($em) this contract starts today .................... to ................ ",0,1,'l');
    $pdf->cell(38,8,"house is $house located at $lc with a price of $price per month. please contact  " ,0,1,'l');
    $pdf->cell(38,8,"your landlord mr/mrs $laname ($contact) for more information",0,1,'l');
    $pdf->cell(38,8,"",0,1,'C');
  



$pdf->output();

?>