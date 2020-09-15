<?php 
	include 'connect.php';
	$id= $_SESSION['gid'];
				//get name using ID
		$getnamesql="select * from users where id=$id ";
		$getnamecmd=mysqli_query($connect,$getnamesql);
		$row = mysqli_fetch_array($getnamecmd);
		$name=$row['name'];
		$email=$row['email'];
		$number=$row['number'];
		
	
		if (isset($_GET['submit'])) {

			$id= $_SESSION['gid'];
			$uname=$_GET['name'];
			$uemail=$_GET['email'];
			$unumber=$_GET['number'];

			$updatesql="UPDATE users set `name`='$uname',`email`='$uemail',`number`='$unumber' where `id`='$id'";	 
			$updatecmd=mysqli_query($connect,$updatesql);
			if($updatecmd)
				echo "<script>alert('Updated successfully')</script>";
			else
				echo "Fail to update";
		}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Page</title>
</head>
<body>
	<form name="frm_edit" action="" method="GET" style="margin-top: 100px;border: 1px solid black;height: 120px;width: 600px;padding: 10px;">
		name:<input type="text" name="name" value="<?php echo $name ?>"><br>
		email:<input type="email" name="email" value="<?php echo $email ?>"><br>
		number:<input type="text" name="number" value="<?php echo $number?>"><br>
		<input type="submit" name="submit">

	</form>
</body>
</html>