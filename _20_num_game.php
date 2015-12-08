<?php session_start(); 
if(!isset($_SESSION["rnum"])){
	$_SESSION["rnum"] = rand(1, 100);
}
if(!isset($_SESSION["response"])){
	$_SESSION["response"] = "none";
}
var_dump($_SESSION["rnum"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Number Game</title>
	<link rel="stylesheet" type="text/css "href="_20_num_process_style.css">
</head>
<body>
<div id="wrapper">
	<h1>Welcome to the Great Number Game!</h1>
	<form action="_20_num_process.php" method="post">
	<?php
	if($_SESSION["response"] =="none" || $_SESSION["response"] == "low" || $_SESSION["response"] == "high"){?>
		<h3>I am thinking of a number between 1 and 100.</h3>
		<select name='guess' required>
			<option value=''></option>
		<?php
		for($i = 1; $i <= 100; $i++){
			echo "<option>".$i."</option>";
		}?> 
		</select>
		<button>Submit</button>
	<?php } ?>
	</form>
	<?php 
	if($_SESSION["response"] == "low" || $_SESSION["response"] == "high"){
		echo "<div id ='red'><h3>".$_SESSION["guess"]." is too ".$_SESSION["response"]."...try again.</h3></div>";
	}
	else if($_SESSION["response"] == "correct"){
		echo "<div id='green'><h3>".$_SESSION["guess"]." is the number!</h3></div>";
	}
	else{
		echo "<div id='orange'><h3>Take a guess!</h3></div>";
	}?>

	<form action="_20_num_reset.php" method="post">
	<button>Reset</button>	
	</form>
</div><!-- end wrapper -->	
</body>
</html>




















