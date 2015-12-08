<?php 
session_start();

if($_POST["guess"] < $_SESSION["rnum"]){
	$_SESSION["response"] = "low";
}
else if($_POST["guess"] > $_SESSION["rnum"]){
	$_SESSION["response"] = "high";
}
else{
	$_SESSION["response"] = "correct";
}
$_SESSION["guess"] = $_POST["guess"];

header("location: _20_num_game.php");
?>