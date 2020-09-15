<?php
	include 'connect.php';
	
	if (isset($_GET['delete']))    //delete stuff is delete button is clicked...
	{
		$id=$_GET['delete'];
		$deletesql="delete from users where id='$id' ";
		$deletecmd=mysqli_query($connect,$deletesql);
		echo "deleted succefully";

	}

	if(isset($_GET['insert'])) //INSERT RECORDS  IF USER SELECT INSERT BUTTON
	{
		$name=mysqli_real_escape_string($connect, $_GET['name']);
		
		$email=mysqli_real_escape_string($connect,$_GET['email']);
		$number=mysqli_real_escape_string($connect,$_GET['number']);
		if($name=="" OR $email=="" OR $number=="")	//VALIDATION FOR EMPTY BOXES ;)
		{	echo "Please Enter Some Values";
			exit;
		}	
		else 	//iF NOT NULL THEN INSERT 
			$insertsql="insert into users(`name`,`email`,`number`) VALUES('$name','$email','$number');";
			$insertcmd=mysqli_query($connect,$insertsql);
			echo "<script>alert('Inserter successfully')</script>";
	}

	if (isset($_GET['update'])) {		//get all data from query into variables....
	
		$_SESSION['gid']=$_GET['update'];
		header('Location: edit.php');
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact Details</title>
</head>
<body>
	<center><h3>
	<form name="frm" method="GET" action="" style="margin-top: 100px;border: 1px solid black;height: 120px;width: 600px;padding: 10px;" >
		Name:<input type="text" name="name" ><br>
		email:<input type="email" name="email"><br>
		Number:<input type="text" name="number" ><br>
	 	<input type="submit" name="insert" value="Insert">
	</form></h3>

 <form name="frm_edit" action="" method="GET">
	

<table border="1">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Number</th>
			<th>Delete</th>
			<th>Update</th>
		</tr>
	</table>
	<?php 
		
		$selectsql="select * from users";
		$selectcmd=mysqli_query($connect,$selectsql);
		while($showdata = mysqli_fetch_array($selectcmd))
		{
			?>

	<table border="1">
		<tr>
			<td><?php echo $showdata['id']; ?></td>
			<td><?php echo $showdata['name']; ?></td>
			<td><?php echo $showdata['email']; ?></td>
			<td><?php echo $showdata['number']; ?></td>
			<td><input type="submit" name="delete" value="<?php echo $showdata['id']; ?>"  ></td>
			<td><input type="submit" name="update" value="<?php echo $showdata['id'];  ?>"  ></td>
		</tr>
	</table>

		<?php } ?><!--   END OF PHP WHILE LOOP -->
 </form>
	</center>
	<h3>Search values by name</h3>
	<form name="frm_search" method="GET" action="search.php">
		<input type="text" name="search_box" id="search_box"><br>
		<input type="submit" name="submit" id="submit">

	</form>
	
</body>
</html>