<?php 
	//Start Session
	session_start();
	
	$_SESSION["message"]="You have been successfully logged out.";
	//Declare Session Variables
	$_SESSION["userID"]= "";
	//Redirect to Personal Homepage
	header("Location:/manage");
?>