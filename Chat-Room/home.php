<?php
	session_start();
	include 'connect.php';
	if (!isset($_SESSION['user'])) {
		echo "<script>alert('Bro first Login ')</script>";
		header("Location:index.php");
	}


?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="my_script.js"></script>


<script>
	$(document).ready(function() {
  $.ajaxSetup({ cache: false }); // This part addresses an IE bug.  without it, IE will only load the first number and will never refresh
  setInterval(function() {
    $('#msg').load('home.php');
  }, 100); // the "3000" 
});
</script>

	<title>Home- Chat </title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<center>
<body>
	<nav>
		<a href="images.php">Our Memories - Photos</a>
		<a href="logout.php">Log out</a>
	</nav>
	<h1> 
	<div id="welcome">
		Welcome Dear <?php echo $_SESSION['user']; ?> 
	</div>
</h1>

	<div id="msg">
		
		<div class="ex1">
		<?php
			$selectsql="select  * from `msg`";
			$selectcmd=mysqli_query($connect,$selectsql);
			
			while ($showdata = mysqli_fetch_array($selectcmd)) {
			?>
			
			<!--Your style will be here -->
			
				<?php
				if (isset($_SESSION['message'])) {
					echo "There are no any message";
				}
				else{	
				}
					echo $showdata['uname'].":";
					echo $showdata['message']."  ".$showdata['time']."<br><hr>";
					}
						
				?>
		</div>

	</div>



	


<!-- 	<script type="text/javascript" src="jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="my_script.js">

$(document).ready( function(){
	$('#msg').load('home.php');
	refresh();
});
 
function refresh()
{
	setTimeout( function() {
	  $('#msg').fadeOut('slow').load('home.php').fadeIn('slow');
	  refresh();
	}, 2000);
}
			
</script> -->	
	<br>
	<div id="insert"> 
<form name="frm_message" action="post.php" method="POST">
	<textarea name="inp" id="inp" rows="10" cols="45">
		
	</textarea>
																			<!-- Post message into database -->
	
		<input type="submit" name="submit" value="Send message">
	</form>
	</div>

		<!--	Active /Online users code -->
<br>
	<div id="online">
		
		<h5>Online Users</h5><hr><br>
		<?php
			$select="select * from users where `status`='1' ";
			$selectcmd=mysqli_query($connect,$select);
			while ($showdata = mysqli_fetch_array($selectcmd)) {
				if ($showdata['name']==$_SESSION['user']) {
					echo "<style='color:'red> "."me:". $showdata['name']."</style><br>";
					continue;
				}
				echo $showdata['name']."<br>";
			}
		
		?>

	</div>

</body>
</center>
</html>