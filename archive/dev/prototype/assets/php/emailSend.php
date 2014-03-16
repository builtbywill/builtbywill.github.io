<?php
	session_start();
	include("constants.php");
	require("class.phpmailer.php");

	//Get Form Data
	$toID      = stripslashes($_POST["toField"]);
	$fromEmail = stripslashes($_POST["fromEmail"]);
	$fromName  = stripslashes($_POST["fromName"]);	
	$subject   = stripslashes($_POST["subject"]);
	$body      = stripslashes($_POST["body"]);
	$test      = stripslashes($_POST["spamtest"]);
	
	if(empty($toID))
		error("Please select a member from the list.");
	
	$toEmail   = get_email($toID);
	
	$_SESSION["toID"] = $toID;
	$_SESSION["fromName"]  = $fromName;
	$_SESSION["fromEmail"] = $fromEmail;
	$_SESSION["emailSubj"] = $subject;
	$_SESSION["emailBody"] = $body;	
	
	if(empty($fromName))		
		error("Please enter your name.");
	if(empty($fromEmail) || !eregi('^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$', $fromEmail))		
		error("Please enter a valid email address");
	if(empty($subject))		
		error("Please enter a subject");
	if(empty($body))		
		error("Please enter a message.");
	if(empty($test) || $test != "twelve")		
		error("Incorrect answer. Don't forget to spell out your answer. Please try again.");
	
	//Html Formatted Comments for Email
	$newBody = '<table style="font-size:12px; font:Arial, Helvetica, sans-serif;" width="450"  border="0" cellspacing="0" cellpadding="2">
				  <tr>
					 <td width="158">Name:</td> 
					 <td>'. $fromName .'</td> 
				  </tr>
				  <tr>
					 <td>E-mail:</td> 
					 <td><a href="mailto:'. $fromEmail .'">'. $fromEmail .'</a></td> 
				  </tr>
				  <tr>
					 <td>Subject:</td> 
					 <td>'. $subject .'</td> 
				  </tr>
				  <tr>
					 <td>Comments:</td> 
					 <td>'. $body .'</td> 
				  </tr>
				</table>';
	
	$Headers  = "MIME-Version: 1.0\r\n";
	$Headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$Headers .= "From: $fromName <$fromEmail> \r\n";
	
	
	// send email 
	mail($toEmail, "Group Site - Contact Form: ".$subject, $newBody, $Headers);
	$_SESSION["message"]= "Message sent successfully!";

	cleanUp();
	cleanUpSessions();
	// Redirect to Email confirmation page
	header("Location: ../../contact");
	
	
	function error($errormessage) {
		//Delcare error message
		$_SESSION["errormessage"]= $errormessage;
		//Clear connection variables
		cleanUp();
		//Return to previous page
		header("Location:../../contact?to=".$_SESSION["toID"]);
		exit;
	}
	
	//Function to clear variables
	function cleanUp() {
		$toID      = "";
		$fromEmail = "";
		$fromName  = "";	
		$subject   = "";
		$body      = "";
		$test      = "";
		$toEmail   = "";
	}
	
	function cleanUpSessions() {	
		$_SESSION["toID"] = "";	
		$_SESSION["fromName"]  = "";
		$_SESSION["fromEmail"] = "";
		$_SESSION["emailSubj"] = "";
		$_SESSION["emailBody"] = "";
	}
?>