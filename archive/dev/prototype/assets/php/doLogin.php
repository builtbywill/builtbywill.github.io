<?php 
	//Start Session
	session_start();
	
	include("constants.php");

	// create new DOM and XPath objects and load the XML file
	$doc = new DOMDocument();
	$doc->load("http://willgrauvogel.com/dev/prototype/assets/xml/db.xml");
	$xpath = new DOMXpath($doc);

	//Initialize variables with form data
	//Use session variable to re-fill form on error
	$_SESSION["login"] = $_POST["login"];
	
	//Use MD5 encryption on the $password
	$password = $_POST["pass"];
	$password = str_replace("'", "''",$password);
	$password = md5($password);
	
	//Remove single Quotes
	$_SESSION["login"] = str_replace("'", "''", $_SESSION["login"]);

	//get all the item elements
	$memberArray = $doc->getElementsByTagName("member");
	//loop thru the item elements
	foreach($memberArray as $member)
	{
		$mID = $member->getAttributeNode("id")->value;
		
		if ($mID == $_SESSION["login"])
		{
			//get the global unique identifier for this item
			$mPass = $member->getAttributeNode("passwd")->value;
			$mType = $member->getAttributeNode("access")->value;
						
			if($mPass != $password)
				dieLogin("Incorrect password. Please try again.");
			else
				successLogin("You have been successfully logged in.", $mID, $mType);				
		}
	}		
	dieLogin("Login does not exist. Please contact your administrator.");

	function dieLogin($errormessage) {
		//Return Variable to the same as the user entered it
		$_SESSION["login"] = str_replace("'", "''", $_SESSION["login"]);
		//Delcare error message
		$_SESSION["errormessage"]= $errormessage;
		//Clear connection variables
		cleanUp();
		//Return to previous page
		header("Location:../../manage");
		exit;
	}
	
	function successLogin($message, $mID, $mType) {
		//Declare success message
		$_SESSION["message"]=$message;
		//Declare Session Variables
		$_SESSION["userID"]= $mID;
		$_SESSION["userLevel"]= $mType;
		$_SESSION["userName"]= get_name($mID);
		$_SESSION["userEmail"]= get_email($mID);
		//Clear all page variables
		$_SESSION["login"] = "";
		cleanUp();
		//Redirect to Personal Homepage
		header("Location:../../manage");
		exit;
	}
	
	//Function to clear login variables
	function cleanUp() {
		$password = "";
		$mID = "";
		$mPass = "";
		$mType = "";
		$memberArray = "";
		$doc = "";
	}
?>