<?php
	session_start();
	include 'connect.php';
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$confirmpass=$_POST['confirmpass'];
	if($pass==$confirmpass)
	{
		$insertsql="insert into users(`name`,`password`) values('$uname','$pass')";
		$insertcmd=mysqli_query($connect,$insertsql);
	}
	else
		$_SESSION['error']="Password does not match";
		header("Location:index.php");
?>