<?php session_start(); 
include("../assets/php/constants.php");
check_user_login();
?>
<?php
		// this block of code makes the main manage page when the querystring for manage is empty
		if(!empty($HTTP_GET_VARS["manage"]))
		{
			if(($HTTP_GET_VARS["manage"] != "doAdd") && ($HTTP_GET_VARS["manage"] != "doEdit") && ($HTTP_GET_VARS["manage"] != "doDelete"))
			{
				?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Manage News \\ The Nanoelectronic Modeling Group \\ Purdue University</title>
            <meta name="keywords" content="gekco, Gerhard, nano, Gerhard Klimeck, JPL, HPCC, Quantum Device Simulation, Resonant Tunneling Diodes, Green Functions, nanoelectronics, NEMO, heterostructures, Genetic algorithm, parallel, 3-D, nano, nanotechnology, NCN, Nanotechnology, Computation, Klimeck, nano, Gerhard, Post doc, Post-doc, Post, Doc, Opportunity, job, Hire, jobs, programming, students, C++, python, fortran, programmer, opportunity, software, engineer, software engineer, nanohub, nanohub.org, cyber, infrastructure" />
            <meta name="description" content="The home of the Nanoelectronic Modeling Group and Gerhard Klimeck" />
            <meta name="language" content="en-us" />
            <style media="all" type="text/css"> @import url("<?php echo $siteRoot; ?>assets/css/base.css"); </style>
            <style media="screen" type="text/css"> @import url("<?php echo $siteRoot; ?>assets/css/screen.css"); </style>
            <script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/jquery-1.3.2.min.js"></script>   
            <script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/jquery.plugins.js"></script>   
            <script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/setup.js"></script>   
            <link type="image/x-icon" href="<?php echo $siteRoot; ?>assets/img/favicon.ico" rel="shortcut icon" />
            <link rel="alternate" type="application/rss+xml" title="The Klimeck Rearch Group - Recent News" href="<?php echo $siteRoot; ?>assets/xml/rss.xml"/>    
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
                        <h1>Manage News</h1>
                </div>
            </div> 
        <!-- @end mast -->
            <div id="content">
                <div class="center">
                    <div id="crumbs">
                        <a href="<?php echo $siteRoot; ?>">Home</a>
                            &gt; <a href="<?php echo $siteRoot; ?>manage/manageNews">Manage News</a>
                    </div>
                    <div class="main-col">
				<?php 
			} // end nested if
		}  
		// this block of code makes the main manage page when the querystring for manage is empty
		if(empty($HTTP_GET_VARS["manage"]))
			{
			?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Manage News \\ The Nanoelectronic Modeling Group \\ Purdue University</title>
            <meta name="keywords" content="gekco, Gerhard, nano, Gerhard Klimeck, JPL, HPCC, Quantum Device Simulation, Resonant Tunneling Diodes, Green Functions, nanoelectronics, NEMO, heterostructures, Genetic algorithm, parallel, 3-D, nano, nanotechnology, NCN, Nanotechnology, Computation, Klimeck, nano, Gerhard, Post doc, Post-doc, Post, Doc, Opportunity, job, Hire, jobs, programming, students, C++, python, fortran, programmer, opportunity, software, engineer, software engineer, nanohub, nanohub.org, cyber, infrastructure" />
            <meta name="description" content="The home of the Nanoelectronic Modeling Group and Gerhard Klimeck" />
            <meta name="language" content="en-us" />
            <style media="all" type="text/css"> @import url("<?php echo $siteRoot; ?>assets/css/base.css"); </style>
            <style media="screen" type="text/css"> @import url("<?php echo $siteRoot; ?>assets/css/screen.css"); </style>
            <script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/jquery-1.3.2.min.js"></script>   
            <script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/jquery.plugins.js"></script>   
            <script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/setup.js"></script>   
            <link type="image/x-icon" href="<?php echo $siteRoot; ?>assets/img/favicon.ico" rel="shortcut icon" />
            <link rel="alternate" type="application/rss+xml" title="The Klimeck Rearch Group - Recent News" href="<?php echo $siteRoot; ?>assets/xml/rss.xml"/>    
            <!-- [if lte IE 6] >
            <style media="screen" type="text/css"> @import url("<?php echo $siteRoot; ?>assets/css/screen-IE6.css"); </style>
            <script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/iepngfix_tilebg.js"></script>   
            <! [endif] -->
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
                        <h1>Manage News</h1>
                </div>
            </div> 
        <!-- @end mast -->
            <div id="content">
                <div class="center">
                    <div id="crumbs">
                        <a href="<?php echo $siteRoot; ?>">Home</a>
                            &gt; <a href="<?php echo $siteRoot; ?>/manage/manageNews">Manage News</a>
                    </div>
                    <div class="main-col">
                    <h2>Current News Items</h2>
                        <?php if(!empty($_SESSION["message"])) echo "<div id=\"message\">".$_SESSION["message"]."</div>"; ?>
                        <div class="RSSMain">
                        <a class="btn" href="manageNews?manage=add" class="addNewItem">Add New Item<span/></a><br />
						<table>
						<?php
						$_SESSION["guid"] = 0;
						
						// create new DOM and XPath objects and load the XML file
						$doc = new DOMDocument();
						$doc->load($rssXML);
						$xpath = new DOMXpath($doc);
						
						//get all the item elements
						$itemArray = $doc->getElementsByTagName("item");
						//loop thru the item elements
						foreach($itemArray as $item)
						{
							$iGuid = 0;
							//get the global unique identifier for this item
							$iGuid = $item->getElementsByTagName("guid");
							$iGuidValue = (int)$iGuid->item(0)->nodeValue;
							// process to get the max guid
							if ((int)$iGuidValue > (int)$_SESSION["guid"])
							{
								$_SESSION["guid"] = $iGuidValue;
							}
							
						?>
							<tr>
                                <td><h3><?php echo$item->getElementsByTagName("title")->item(0)->nodeValue;?></h3>
                                <?php echo substr($item->getElementsByTagName("description")->item(0)->nodeValue,0,100)."....";?>
                                <br/><br/>[<a href="<?php echo $siteRoot;?>news?id=<?php echo $item->getElementsByTagName("guid")->item(0)->nodeValue;?>">Full Article</a>]</td>
                            	<td><a class="btn" href="manageNews?manage=edit&amp;guid=<?php echo $iGuidValue;?>">Edit<span/></a></td>
                                <td><a class="btn" href="manageNews?manage=delete&amp;guid=<?php echo $iGuidValue;?>">Delete<span/></a></td>
                            </tr>
						<?php
						}
						?>
					
					</table>		
				</div>
				<?php
			} // end if checking for empty manage querystring
			elseif($HTTP_GET_VARS["manage"] == "add")
			{
				$author = $_SESSION["userName"];
				showAdd($author);
			}
			elseif($HTTP_GET_VARS["manage"] == "doAdd")
			{
				//get the posted data
				$submit             = $HTTP_POST_VARS["submit"];
				$_SESSION["title"]  = stripslashes($HTTP_POST_VARS["Title"]);
				$_SESSION["desc"]   = stripslashes($HTTP_POST_VARS["Description"]);
				$_SESSION["link"]   = stripslashes($HTTP_POST_VARS["Link"]);
				$_SESSION["author"] = stripslashes($HTTP_POST_VARS["Author"]);
				doAdd($submit, $rssXML);
				$_SESSION["message"] = "Item Added Successfully!";
				
				//redirect back to manageNews
				header("Location: manageNews");
				exit;
			}
			elseif($HTTP_GET_VARS["manage"] == "edit")
			{
				$guid = $HTTP_GET_VARS["guid"];
				showEdit($guid, $rssXML);
			}
			elseif($HTTP_GET_VARS["manage"] == "doEdit")
			{
				$guid = $HTTP_GET_VARS["guid"];
				
				//get the posted data
				$submit             = $HTTP_POST_VARS["submit"];
				$_SESSION["title"]  = stripslashes($HTTP_POST_VARS["Title"]);
				$_SESSION["desc"]   = stripslashes($HTTP_POST_VARS["Description"]);
				$_SESSION["link"]   = stripslashes($HTTP_POST_VARS["Link"]);
				$_SESSION["author"] = stripslashes($HTTP_POST_VARS["Author"]);
				//call doEdit passing in GUID, xmlfile constant path, and value of submit button text (whether it was cancel or not)
				doEdit($guid, $rssXML, $submit);
				$_SESSION["message"] = "Item Edited Successfully!";
				
				//redirect back to rss Main
				header("Location: manageNews");
				exit;
			}
			elseif($HTTP_GET_VARS["manage"] == "delete")
			{
				$guid = $HTTP_GET_VARS["guid"];
				showDelete($guid, $rssXML);
			}
			elseif($HTTP_GET_VARS["manage"] =="doDelete")
			{
				$guid = $HTTP_GET_VARS["guid"];
				$submit = $HTTP_POST_VARS["submit"];
				doDelete($guid, $rssXML, $submit);
				
				$_SESSION["message"] = "Item Deleted Successfully!";
				
				//redirect back to rss Main
				header("Location: manageNews");
				exit;
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
/************************************************************************
FUNCTION:    showAdd($author)
ARGUMENTS:   $author - the author name to be autopopulated in the add new
		     item form. This is a constant set in constants.php and included
			 at the top of this page.
DESCRIPTION: This function is called when the querystring manage = "add"
             and this function just builds a form to add a new RSS item.
			 It autopopulates the author field with $author thats defined
			 in the constants.php file that was included.
************************************************************************/
function showAdd($author)
{
	echo "<h2>Add New Item</h2>";
	if(!empty($_SESSION["message"])) echo "<div id=\"message\">".$_SESSION["message"]."</div>";
	if(!empty($_SESSION["errormessage"])) echo "<div id=\"errormessage\">".$_SESSION["errormessage"]."</div>";
	?>
	<form name="form0" action="manageNews?manage=doAdd" method="post">
		<fieldset class="rssForm">
			<div>
				<label for="Title">Title:</label>
				<input type="text" name="Title" size="70" value="<?php if(!empty($_SESSION["title"])) echo $_SESSION["title"]; ?>" />
			</div>
			<div>
				<label for="Description">Description:</label>
				<textarea name="Description" cols="67" rows="5" ><?php if(!empty($_SESSION["desc"])) echo $_SESSION["desc"]; ?></textarea>
			</div>
			<div>
				<label for="Link">Link:</label>
				<input type="text" name="Link" size="70" value="<?php if(!empty($_SESSION["link"])) echo $_SESSION["link"]; else echo "http://willgrauvogel.com/dev/prototype/news"; ?>" />
			</div>
			<div>
				<label for="Author">Author:</label>
				<input type="hidden" name="Author" size="70" value="<?php if(!empty($_SESSION["author"])) echo $_SESSION["author"]; else echo $author; ?>" />
				<input disabled="disabled" type="text" name="" size="70" value="<?php if(!empty($_SESSION["author"])) echo $_SESSION["author"]; else echo $author; ?>" />
			</div>
			<div class="button">
				<input type="submit" name="submit" value="Add Item" class="btn-submit" />
				<input type="submit" name="submit" value="Cancel" class="btn-submit"  />
			</div>
		</fieldset>
	</form>
	<?php
} //end function showAdd()


/************************************************************************
FUNCTION:    doAdd($submit, $XMLfile)
ARGUMENTS:   $submit - The value of the text (value property) of the input
			 that was clicked when the form was submitted. This is used so 
			 that two <input type="submit"> inputs can be used. The $submit
			 variable will contain the text of the button clicked so you know
			 which one it was. 
			 $XMLfile - This is the path to the XML file where the RSS items
			 are being stored. Its set in the constants.php file thats included
			 at the top of the page. 
DESCRIPTION: This function is called when the user submits the add new item
			 form. It gets called whehter they hit the Submit or Cancel button.
			 The $submit variable is checked first to see if they hit cancel, and
			 if they did, they are taken back to the main page. If not, the next
			 GUID is found by incrementing a session variable containing the highest
			 GUID. Two DOM objects are created so that the contents of the XML file
			 can be copied and rebuilt into a new file. After copying the basic
			 tags at the top of the XML file, the new <item> element is built
			 and added. Then a loop goes thru all the other <item> elements from
			 the previous file so the new file is complete with all the other
			 elements and has the newest (highest guid) at the top.
************************************************************************/
function doAdd($submit, $XMLfile)
{
	//if they hit cancel from any page take them back to the main page
	if($submit == "Cancel")
	{
		// call cleanup to clear the session variables
		cleanup();
		header("Location: manageNews");
		exit;
	}
	
	// get the session guid variable and increment it for the new RSS Item
	$guid   = $_SESSION["guid"];
	$guid++;
	
	$_SESSION["errormessage"] = "";
	//call Validation function
	Validate($_SESSION["title"], $_SESSION["desc"], $_SESSION["link"], $_SESSION["author"]);
	if(!$_SESSION["errormessage"] == "")
	{
		$_SESSION["failedValidate"] = true;
		header("Location: manageNews?manage=add");
		exit;
	}
	
	// a current date variable
	$pubDate = date(DATE_ATOM);
	
	// create new DOM object and load the XML file
	$doc = new DOMDocument();
	$doc->load($XMLfile);
	
	//create a second DOM object that will be used to copy nodes into
	//setting the preserve white space to false combined later with formatOutput = true
	// will create the document tabbed correctly
	$newDoc = new DOMDocument('1.0');
	$newDoc->preserveWhiteSpace = false;
	
	//create the RSS Node
	$rss = $newDoc->createElement("rss");
	//create attribute of version and assign it 2.0 as a value
	$rss->setAttribute("version", "2.0");
	//append the RSS node
	$newDoc->appendChild($rss);
	
	//make the new RSS node the root Node
	$root = $newDoc->documentElement;
	
	//create the channel element
	$channelElement = $newDoc->createElement("channel");
	//append the channel element to the new XML file
	$root->appendChild($channelElement);
	
	//get the new channel node of the new XML File
	$channelNode = $root->getElementsByTagName("channel")->item(0);
	
	//get the main title text from the previous XML File and import it into the new XML File
	// first argument of importNode is the node to import (i'm using getelements by tag name to get the node)
	//second argument is true if you want to get the childnodes, but in this case there are no childNodes
	$mainTitleNode = $newDoc->importNode($doc->getElementsByTagName("title")->item(0), true);
	//append the title to the new XML file
	$channelNode->appendChild($mainTitleNode);
	
	//get the main link text from the previous XML File. and import it into the new XML File
	$mainLinkNode = $newDoc->importNode($doc->getElementsByTagName("link")->item(0), true);
	//append the title to the new XML file
	$channelNode->appendChild($mainLinkNode);
	
	//get the main description text from the previous XML File. and import it into the new XML File
	$mainDescNode = $newDoc->importNode($doc->getElementsByTagName("description")->item(0), true);
	//append the title to the new XML file
	$channelNode->appendChild($mainDescNode);
	
	//get the language text from the previous XML File. and import it into the new XML File
	$languageNode = $newDoc->importNode($doc->getElementsByTagName("language")->item(0), true);
	//append the title to the new XML file
	$channelNode->appendChild($languageNode);
	
	//get the copyright text from the previous XML File. and import it into the new XML File
	$copyrightNode = $newDoc->importNode($doc->getElementsByTagName("copyright")->item(0), true);
	//append the title to the new XML file
	$channelNode->appendChild($copyrightNode);
	
	//get the docs text from the previous XML File. and import it into the new XML File
	$docsNode = $newDoc->importNode($doc->getElementsByTagName("docs")->item(0), true);
	//append the title to the new XML file
	$channelNode->appendChild($docsNode);
	
	//create a new lastBuildDate element for the new build date
	$lastBuildDateNode = $newDoc->createElement("lastBuildDate");
	//append the text node containing a date object set as [day of week, Month day of month, Year]
	$lastBuildDateNode->appendChild($newDoc->createTextNode(date(DATE_ATOM)));
	//apppend the whole builddate node to the new XML file
	$channelNode->appendChild($lastBuildDateNode);
		
	//get the image node and childnodes from the previous XML File. and import it into the new XML File
	$imageNode = $newDoc->importNode($doc->getElementsByTagName("image")->item(0), true);
	//append the title to the new XML file
	$channelNode->appendChild($imageNode);
	
	/***********************************************************
	//     	START BUILDING THE NEW ITEM FROM POSTED DATA
	***********************************************************/
	$item = $newDoc->createElement("item");
	
	//create the title element
	$titleNode = $newDoc->createElement("title");
	$titleNode->appendChild($newDoc->createTextNode($_SESSION["title"]));
	$item->appendChild($titleNode);
	
	//create the description element
	$descNode = $newDoc->createElement("description");
	$descNode->appendChild($newDoc->createTextNode($_SESSION["desc"]));
	$item->appendChild($descNode);
	
	//create the link element
	$linkNode = $newDoc->createElement("link");
	$linkNode->appendChild($newDoc->createTextNode($_SESSION["link"]));
	$item->appendChild($linkNode);
	
	//create the GUID element
	$guidNode = $newDoc->createElement("guid");
	$guidNode->appendChild($newDoc->createTextNode($guid));
	$item->appendChild($guidNode);
	
	//create the author element
	$authorNode = $newDoc->createElement("author");
	$authorNode->appendChild($newDoc->createTextNode($_SESSION["author"]));
	$item->appendChild($authorNode);
	
	//create the pudDate element
	$pudDateNode = $newDoc->createElement("pubDate");
	$pudDateNode->appendChild($newDoc->createTextNode($pubDate));
	$item->appendChild($pudDateNode);
	
	/***********************************************************
	//     	        END BUILDING THE NEW ITEM 
	***********************************************************/
	
	//append the entire item node that was just built to the new xml document
	$channelNode->appendChild($item);
	
	//now the other items from the old XML file need to be added to the new XML File
	$itemsArray = $doc->getElementsByTagName("item");
	
	// loop thru each of the items, and add it to the new XML file
	foreach($itemsArray as $item)
	{
		$tempNode = $newDoc->importNode($item, true);
		$channelNode->appendChild($tempNode);
	}
	
	//format the output so that its tabbed correctly
	$newDoc->formatOutput = true;
	// save the document
	$newDoc->save($XMLfile);
	
	//cleanup
	cleanup();

} // end function doAdd()


/************************************************************************
FUNCTION:    showEdit($guid, $XMLfile)
ARGUMENTS:   $guid - the global unique identifier that was passed in as
             a querystring to the manage page. This number represents the item
			 to be edited, and is needed for the xpath query to find the 
			 right <item>.
			 $XMLfile - This is the path to the XML file where the RSS items
			 are being stored. Its set in the constants.php file thats included
			 at the top of the page.
DESCRIPTION: This function is called when the querystring manage = "edit".
             This function builds a form thats just like the add form except
			 that it autopopulates the form with the data about the <item> that
			 corresponds to the $guid that was passed in. Initially an xpath query
			 is used to search for the item element that has a guid matching
			 $guid. This is how the correct <item> is found.
************************************************************************/
function showEdit($guid, $XMLfile)
{
	// create new DOM and XPath objects and load the XML file
	$doc = new DOMDocument();
	$doc->load($XMLfile);
	$xpath = new DOMXpath($doc);
	
	// set the root element
	$root = $doc->documentElement;
	
	// set up the query to find the filename element matching the name of the file
	$query = "//rss/channel/item/guid[. = '".$guid."']";
	
	//run the query
	$guidNode = $xpath->query($query);
	
	//get the parent Item node for this guid
	$itemNode = $guidNode->item(0)->parentNode;
	
	echo "<h2>Edit Item</h2>";
	if(!empty($_SESSION["message"])) echo "<div id=\"message\">".$_SESSION["message"]."</div>";
	if(!empty($_SESSION["errormessage"])) echo "<div id=\"errormessage\">".$_SESSION["errormessage"]."</div>";
	?>
	<form name="form0" action="manageNews?manage=doEdit&guid=<?php echo $guid; ?>" method="post">
		<fieldset class="rssForm">
			<div>
				<label for="Title">Title:</label>
				<input type="text" name="Title" size="70" value="<?php if(empty($_SESSION["failedValidate"])) // if empty cause no session exits yet echo item
																			echo $itemNode->getElementsByTagName("title")->item(0)->nodeValue;
																		elseif($_SESSION["failedValidate"] == true) // if errors echo what they posted 
																			echo $_SESSION["title"]; 
																		else echo $itemNode->getElementsByTagName("title")->item(0)->nodeValue; ?>" />
			</div>
			<div>
				<label for="Description">Description:</label>
				<textarea name="Description" cols="67" rows="10"><?php if(empty($_SESSION["failedValidate"])) // if empty cause no session exits yet echo item
																			echo $itemNode->getElementsByTagName("description")->item(0)->nodeValue;
				 													  elseif($_SESSION["failedValidate"] == true) // if errors echo what they posted 
																	  		echo $_SESSION["desc"]; 
																	  else echo $itemNode->getElementsByTagName("description")->item(0)->nodeValue; ?></textarea>
			</div>
			<div>
				<label for="Link">Link:</label>
				<input type="text" name="Link" size="70" value="<?php if(empty($_SESSION["failedValidate"])) // if empty cause no session exits yet echo item
																			echo $itemNode->getElementsByTagName("link")->item(0)->nodeValue;
																	   elseif($_SESSION["failedValidate"] == true) // if errors echo what they posted
																			echo $_SESSION["link"]; 
																	   else echo $itemNode->getElementsByTagName("link")->item(0)->nodeValue; ?>" />
			</div>
			<div>
				<label for="Author">Author:</label>
				<input type="text" name="Author" size="70" value="<?php if(empty($_SESSION["failedValidate"])) //if empty cause no session exits yet echo item
																			echo $itemNode->getElementsByTagName("author")->item(0)->nodeValue;
																		elseif($_SESSION["failedValidate"] == true) // if errors echo what they posted
																			echo $_SESSION["author"]; 
																		else echo $itemNode->getElementsByTagName("author")->item(0)->nodeValue; ?>" />
			</div>
			<div class="button">
				<input type="submit" name="submit" value="Submit" class="btn-submit" />
				<input type="submit" name="submit" value="Cancel" class="btn-submit" />
			</div>
		</fieldset>
	</form>
<?php
} // end function showEdit()


/************************************************************************
FUNCTION:    doEdit($guid, $XMLfile, $submit)
ARGUMENTS:   $guid - the global unique identifier that was passed in as
             a querystring to the manage page. This number represents the item
			 to be edited, and is needed for the xpath query to find the 
			 right <item>.
			 $XMLfile - This is the path to the XML file where the RSS items
			 are being stored. Its set in the constants.php file thats included
			 at the top of the page.
			 $submit - The value of the text (value property) of the input
			 that was clicked when the form was submitted. This is used so 
			 that two <input type="submit"> inputs can be used. The $submit
			 variable will contain the text of the button clicked so you know
			 which one it was. 
DESCRIPTION: This function is called when the user submits the edit item
			 form. It gets called whehter they hit the Submit or Cancel button.
			 The $submit variable is checked first to see if they hit cancel, and
			 if they did, they are taken back to the main page. If not, an
			 xpath query is performed to search for the <item> element that has
			 a guid matching $guid. Once this is found each element within <item>
			 is changed to the new data that was posted from the edit item form.
************************************************************************/
function doEdit($guid, $XMLfile, $submit)
{
	//if they hit cancel from any page take them back to the main page
	if($submit == "Cancel")
	{
		cleanup();
		header("Location: manageNews");
		exit;
	}
	
	// make sure session variable for error messages is set to nothing before validation
	$_SESSION["errormessage"] = "";
	
	//call Validation function
	Validate($_SESSION["title"], $_SESSION["desc"], $_SESSION["link"], $_SESSION["author"]);
	if(!$_SESSION["errormessage"] == "")
	{
		$_SESSION["failedValidate"] = true;
		header("Location: manageNews?manage=edit&guid=$guid");
		exit;
	}
	
	// create new DOM and XPath objects and load the XML file
	$doc = new DOMDocument();
	$doc->load($XMLfile);
	$xpath = new DOMXpath($doc);
	
	// set the root element
	$root = $doc->documentElement;
	
	// set up the query to find the filename element matching the name of the file
	$query = "//rss/channel/item/guid[. = '".$guid."']";
	
	//run the query
	$guidNode = $xpath->query($query);
	
	//get the parent Item node for this guid
	$itemNode = $guidNode->item(0)->parentNode;
	
	// get the title Node for this itemNode
	$titleNode = $itemNode->getElementsByTagName("title")->item(0);
	// set the value of this title Node to be the new title that was posted from the form
	$titleNode->nodeValue = $_SESSION["title"];
	
	// get the description Node for this itemNode
	$descNode = $itemNode->getElementsByTagName("description")->item(0);
	// set the value of this description Node to be the new description that was posted from the form
	$descNode->nodeValue = $_SESSION["desc"];
	
	// get the link Node for this itemNode
	$linkNode = $itemNode->getElementsByTagName("link")->item(0);
	// set the value of this link Node to be the new link that was posted from the form
	$linkNode->nodeValue = $_SESSION["link"];
	
	// get the author Node for this itemNode
	$authorNode = $itemNode->getElementsByTagName("author")->item(0);
	// set the value of this author Node to be the new author that was posted from the form
	$authorNode->nodeValue = $_SESSION["author"];
	
	// get the pub date Node for this itemNode
	$pubDateNode = $itemNode->getElementsByTagName("pubDate")->item(0);
	// set the value of this pub date Node to be the current date and time
	$pubDateNode->nodeValue = date(DATE_ATOM);
	
	//save the changes
	$doc->save($XMLfile);
	
	//cleanup
	cleanup();
	
} // end function doEdit()


/************************************************************************
FUNCTION:    showDelete($guid, $XMLfile)
ARGUMENTS:   $guid - the global unique identifier that was passed in as
             a querystring to the manage page. This number represents the item
			 to be deleted, and is needed for the xpath query to find the 
			 right <item>.
			 $XMLfile - This is the path to the XML file where the RSS items
			 are being stored. Its set in the constants.php file thats included
			 at the top of the page.
DESCRIPTION: This function is called when the querystring manage = "delete".
             This function uses an xpath query to find the <item> element that
			 has a guid matching $guid. It builds a small table to show you
			 what the information will be deleted, and asks you if you are sure
			 that you want to delete it.
************************************************************************/
function showDelete($guid, $XMLfile)
{
	// create new DOM and XPath objects and load the XML file
	$doc = new DOMDocument();
	$doc->load($XMLfile);
	$xpath = new DOMXpath($doc);
	
	// set the root element
	$root = $doc->documentElement;
	
	// set up the query to find the filename element matching the name of the file
	$query = "//rss/channel/item/guid[. = '".$guid."']";
	
	//run the query
	$guidNode = $xpath->query($query);
	
	//get the parent Item node for this guid
	$itemNode = $guidNode->item(0)->parentNode;
	echo "<h2>Delete Item</h2>";
	?>
	<form action="manageNews?manage=doDelete&guid=<?php echo $guid; ?>" method="post">
		<table cellpadding="3" width="500" class="deleteRSS">
			<tr>
				<td colspan="2">
					<strong>You are about to permanently delete the following RSS item:</strong>
				</td>
			</tr>			
			<tr>
				<td width="125px;" class="title">Title:</td>
				<td><?php echo $itemNode->getElementsByTagName("title")->item(0)->nodeValue; ?></td>
			</tr>
			<tr>
				<td class="title">Description:</td>
				<td><?php echo $itemNode->getElementsByTagName("description")->item(0)->nodeValue; ?></td>
			</tr>
			<tr>
				<td class="title">Link:</td>
				<td><?php echo "<a href=\"".$itemNode->getElementsByTagName("link")->item(0)->nodeValue."\">".$itemNode->getElementsByTagName("link")->item(0)->nodeValue."</a>" ?></td>
			</tr>
			<tr>
				<td class="title">Author:</td>
				<td><?php echo $itemNode->getElementsByTagName("author")->item(0)->nodeValue; ?></td>
			</tr>
			<tr>
				<td class="title">Pub Date:</td>
				<td><?php echo $itemNode->getElementsByTagName("pubDate")->item(0)->nodeValue; ?></td>
			</tr>
			<tr>
				<td colspan="2"><strong>Are you sure you want to delete this item?</strong></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="submit" value="Delete" class="btn-submit" />
					<input type="submit" name="submit" value="Cancel" class="btn-submit"  />
				</td>
			</tr>
		</table>
	</form>
	<?php
} // end function showDelete()



/************************************************************************
FUNCTION:    doDelete($guid, $XMLfile, $submit)
ARGUMENTS:   $guid - the global unique identifier that was passed in as
             a querystring to the manage page. This number represents the item
			 to be deleted, and is needed for the xpath query to find the 
			 right <item>.
			 $XMLfile - This is the path to the XML file where the RSS items
			 are being stored. Its set in the constants.php file thats included
			 at the top of the page.
			 $submit - The value of the text (value property) of the input
			 that was clicked when the form was submitted. This is used so 
			 that two <input type="submit"> inputs can be used. The $submit
			 variable will contain the text of the button clicked so you know
			 which one it was. 
DESCRIPTION: This function is called when the user submits the delete item
			 form. It gets called whether they hit the Submit or Cancel button.
			 The $submit variable is checked first to see if they hit cancel, and
			 if they did, they are taken back to the main page, and nothing is
			 deleted. If not, an xpath query is performed to search for the 
			 <item> element that has a guid matching $guid. Once this is found 
			 that entire <item> element is removed and the XML file is saved.
************************************************************************/
function doDelete($guid, $XMLfile, $submit)
{
	//if they hit cancel from any page take them back to the main page
	if($submit == "Cancel")
	{
		cleanup();
		header("Location: manageNews");
		exit;
	}
	
	// create new DOM and XPath objects and load the XML file
	$doc = new DOMDocument();
	$doc->load($XMLfile);
	$xpath = new DOMXpath($doc);
	
	// set the root element
	$root = $doc->documentElement;
	
	//get the channel node
	$channelNode = $root->getElementsByTagName("channel");
	
	// set up the query to find the filename element matching the name of the file
	$query = "//rss/channel/item/guid[. = '".$guid."']";
	
	//run the query
	$guidNode = $xpath->query($query);
	
	//get the parent Item node for this guid
	$itemNode = $guidNode->item(0)->parentNode;
	
	//remove this itemNode
	$channelNode->item(0)->removeChild($itemNode);
	
	//save the changes to the xml document
	$doc->save($XMLfile);
}

/************************************************************************
FUNCTION:    Validate($title, $desc, $link, $author)
ARGUMENTS:   $title - the title element of the RSS item being validated
			 $desc  - The description element of the RSS item to be validated
			 $link  - The link element of the RSS item being validated
			 $author - The author element of the RSS item being validated. 
DESCRIPTION: This function is called when a new RSS item is being added or
             edited. The values passed in are session values that posted
			 from one of the forms. $title, $desc, and $author are just 
			 checked to make sure they aren't empty. $link has a regular
			 expression to make sure that is conforms to the syntax of a valid
			 link, however, it does not actually test to see if the link
			 is real. If any errors are found, the session message variable
			 is populated. Any function that uses Validate will check the
			 session message after calling validate to see if message is
			 empty. If its not empty it redirects to the appropriate page
			 where the message will be displayed.
************************************************************************/
function Validate($title, $desc, $link, $author)
{
	//check for empty title
	if($title == "")
	{
		$_SESSION["errormessage"] = "Please Enter a Title.";
	}
	//check for empty description
	elseif($desc == "")
	{
		$_SESSION["errormessage"] = "Please Enter a Description.";
	}
	// check to see if link matches the correct syntax for a link
	elseif(!preg_match('/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i', $link))
	{
		$_SESSION["errormessage"] = "Please Enter a Valid Link.";
	}
	//check for empty author
	elseif($author == "")
	{
		$_SESSION["errormessage"] = "Please Enter an Author.";
	}
}


/************************************************************************
FUNCTION:    cleanup()
DESCRIPTION: This function clears all the session variables that are used
             for adding or editing elements as well as for error checking.
			 Its called at the end of the doEdit and doAdd functions.
************************************************************************/
function cleanup()
{
	$_SESSION["errormessage"] = "";
	$_SESSION["title"]   = "";
	$_SESSION["desc"]    = "";
	$_SESSION["link"]    = "";
	$_SESSION["author"]  = "";
	$_SESSION["failedValidate"] = false;
}

$_SESSION["message"] = "";
?>

