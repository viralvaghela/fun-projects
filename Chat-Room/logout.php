<?php
	session_start();
	include 'connect.php';

	//change status to logout  and $nam is temp variable to check condition in query
	$nam=$_SESSION['user'];
	echo $nam;
	$change_status="update `users` set `status` = '0' where `name` = '$nam' ";
	$change_status_cmd=mysqli_query($connect,$change_status);
	session_destroy();
	header("Location:index.php");	
?>
