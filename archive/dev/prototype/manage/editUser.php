<?php
	session_start();
	include("../assets/php/constants.php");
	check_user_login();
	
	$action = $_GET["action"];
	if($action != "doEdit"){
	
		//Set up path to XML
		//Load XML	
		// create new DOM and XPath objects and load the XML file
		$doc = new DOMDocument();
		$doc->load($userXML);
		$xpath = new DOMXpath($doc);
		
		$query = "//people/person/login[. = '".$_SESSION["userID"]."']";
		
		//run the query
		$guidNode = $xpath->query($query);
		
		//get the parent Item node
		$person = $guidNode->item(0)->parentNode;
	
		//store basic info
		$_SESSION["name"]     = $person->getElementsByTagName("name")->item(0)->nodeValue;
		$_SESSION["position"] = $person->getElementsByTagName("position")->item(0)->nodeValue;
		$_SESSION["time"]     = $person->getElementsByTagName("time")->item(0)->nodeValue;
		$_SESSION["email"]    = $person->getElementsByTagName("email")->item(0)->nodeValue;
		$_SESSION["picPath"]  = $person->getElementsByTagName("picture")->item(0)->nodeValue;
		$_SESSION["remark"]   = $person->getElementsByTagName("remark")->item(0)->nodeValue;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Edit Account \\ The Nanoelectronic Modeling Group \\ Purdue University</title>
    <meta name="keywords" content="gekco, Gerhard, nano, Gerhard Klimeck, JPL, HPCC, Quantum Device Simulation, Resonant Tunneling Diodes, Green Functions, nanoelectronics, NEMO, heterostructures, Genetic algorithm, parallel, 3-D, nano, nanotechnology, NCN, Nanotechnology, Computation, Klimeck, nano, Gerhard, Post doc, Post-doc, Post, Doc, Opportunity, job, Hire, jobs, programming, students, C++, python, fortran, programmer, opportunity, software, engineer, software engineer, nanohub, nanohub.org, cyber, infrastructure" />
    <meta name="description" content="The home of the Nanoelectronic Modeling Group and Gerhard Klimeck" />
    <meta name="language" content="en-us" />
    <style media="all" type="text/css"> @import url("<?php echo $siteRoot; ?>assets/css/base.css"); </style>
    <style media="screen" type="text/css"> @import url("<?php echo $siteRoot; ?>assets/css/screen.css"); </style>
    <script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/jquery-1.3.2.min.js"></script>   
    <script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/jquery.plugins.js"></script>   
    <script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/setup.js"></script>   
    <link type="image/x-icon" href="<?php echo $siteRoot; ?>assets/img/favicon.ico" rel="shortcut icon" />
    <link rel="alternate" type="application/rss+xml" title="The Nanoelectronic Modeling Group - Recent News" href="<?php echo $siteRoot; ?>assets/xml/rss.xml"/>    
    <!--[if lte IE 6]>
    <style media="screen" type="text/css"> @import url("<?php echo $siteRoot; ?>assets/css/screen-IE6.css"); </style>
    <script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/iepngfix_tilebg.js"></script>   
    <![endif]-->
</head>
<body>
    <div id="mast">
        <div id="header">
            <div class="center">
                <a href="#content" class="skipnav">Skip to Content</a>
                <?php if(empty($_SESSION["userID"])) include("../includes/nav-upper-1.php"); else include("../includes/nav-upper-2.php"); ?>
               <div id="logo">
					<a href="<?php echo $siteRoot; ?>" title="Home"><img src="<?php echo $siteRoot; ?>assets/img/logo.png" width="156" height="88" alt="gekco logo" /></a>				</div>
				<?php include($siteRoot."includes/nav.php"); ?>
            </div> <!-- @end .center -->
        </div> <!-- @end header -->
        <div class="center header-subpage">
                <h1>Edit Account</h1>
        </div>
    </div> 
<!-- @end mast -->
    <div id="content">
    	<div class="center">
            <div id="crumbs">
                <a href="<?php echo $siteRoot; ?>">Home</a>
                &gt; <a href="<?php echo $siteRoot; ?>manage/editUser">Edit Information</a>
            </div>
            <div class="main-col">
            <?php } if(empty($action)){ ?>
            
                <h2>Edit Information</h2>
                <?php if(!empty($_SESSION["message"])) echo "<div id=\"message\">".$_SESSION["message"]."</div>"; ?>
                <?php if(!empty($_SESSION["errormessage"])) echo "<div id=\"errormessage\">".$_SESSION["errormessage"]."</div>"; ?>
               <form action="editUser?action=doEdit" method="post" name="form1">
                    <fieldset class="rssForm">
                        <div>
                            <label for="Name">Name*:</label>
                            <input type="text" name="Name" size="70" value="<?php echo $_SESSION["name"]; ?>" />
                        </div>
                        <div>
                            <label for="Position">Position:</label>
                            <input type="text" name="Position" size="70" value="<?php echo $_SESSION["position"]; ?>" />
                        </div>
                        <div>
                            <label for="Time">Time:</label>
                            <input type="text" name="Time" size="70" value="<?php echo $_SESSION["time"]; ?>" />
                        </div>
                        <div>
                            <label for="Email">Email*:</label>
                            <input type="text" name="Email" size="70" value="<?php echo $_SESSION["email"]; ?>" />
                        </div>
                        <div>
                            <label for="Remark">Remark:</label>
                            <input type="text" name="Remark" size="70" value="<?php echo $_SESSION["remark"]; ?>" />
                        </div>                        
                        <div>
                            <p>Name of the image in <span class="highlight">/member-files/portraits/</span> <strong>(150px wide max)</strong> AND <span class="highlight">/member-files/portraits/list/</span> <strong>(100px by 93px)</strong></p>
                            <label for="Picture">Picture*:</label>
                            <input type="text" name="Picture" size="20" value="<?php echo $_SESSION["picPath"]; ?>" />
                        </div>
                        <div class="button">
                            <input type="submit" name="submit" value="Update Info" class="btn-submit"  />
                            <input type="submit" name="submit" value="Cancel" class="btn-submit"  />
                        </div>
                    </fieldset>
                </form>          
                      
            <?php }elseif($action=="doEdit"){
			
					$submit               = $_POST["submit"];
					$_SESSION["name"]     = stripslashes($_POST["Name"]);
					$_SESSION["position"] = stripslashes($_POST["Position"]);
					$_SESSION["time"]     = stripslashes($_POST["Time"]);
					$_SESSION["email"]    = stripslashes($_POST["Email"]);
					$_SESSION["picPath"]  = stripslashes( $_POST["Picture"]);
					$_SESSION["remark"]   = stripslashes($_POST["Remark"]);
					
					doEdit($_SESSION["userID"], $userXML, $submit);
					
					//redirect back to rss Main
					header("Location: manageUser");
					exit;
					
			 ?>   
            <?php }?>   
            </div>
            <div class="side-col">
                <?php if(!empty($_SESSION["userID"])) include($siteRoot."includes/sidenavs/side-manage.php");?>
				<?php include($siteRoot."includes/recent-news.php"); ?>
            </div>
            <div class="clear"></div>
	    </div> <!-- @end .center -->
    </div> <!-- @end content -->
    <div id="footer">
    	<div class="center">
		<?php include($siteRoot."includes/footer.php"); ?>
        </div> <!-- @end .center -->
    </div> <!-- @end footer -->
