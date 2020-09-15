<?php
	session_start();
	include 'connect.php';
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];

	$select="select * from users where `name`='$uname' and `password`='$pass' ";
	$selectcmd=mysqli_query($connect,$select);
	
	$row=mysqli_fetch_array($selectcmd);
	$nam=$_SESSION['user']=$row['name'];

	if (isset($_SESSION['user'])) {
		//change status of users
		$change_status="update `users` set `status` = '1' where `name` = '$nam'  ";
		$change_status_cmd=mysqli_query($connect,$change_status);



		header("Location:home.php");		//if valid user then redirect to home else goto index	
	
	}
	
	else
	{
		$_SESSION['error']="Dear,".$uname." Enter valid password ;)";
		header("Location:index.php");
	}
	
	//echo $_SESSION['user'];
	

?>