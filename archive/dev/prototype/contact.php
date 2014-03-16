<?php 
	session_start(); 
	include($siteRoot."assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Contact \\ The Nanoelectronic Modeling Group \\ Purdue University</title>
    <!-- InstanceEndEditable -->
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
                <?php if(empty($_SESSION["userID"])) include($siteRoot."includes/nav-upper-1.php"); else include($siteRoot."/includes/nav-upper-2.php"); ?>
               <div id="logo">
					<a href="<?php echo $siteRoot; ?>" title="Home"><img src="<?php echo $siteRoot; ?>assets/img/logo.png" width="156" height="88" alt="gekco logo" /></a>				</div>
				<?php include($siteRoot."includes/nav.php"); ?>
            </div> <!-- @end .center -->
        </div> <!-- @end header -->
        <div class="center header-subpage">
			<!-- InstanceBeginEditable name="header1" -->
                <h1>Contact Us</h1>
            <!-- InstanceEndEditable -->
        </div>
    </div> 
<!-- @end mast -->
    <div id="content">
    	<div class="center">
            <div id="crumbs">
                <a href="<?php echo $siteRoot; ?>">Home</a>
                <!-- InstanceBeginEditable name="breadcrumbs" -->
                &gt; <a href="contact">Contact</a>
			<!-- InstanceEndEditable -->
            </div>
            <div class="main-col">
			<!-- InstanceBeginEditable name="content" -->
			<h2>Dr. Gerhard Klimeck</h2>
            <p><a href="http://www.purdue.edu" target="_blank">Purdue University</a><br/>
            <a href="http://www.ece.purdue.edu" target="_top">School of Electrical and Computer Engineering</a></p>
            <p>Electrical Engineering Building, Room 313B<br/>
            465 Northwestern Avenue<br/>
            West Lafayette, IN 47907-2035<br/>
            Phone: (765) 494-9212<br>Fax: (765) 494-6441<br/>
			E-mail: <a href="mailto:gekco_nicht_spaem@purdue.edu">gekco_no_spaem@purdue.edu</a></p>	
            <h2>Contact Form</h2>	
			<?php if(!empty($_SESSION["errormessage"])){?><div id="errormessage"><?php echo $_SESSION["errormessage"];?></div><?php }?>
            <?php if(!empty($_SESSION["message"])){?><div id="message"><?php echo $_SESSION["message"];?></div><?php }?>
            <form method="post" action="assets/php/emailSend.php" name="form1">
				<table border="0" cellspacing="2" cellpadding="2">
                    <tr>
						<td width="150"><b>To</b></td>
    					<td>
                        <select name="toField">
                        	<option value=""></option>
                    <?php 

						$toID = $_REQUEST["to"];

						//Set up path to XML
						//Load XML	
						// create new DOM and XPath objects and load the XML file
						$doc = new DOMDocument();
						$xmlFile = $_SERVER['DOCUMENT_ROOT']."/dev/prototype/assets/xml/people.xml";
						$doc->load($xmlFile);
						$xpath = new DOMXpath($doc);
				
						//$query = "//people/person[@type = 'member']";
						$query = "//people/person";
						$nodeList = $xpath->query($query);
				
						foreach($nodeList as $nItem)
						{
							//store basic info
							$idNode       = $nItem->getElementsByTagName("login")->item(0)->nodeValue;
							$nameNode     = $nItem->getElementsByTagName("name")->item(0)->nodeValue;
					?>    
                        	<option <?php if(!empty($toID) && ($toID == $idNode)){echo "selected='selected'";}?> value="<?php echo $idNode;?>"><?php echo $nameNode;?></option>
                    <?php
						}	
					?>
                        </select>
                        </td>
					</tr>
					<?php
					
						if(empty($_SESSION["userID"])){
					?>
					<tr>
						<td><b>From</b></td>
   						 <td><input type="text" name="fromName" size="70" value="<?php echo $_SESSION["fromName"];?>" /></td>
					</tr>
					<tr>
						<td><b>Email</b></td>
   						 <td><input type="text" name="fromEmail" size="70" value="<?php echo $_SESSION["fromEmail"];?>" /></td>
					</tr>
                    <?php
						}else{
					?>
					<tr>
						<td><b>From</b></td>
   						 <td>
                             <input type="text"  disabled="disabled" size="70" value="<?php echo $_SESSION["userName"];?>" />
                             <input type="hidden" name="fromName" size="70" value="<?php echo $_SESSION["userName"];?>" />
                             <input type="hidden" name="fromEmail" size="70" value="<?php echo $_SESSION["userEmail"];?>" />
                         </td>
					</tr>
                    <?php
						}
					?>
					<tr>
						<td><b>Subject</b></td>
   						 <td><input type="text" name="subject" size="70" value="<?php echo $_SESSION["emailSubj"];?>"/></td>
					</tr>
					<tr>
						<td><b>Comments</b></td>
   						 <td><textarea name="body" rows="10" cols="53"><?php echo $_SESSION["emailBody"];?></textarea></td>
					</tr>
					<tr>
						<td><b>What is five plus seven? (please spell out)</b></td>
   						 <td><input type="text" name="spamtest" size="70" /></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="Submit" value="Send Email" class="btn-submit" /></td>
					</tr>
				</table>
			</form>
					<!-- InstanceEndEditable --> 
            </div>
            <div class="side-col">
			<!-- InstanceBeginEditable name="sidenav" -->
			<!-- InstanceEndEditable -->                 
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
<!-- InstanceEnd --></html>
<?php clear_messages(); ?>