</body>
</html>
<?php
	clear_messages();

	//Functions
	function doEdit($userID, $XMLfile, $submit)
	{
		// make sure session variable for error messages is set to nothing before validation
		$_SESSION["message"] = "";
		
		//if they hit cancel from any page take them back to the main page
		if($submit == "Cancel")
		{
			cleanup();
			header("Location: manageUser");
			exit;
		}
		
		//Validation
		if (empty($_SESSION["name"])){
			cleanup();
			$_SESSION["message"] = "";
			$_SESSION["errormessage"] = "You must enter a name. Please try again.";
			header("Location: editUser");
			exit;
		}
		if (empty($_SESSION["email"])){
			cleanup();
			$_SESSION["message"] = "";
			$_SESSION["errormessage"] = "You must enter an email address. Please try again.";
			header("Location: editUser");
			exit;
		}
		if (empty($_SESSION["picPath"])){
			cleanup();
			$_SESSION["message"] = "";
			$_SESSION["errormessage"] = "You must enter a picture name. Please try again.";
			header("Location: editUser");
			exit;
		}
		if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_SESSION["email"])){
			cleanup();
			$_SESSION["message"] = "";
			$_SESSION["errormessage"] = "Invalid email address. Please try again.";
			header("Location: editUser");
			exit;
		}
		$ext = substr($_SESSION["picPath"], strlen($_SESSION["picPath"])-4, 4);
		if ($ext != ".jpg" && $ext != ".gif" && $ext != ".png"){
			cleanup();
			$_SESSION["message"] = "";
			$_SESSION["errormessage"] = "Invalid picture extension. Please use .jpg, .gif or .png";
			header("Location: editUser");
			exit;
		}
				
		// create new DOM and XPath objects and load the XML file
		$doc = new DOMDocument();
		$doc->load($XMLfile);
		$xpath = new DOMXpath($doc);
		
		// set the root element
		$query = "//people/person/login[. = '".$userID."']";
		$guidNode = $xpath->query($query);
		
		//get the parent Item node
		$person = $guidNode->item(0)->parentNode;
	
		//store basic info
		$nameNode     = $person->getElementsByTagName("name")->item(0);
		$positionNode = $person->getElementsByTagName("position")->item(0);
		$timeNode     = $person->getElementsByTagName("time")->item(0);
		$emailNode    = $person->getElementsByTagName("email")->item(0);
		$pictureNode  = $person->getElementsByTagName("picture")->item(0);
		$remarkNode   = $person->getElementsByTagName("remark")->item(0);
		
		$nameNode->nodeValue     = $_SESSION["name"];
		$positionNode->nodeValue = $_SESSION["position"];
		$timeNode->nodeValue     = $_SESSION["time"];
		$emailNode->nodeValue    = $_SESSION["email"];
		$pictureNode->nodeValue  = $_SESSION["picPath"];
		$remarkNode->nodeValue   = $_SESSION["remark"];
		
		//save the changes
		$doc->save($XMLfile);
		
		$_SESSION["message"] = "Information Updated Successfully!";
		//cleanup
		cleanup();
		
	} // end function doEdit()
		
	function cleanup(){
		$_SESSION["name"]     = "";
		$_SESSION["position"] = "";
		$_SESSION["time"]     = "";
		$_SESSION["email"]    = "";
		$_SESSION["picPath"]  = "";
		$_SESSION["remark"]   = "";
	}	
?>		
	





