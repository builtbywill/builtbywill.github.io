<?php
	session_start();
	include("../assets/php/constants.php");
	check_user_login();
	
	//Set up path to XML
	//Load XML	
	// create new DOM and XPath objects and load the XML file
	$doc = new DOMDocument();
	$doc->load($userXML);
	$xpath = new DOMXpath($doc);
					
	//Select the parent of all items
	$pList = $doc->getElementsByTagName("person");
	$pTemp = null;
	foreach($pList as $person)
	{
		if($person->getElementsByTagName("login")->item(0)->nodeValue == $_SESSION["userID"])
		{
		//store basic info
			$name     = $person->getElementsByTagName("name")->item(0)->nodeValue;
			$position = $person->getElementsByTagName("position")->item(0)->nodeValue;
			$time     = $person->getElementsByTagName("time")->item(0)->nodeValue;
			$email    = $person->getElementsByTagName("email")->item(0)->nodeValue;
			$picPath  = $person->getElementsByTagName("picture")->item(0)->nodeValue;
			$remark   = $person->getElementsByTagName("remark")->item(0)->nodeValue;
		//store user's page info
			$pages    = $person->getElementsByTagName("page");
			$pTemp    = $person;
		}
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Manage Account \\ The Nanoelectronic Modeling Group \\ Purdue University</title>
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
                <h1>Manage Account</h1>
        </div>
    </div> 
<!-- @end mast -->
    <div id="content">
    	<div class="center">
            <div id="crumbs">
                <a href="<?php echo $siteRoot; ?>">Home</a>
                &gt; <a href="<?php echo $siteRoot; ?>manage/manageUser">Manage Account</a>
            </div>
            <div class="main-col">
                <?php if(!empty($_SESSION["message"])) echo "<div id=\"message\">".$_SESSION["message"]."</div>"; ?>
                <?php if(!empty($_SESSION["errormessage"])) echo "<div id=\"errormessage\">".$_SESSION["errormessage"]."</div>"; ?>
                <h2>Basic Information</h2>
                <table class="user-info">
                	<tr>
                    	<th>Name</th>
                    	<td><?php echo $name;?></td>
                    	<td rowspan="4"><img src="<?php echo $siteRoot;?>member-files/portraits/<?php echo $picPath;?>" /></td>
                    </tr>
                	<tr>
                    	<th>Position</th>
                    	<td><?php echo $position;?></td>
                    </tr>
                	<tr>
                    	<th>Time</th>
                    	<td><?php echo $time;?></td>
                    </tr>
                	<tr>
                    	<th>Email</th>
                    	<td><?php echo $email;?></td>
                    </tr>
                </table>
                <p><a href="editUser" class="btn">Edit Information<span></span></a></p>
                <h2>Content Pages</h2>
                <table class="user-info">
					<?php
						$objTest = $pTemp->getElementsByTagName("pages")->item(0)->getElementsByTagName("page")->item(0)->nodeValue;
						if (!empty($objTest)) { 
							foreach($pages as $x) {
								$id        = $x->attributes->item(0)->nodeValue;
								$title     = $x->attributes->item(1)->nodeValue;
								$type      = $x->attributes->item(2)->nodeValue;
								$content   = $x->nodeValue;
								echo "<tr><td><a href='/dev/prototype/research-group/members?id=".$_SESSION["userID"]."&page=" . $id . "' >".$title."</a><span class='subnote'>".$type."</span</td>";
								echo "<td class='tbl-btn'><a class=\"btn\" href='managePage?action=showEdit&amp;id=" . $id . "' title='Edit " . $title . "' >Edit<span/></a></td>";
								echo "<td class='tbl-btn'><a class=\"btn\" href='managePage?action=showDelete&amp;id=" . $id . "' title='Delete " . $title . "' >Delete<span/></a></td></tr>";
							}
						}
					?>
                </table>
                 <p><a href="managePage" class="btn">New Page<span></span></a></p>
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
<?php clear_messages();?>