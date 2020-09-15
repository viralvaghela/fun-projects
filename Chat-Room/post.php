<?php
session_start();
include 'connect.php';
	
	$text=$_POST['inp'];
	$nam=$_SESSION['user']; //$nam is temp variable use for mismatch of ' and " 

//	exit;
	$currentdate=date("Y-m-d h:m:s");
	$insert="insert into msg(`message`,`uname`,`time`) VALUES('$text','$nam','$currentdate')";
	$insertcmd=mysqli_query($connect,$insert);
	header("Location:home.php");

?>
