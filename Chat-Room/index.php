<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Welcome to BKV Chat</title>

</head>
<center>
<body>
<h1>
	<div id="welcome">
		Welcome to Chat Room for bkv students
	</div>
</h1>
	<!-- Login -->

	<div id="login">
		<div class="msg">
			<h2>Login Here</h2>
		</div>
		<br>
		<form name="frm_login" action="login.php" method="POST">
			Username <input type="text" name="uname" id="uname" required="required"><br>
			Password <input type="Password" name="pass" id="pass" required="required"><br><br>
			<input type="submit" name="login" value="Login" class="btn"> 
			<h3 style="color: red"><?php if(isset($_SESSION['error'])) {echo $_SESSION['error'];} unset($_SESSION['error']);      ?> </h3>
		</form>
	</div>
	<br>
					<!-- 		registration block -->

	<div id="registration">
		<div class="msg">
			<h2>New User???</h2>
		</div>
		<br>
		<form name="frm_registration" action="registration.php" method="POST">
			Your Name : <input type="text" name="uname" id="uname" required="required"><br>
			Your Password : <input type="Password" name="pass" id="pass" required="required"><br>
			Confirm Password : <input type="Password" name="confirmpass" id="confirmpass" required="required"><br><br>
			<input type="submit" name="registration"  value="Registration"  class="btn">

		</form>	
		<h3 style="color: red"><?php if(isset($_SESSION['error'])) {echo $_SESSION['error'];} unset($_SESSION['error']);      ?> </h3>
	</div>
<br><Br><br><br>
<div id="footer">
	<h5><style>.heart{color:#e25555;}</style>
Made with <span class="heart">❤</span> by Viral...</h5>

</div>
		

</body>
</center>
</html>