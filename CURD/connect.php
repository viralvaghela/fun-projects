<?php
session_start();
$servername="127.0.0.1";
	$username="root";
	$password="";
	$database="test";
	$connect=mysqli_connect($servername,$username,$password,$database);
	$globalid;

		//echo "Connect successfully";
		/*$insert="insert into users(`name`,`email`,`number`) VALUES('$name','$email','$number')";
		$cmd=mysqli_query($connect,$insert);
		if($cmd)
		{
			echo "<script>alert('Inserted successfully')</script>";

		}
		else	
		{
			echo "Failed to insert";
		}

		$select="select * from users;";
		$selQuery=mysqli_query($connect,$select);
		while ($showdata=mysqli_fetch_array($selQuery)) 
		{
			echo $showdata['name']."<br>";
		}*/
		
		//Get data using showdata........
?>