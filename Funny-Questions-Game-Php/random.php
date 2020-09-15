<?php
	$questions = array(
    "I am ",
    "i want to eat ",
    "Can you give me ",
    "How are you ",
    "Bye Bye ",
    "Nice ",
    "i dont have ",
    "Yes i can	",
    "Do you like selfie ? ",
    "Do you have girlfriend ? ",
    "What are you doing now ? ",
    "Do you like to follow me on instagram? ",
    "Orange ?",
    "Do you like beer? ",
    "I am watching Movie in ",
    "Do you like HD(Horror Dreams)??? ",
    "You are ",
    "Python OR JAVA ?",
    "ok bye i am Going to ",
    "Do you like 3D songs ?	",
    "Who is this ? ",
    "Where is your father ?",
    " "

);
 
$answers = array(
    "viral",
    "Not bad",
    "girl",
    "Oranges",
    "Pens",
    "Where are you?",
    "Computer",
    "Drive car",
    "no i dont like selfie",
    "No i dont have any girlfriend",
    "Nothing special",
    "Yes Of cource",
    "Fanta",
    "Yes i like beer and also i want to try shampaion",
    "Laptop ",
    "Yes i like",
    "Winner ",
    "Obviously Python",
    "Home",
    "Yes i like",
    "i am her mother",
    "He is busy ",
    " "
);
shuffle($questions);
shuffle($answers);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Random Fun</title>
</head>
<center>
<body style="background: #c1c1c2; font-family:Helvetica">
	<div id="show">
		<h2><a href="Random.php" style="text-decoration: none; color: red;">Click me see New...Enjoy ;)  </a></h2>
		<h2 style="color:white">
		<?php
			for ($i = 0; $i <= 19; $i++) 
			{
 		   		echo $questions[$i] . "" . $answers[$i]."<br><br>";
 			}
		?>
		</h2>
	</div>
</center>
</body>
</html>