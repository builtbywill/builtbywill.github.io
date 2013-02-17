<?php
	session_start();
	
	// get posted data into local variables
	$to = "BuiltByWill <builtbywill@gmail.com>";
	$subject = "Built by Will - Contact Form";
	$redirect = '/#contact';
	
	//store to session variables for errors
	$_SESSION["name"] = $_POST[name]; 
	$_SESSION["email"] = $_POST[email]; 
	$_SESSION["comments"] = $_POST[comments]; 
	
	// validation
	if (empty($_SESSION["name"]) || $_SESSION["name"] == 'name')
	{
		$_SESSION["errormsg"] = "{\"error\":true, \"message\":\"Please enter a name.\"}";
		if($_POST[js])
			die($_SESSION["errormsg"]);
		else
			header("Location: $redirect");
		exit;
	}
	if (empty($_SESSION["email"]) || $_SESSION["email"] == 'email' || !isValidEmail($_SESSION["email"]))
	{
		$_SESSION["errormsg"] = "{\"error\":true, \"message\":\"Please enter your email.\"}";
		if($_POST[js])
			die($_SESSION["errormsg"]);
		else
			header("Location: $redirect");
	}
	if (empty($_SESSION["comments"]) || $_SESSION["comments"] == 'comments')
	{
		$_SESSION["errormsg"] = "{\"error\":true, \"message\":\"Please leave some comments.\"}";
		if($_POST[js])
			die($_SESSION["errormsg"]);
		else
			header("Location: $redirect");
	}
	
	require_once('captcha/recaptchalib.php');
	$privatekey = "6Lc0sNESAAAAAMdTQ51GG-rCgMQJ3qYYAEvQ0d-5";
	$resp = recaptcha_check_answer ($privatekey,
							$_SERVER["REMOTE_ADDR"],
							$_POST["recaptcha_challenge_field"],
							$_POST["recaptcha_response_field"]);
	
	if (!$resp->is_valid) {
		$_SESSION["errormsg"] = "{\"error\":true, \"message\":\"The reCAPTCHA wasn't entered correctly. Please try again.\"}";
		if($_POST[js])
			die($_SESSION["errormsg"]);
		else
			header("Location: $redirect");
	}
	
	$order   = array("\r\n", "\n", "\r");
	$replace = '<br />';
	$comments = str_replace($order, $replace, $_SESSION["comments"]);
	
	//Html Formatted Comments for Email
	$body = '<table style="font-size:12px; font:Arial, Helvetica, sans-serif;" width="450"  border="0" cellspacing="0" cellpadding="2">
				  <tr>
					 <td width="158" style="vertical-align:top;">Name:</td> 
					 <td style="vertical-align:top;">'. $_SESSION["name"] .'</td> 
				  </tr>
				  <tr>
					 <td style="vertical-align:top;">E-mail:</td> 
					 <td style="vertical-align:top;"><a href="mailto:'. $_SESSION["email"] .'">'. $_SESSION["email"] .'</a></td> 
				  </tr>
				  <tr>
					 <td style="vertical-align:top;">Comments:</td> 
					 <td style="vertical-align:top;">'. $comments .'</td> 
				  </tr>
				</table>';
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From:'. $_SESSION["name"] .' <'.$_SESSION["email"].'>' . "\r\n";
	
	
	// send email 
	mail($to, $subject, $body, $headers);
	
	$_SESSION["name"] = "";
	$_SESSION["email"] = "";
	$_SESSION["comments"] = "";
	
	$_SESSION['message'] = "{\"success\":true, \"message\":\"Message Sent Successfully!\"}";	
	
	if($_POST[js]){
		echo $_SESSION["message"];
		$_SESSION["errormsg"] = '';
		$_SESSION["message"] = '';
	}else
		header("Location: $redirect");
		
	function isValidEmail($email){
		return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
	}	
?>