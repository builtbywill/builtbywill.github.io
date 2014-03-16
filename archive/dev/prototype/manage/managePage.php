<?php
	session_start();
	include_once("../assets/php/constants.php");
	include_once("../assets/fckeditor/fckeditor.php") ;
	check_user_login();
		
	$action = $_GET["action"];
	$pageID = $_GET["id"];
	if($action != "doAdd" && $action != "doEdit" && $action != "doDelete")
	{
		if(!empty($action) && $action != "showEdit" && $action != "showDelete")
		{
			header("Location: manageUser");
			exit;
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Manage Page \\ Manage Account \\ The Nanoelectronic Modeling Group \\ Purdue University</title>
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
                <h1>Manage Page</h1>
        </div>
    </div> 
<!-- @end mast -->
    <div id="content">
    	<div class="center">
            <div id="crumbs">
                <a href="<?php echo $siteRoot; ?>">Home</a>
                &gt; <a href="<?php echo $siteRoot; ?>manage/manageUser">Manage Account</a>
                &gt; <a href="<?php echo $siteRoot; ?>manage/managePage">Manage Page</a>
            </div>
            <div class="main-col">
            <?php
				if(empty($action)){
            ?>
                <h2>Add New Page</h2>
                <?php if(!empty($_SESSION["message"])) echo "<div id=\"message\">".$_SESSION["message"]."</div>"; ?>
                <?php if(!empty($_SESSION["errormessage"])) echo "<div id=\"errormessage\">".$_SESSION["errormessage"]."</div>"; ?>
                <form action="managePage?action=doAdd" method="post" name="form0">
                    <fieldset class="rssForm">
                        <div>
                            <label for="Title">Title:</label>
                            <input type="text" name="Title" size="70" value="<?php echo $_SESSION["pageTitle"]; ?>" />
                        </div>
                        <div>
                            <label for="ID">ID:</label>
                            <input type="text" name="ID" size="70" value="<?php echo $_SESSION["pageID"]; ?>" />
                            <p class="note"><strong>Note:</strong> The ID you give to your page will be used in its url<br/> <strong>Example:</strong> http://cobweb.ecn.purdue.edu/~gekco/research-group/<span class="highlight">members?id=<?php echo $_SESSION["userID"];?>&amp;page=<strong>ID</strong></span></p> 
                        </div>
                        <div>
                            <label for="Type">Type:</label>
                            <input type="text" name="Type" size="70" value="project" disabled="disabled"/>
                        </div>
                        <div>
                            <p class="note"><strong>Note:</strong> To add images or links to media, first upload your files to your folder <span class="highlight">/member-files/<?php echo $_SESSION["userID"];?>/</span></p> 
							<?php                            
                            $oFCKeditor = new FCKeditor('FCKeditor1') ;
                            $oFCKeditor->BasePath	= '/dev/prototype/assets/fckeditor/';
                            $oFCKeditor->Height = '500';
							
							$oFCKeditor->Config['BaseHref '] = $siteRoot;							
							$oFCKeditor->Config['SkinPath']  = '/dev/prototype/assets/fckeditor/editor/skins/office2003/' ;

							$oFCKeditor->Value = '<p>This is some <strong>sample text</strong>. You are using <a href="http://www.fckeditor.net/">FCKeditor</a>.</p>' ;
                            $oFCKeditor->Create() ;
                            ?>
                        </div>
                        <div class="button">
                            <input type="submit" name="submit" value="Submit" class="btn-submit"  />
                            <input type="submit" name="submit" value="Cancel" class="btn-submit"  />
                        </div>
                    </fieldset>
                </form>          
            <?php
				}
				elseif($action == "showEdit")
				{
				
					//Set up path to XML
					//Load XML	
					// create new DOM and XPath objects and load the XML file
					$doc = new DOMDocument();
					$doc->load($userXML);
					$xpath = new DOMXpath($doc);
					
					$query = "//people/person[login = '".$_SESSION["userID"]."']/pages/page[@id = '".$pageID."']";
					
					//run the query
					$page = $xpath->query($query);
					
					$_SESSION["pageID"]      = $page->item(0)->attributes->item(0)->nodeValue;
					$_SESSION["pageTitle"]   = $page->item(0)->attributes->item(1)->nodeValue;
					$_SESSION["pageType"]    = $page->item(0)->attributes->item(2)->nodeValue;
					$_SESSION["pageContent"] = $page->item(0)->nodeValue;
            ?>
                <h2>Edit Page</h2>
                <?php if(!empty($_SESSION["message"])) echo "<div id=\"message\">".$_SESSION["message"]."</div>"; ?>
                <?php if(!empty($_SESSION["errormessage"])) echo "<div id=\"errormessage\">".$_SESSION["errormessage"]."</div>"; ?>
                <form action="managePage?action=doEdit" method="post" name="form1">
                    <fieldset class="rssForm">
                        <div>
                            <label for="Title">Title:</label>
                            <input type="text" name="Title" size="70" value="<?php echo $_SESSION["pageTitle"]; ?>" />
                        </div>
                        <p class="note"><strong>Note:</strong> The ID you give to your page will be used in its url<br/> <strong>Example:</strong> http://cobweb.ecn.purdue.edu/~gekco/research-group/<span class="highlight">members?id=<?php echo $_SESSION["userID"];?>&amp;page=<strong>ID</strong></span></p> 
                        <div>
                            <label for="ID">ID:</label>
                            <input type="text" name="ID" size="70" value="<?php echo $_SESSION["pageID"]; ?>" disabled="disabled" />
							<input type="hidden" value="<?php echo $_SESSION["pageID"]; ?>" name="hID"/>
                        </div>
                        <div>
                            <label for="Type">Type:</label>
                        	<select name="Type" disabled="disabled">
                            	<option <?php if($_SESSION["pageType"] == "bio") echo "selected=\"selected\""; ?> value="bio">Biography</option>
                            	<option <?php if($_SESSION["pageType"] == "summary") echo "selected=\"selected\""; ?> value="summary">Summary</option>
                            	<option <?php if($_SESSION["pageType"] == "project") echo "selected=\"selected\""; ?> value="project">Project</option>
                            </select>
                            <input type="hidden" value="<?php echo $_SESSION["pageType"]; ?>" name="hType"/>
                        </div>
                        <p class="note"><strong>Note:</strong> To add images or links to media, first upload your files to your folder <span class="highlight">/member-files/<?php echo $_SESSION["userID"];?>/</span></p> 
                        <div>
							<?php                            
                            $oFCKeditor = new FCKeditor('FCKeditor1') ;
                            $oFCKeditor->BasePath	= '/dev/prototype/assets/fckeditor/';
                            $oFCKeditor->Height = '500';
							
							$oFCKeditor->Config['BaseHref '] = $siteRoot;							
							$oFCKeditor->Config['SkinPath']  = '/dev/prototype/assets/fckeditor/editor/skins/office2003/' ;
							
							$oFCKeditor->Value = $_SESSION["pageContent"];
                            $oFCKeditor->Create() ;
                            ?>
                        </div>
                        <div class="button">
                            <input type="submit" name="submit" value="Submit" class="btn-submit"  />
                            <input type="submit" name="submit" value="Cancel" class="btn-submit"  />
                        </div>
                    </fieldset>
                </form>         
            <?php
				}
				elseif($action == "showDelete")
				{
					//Set up path to XML
					//Load XML	
					// create new DOM and XPath objects and load the XML file
					$doc = new DOMDocument();
					$doc->load($userXML);
					$xpath = new DOMXpath($doc);
					
					$query = "//people/person[login = '".$_SESSION["userID"]."']/pages/page[@id = '".$pageID."']";
					
					//run the query
					$page = $xpath->query($query);
					
					$_SESSION["pageID"]      = $page->item(0)->attributes->item(0)->nodeValue;
					$_SESSION["pageTitle"]   = $page->item(0)->attributes->item(1)->nodeValue;
					$_SESSION["pageType"]    = $page->item(0)->attributes->item(2)->nodeValue;
					$_SESSION["pageContent"] = $page->item(0)->nodeValue;
            ?>
                <h2>Delete Page</h2>
                <h3>Are you sure you want to delete the following page?</h3>
                <?php if(!empty($_SESSION["message"])) echo "<div id=\"message\">".$_SESSION["message"]."</div>"; ?>
                <?php if(!empty($_SESSION["errormessage"])) echo "<div id=\"errormessage\">".$_SESSION["errormessage"]."</div>"; ?>
                <form action="managePage?action=doDelete" method="post" name="form2">
                	<input type="hidden" name="ID" value="<?php echo $pageID;?>" />
                    <fieldset class="rssForm">
                        <div>
                            <label>Title:</label>
                            <p><?php echo $_SESSION["pageTitle"]; ?></p>
                        </div>
                        <div>
                            <label>ID:</label>
                            <p><?php echo $_SESSION["pageID"];?></p>
                        </div>
                        <div>
                            <label>Type:</label>
                            <p><?php echo $_SESSION["pageType"];?></p>
                        </div>
                        <div>
                            <label>Content:</label>
	                        <div class="deleteContent"><?php echo $_SESSION["pageContent"];?></div>
                        </div>
                        <div class="button">
                            <input type="submit" name="submit" value="Delete" class="btn-submit"  />
                            <input type="submit" name="submit" value="Cancel" class="btn-submit"  />
                        </div>
                    </fieldset>
                </form>          
            <?php
				}
			?>
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
	}
	/******************************************************************
		doAdd - Adds a new content page
	*******************************************************************/
	elseif($action == "doAdd")
	{
		$submit = $_POST["submit"];
		$_SESSION["pageID"]   = stripslashes($_POST["ID"]);
		$_SESSION["pageTitle"]   = stripslashes($_POST["Title"]);
		$_SESSION["pageContent"] = stripslashes($_POST["FCKeditor1"]);
		
		//if they hit cancel from any page take them back to the main page
		if($submit == "Cancel")
		{
			cleanup();
			header("Location: manageUser");
			exit;
		}
		
		
		/******************************************************************
			Validate
		*******************************************************************/
		$_SESSION["message"] = "";
		$_SESSION["errormessage"] = "";
		validateTitle($_SESSION["pageTitle"]);
		validateID($_SESSION["pageID"], $userXML);
		
		// create new DOM object and load the XML file
		$doc = new DOMDocument();
		$doc->load($userXML);
		$xpath = new DOMXpath($doc);
		
		//Create the new page node using posted data
		$newPage = $doc->createElement("page");
		$newPage->setAttribute("id", $_SESSION["pageID"]);
		$newPage->setAttribute("title", $_SESSION["pageTitle"]);
		$newPage->setAttribute("type", "project");
		$newPage->appendChild($doc->createCDATASection($_SESSION["pageContent"]));
		
		$query = "//people/person[login = '".$_SESSION["userID"]."']/pages";
		
		//run the query
		$pages = $xpath->query($query);
		
		$pages->item(0)->appendChild($newPage);
	
		$doc->formatOutput = true;
		
		//save the changes
		$doc->save($userXML);
		
		$_SESSION["message"] = "Page Added Successfully!";
		
		//cleanup
		cleanup();
		header("Location: manageUser");
		exit;
	}
	/******************************************************************
		doEdit - Updates a Page Node
	*******************************************************************/
	elseif($action == "doEdit")
	{
		$submit = $_POST["submit"];
		$_SESSION["pageID"]   = stripslashes($_POST["hID"]);
		$_SESSION["pageTitle"]   = stripslashes($_POST["Title"]);
		$_SESSION["pageType"]   = stripslashes($_POST["hType"]);
		$_SESSION["pageContent"] = stripslashes($_POST["FCKeditor1"]);
		
		//if they hit cancel from any page take them back to the main page
		if($submit == "Cancel")
		{
			cleanup();
			header("Location: manageUser");
			exit;
		}
		
		// create new DOM and XPath objects and load the XML file
		$doc = new DOMDocument();
		$doc->load($userXML);
		$xpath = new DOMXpath($doc);
		
		//create a replacement node
		$newPageNode = $doc->createElement("page");
		$newPageNode->setAttribute("id", $_SESSION["pageID"]);
		$newPageNode->setAttribute("title", $_SESSION["pageTitle"]);
		$newPageNode->setAttribute("type", $_SESSION["pageType"]);
		$newPageNode->appendChild($doc->createCDATASection($_SESSION["pageContent"]));
		
		//get the page node to replace
		$query = "//people/person[login = '".$_SESSION["userID"]."']/pages/page[@id = '".$_SESSION["pageID"]."']";
		$pageNode = $xpath->query($query)->item(0);
		
		//get the page node to delete
		$query = "//people/person[login = '".$_SESSION["userID"]."']/pages";
		$pages = $xpath->query($query);
		$pages->item(0)->replaceChild($newPageNode, $pageNode);
		
		//save the changes
		$doc->save($userXML);
		
		$_SESSION["message"] = "Page Updated Successfully!";
		//cleanup
		cleanup();
		header("Location: manageUser");
		exit;
	}
	/******************************************************************
		doDelete - Deletes a page Node
	*******************************************************************/
	elseif($action == "doDelete")
	{
		$submit = $_POST["submit"];
		$_SESSION["pageID"]   = stripslashes($_POST["ID"]);
		
		//if they hit cancel from any page take them back to the main page
		if($submit == "Cancel")
		{
			cleanup();
			header("Location: manageUser");
			exit;
		}
		
		if($_SESSION["pageID"] == "bio" || $_SESSION["pageID"] == "summary")
		{
			cleanup();
			$_SESSION["message"] = "";
			$_SESSION["errormessage"] = "You cannot delete your Biography or Summary page.";
			header("Location: manageUser");
			exit;
		}
		
		// create new DOM and XPath objects and load the XML file
		$doc = new DOMDocument();
		$doc->load($userXML);
		$xpath = new DOMXpath($doc);
		
		//get the page node to delete
		$query = "//people/person[login = '".$_SESSION["userID"]."']/pages/page[@id = '".$_SESSION["pageID"]."']";
		$pageNode = $xpath->query($query);
		
		//get the parent Item node for this guid
		$pagesNode = $pageNode->item(0)->parentNode;

		//remove this itemNode
		$pagesNode->removeChild($pageNode->item(0));
		
		//save the changes to the xml document
		$doc->save($userXML);
		
		$_SESSION["message"] = "Page Deleted Successfully!";
		//cleanup
		cleanup();
		header("Location: manageUser");
		exit;
	}
	
	/******************************************************************
		Validate ID - tests if page ID is already in use
	*******************************************************************/
	function validateID($newID, $XMLfile)
	{
		// create new DOM object and load the XML file
		$doc = new DOMDocument();
		$doc->load($XMLfile);
		$xpath = new DOMXpath($doc);
		
		$query = "//people/person[login = '".$_SESSION["userID"]."']/pages/page[@id = '".$newID."']";
		
		//run the query
		$page = $xpath->query($query);
		
		$testObj = $page->item(0);
		
		if(!empty($testObj))
		{
			$_SESSION["errormessage"] = "ID is already in use. Please try again.";
			
			header("Location: managePage");
			exit;
		}
		elseif($newID == "")
		{
			$_SESSION["errormessage"] = "You must enter an ID. Please try again.";
			
			header("Location: managePage");
			exit;
		}
	
	}
	
	function validateTitle($input)
	{
		if($input == "")
		{
			$_SESSION["errormessage"] = "You must enter a Title. Please try again.";
			
			header("Location: managePage");
			exit;
		}
	}

	function cleanup(){
		$_SESSION["pageID"]      = "";
		$_SESSION["pageTitle"]   = "";
		$_SESSION["pageType"]    = "";
		$_SESSION["pageContent"] = "";
		$_SESSION["errormessage"] = "";
	}	
	
	clear_messages();	
?>		
	





