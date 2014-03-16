<?php
//Constants
	
	$siteRoot = "http://willgrauvogel.com/dev/prototype/";
	//RSS
	$rssXML = $_SERVER['DOCUMENT_ROOT']."/dev/prototype/assets/xml/rss.xml";
	//User Info / Pages
	$userXML = $_SERVER['DOCUMENT_ROOT']."/dev/prototype/assets/xml/people.xml";
	
	//Journal Publications
	$journalXML   = $siteRoot."assets/xml/journal.xml";
	$proceedXML   = $siteRoot."assets/xml/proceedings.xml";
	$panelXML     = $siteRoot."assets/xml/panel-discussions.xml";
	$invSemXML    = $siteRoot."assets/xml/invited-seminars.xml";
	$invConfXML   = $siteRoot."assets/xml/invited-conferences.xml";
	$confXML      = $siteRoot."assets/xml/conferences.xml";
	$techBriefXML = $siteRoot."assets/xml/technical-briefings.xml";
	$techRepXML   = $siteRoot."assets/xml/technical-reports.xml";
	$techRevXML   = $siteRoot."assets/xml/technical-reviews.xml";
	
//Functions
	function clear_messages()
	{
		$_SESSION["errormessage"]="";
		$_SESSION["message"]="";
	}
		
	function check_user_login(){
		if (empty($_SESSION["userID"]))
		{
			$_SESSION["errormessage"]="You must be logged in to view the requested page.";
			header("Location: http: ".$siteRoot."manage");
			exit;
		}
	}

	function check_user_level($inputLevel){
		if (empty($_SESSION["userLevel"]) || $_SESSION["userLevel"] != $inputLevel)
		{
			$_SESSION["errormessage"]="You are not authorized to view this page.";
			header("Location: ".$siteRoot."manage");
			exit;
		}
	}

	//Get Name of a User	
	function get_name($userID){
		// create new DOM and XPath objects and load the XML file
		$doc = new DOMDocument();
		$xmlFile = $_SERVER['DOCUMENT_ROOT']."/dev/prototype/assets/xml/people.xml";
		$doc->load($xmlFile);
		$xpath = new DOMXpath($doc);
		
		// set the root element
		$root = $doc->documentElement;
		$query = "//people/person/login[. = '".$userID."']";
		$guidNode = $xpath->query($query);
		
		//get the parent Item node
		$person = $guidNode->item(0)->parentNode;
	
		//store basic info
		$nameNode     = $person->getElementsByTagName("name")->item(0)->nodeValue;
		return($nameNode);
	}
	
	//Get Email of a User	
	function get_email($userID){
		// create new DOM and XPath objects and load the XML file
		$doc = new DOMDocument();
		$xmlFile = $_SERVER['DOCUMENT_ROOT']."/dev/prototype/assets/xml/people.xml";
		$doc->load($xmlFile);
		$xpath = new DOMXpath($doc);
		
		// set the root element
		$root = $doc->documentElement;
		$query = "//people/person/login[. = '".$userID."']";
		$guidNode = $xpath->query($query);
		
		//get the parent Item node
		$person = $guidNode->item(0)->parentNode;
	
		//store basic info
		$nameNode     = $person->getElementsByTagName("email")->item(0)->nodeValue;
		return($nameNode);
	}
	
	//Display Publications
	//Input takes the type and a list of XML nodes
	function listItems($type, $nodeList)
	{
		$output = "<ul class=\"pub-list\">";
		foreach($nodeList as $nItem)
		{
			//store the info
			$id      = $nItem->getElementsByTagName("id")->item(0)->nodeValue;
			$title   = $nItem->getElementsByTagName("title")->item(0)->nodeValue;
			$text    = $nItem->getElementsByTagName("text")->item(0)->nodeValue;
			$date    = $nItem->getElementsByTagName("date")->item(0)->nodeValue;
			$authors = $nItem->getElementsByTagName("author");
			$links   = $nItem->getElementsByTagName("link");
			
			$t = $nItem->attributes->item(0)->nodeValue;
			if($type == $t) {					
				//output the item
				$output = $output."<li>";
				//ID					
				$output = $output."<p class=\"pub-id\"><a name=\"".$id."\"></a>[".$id."]</p>";					
				$output = $output."<p class=\"pub-text\"><span class='authors'>";
				//Authors
				$objTest = $nItem->getElementsByTagName("authors")->item(0)->nodeValue;
				if (!empty($objTest)) { 
					foreach($authors as $a) {
						if($a->nodeValue != "")
							$output = $output.$a->nodeValue.", ";
					}
					//echo "</p>";
				}
				//Title
				$output = $output."</span><br/><span class='title'><strong>\"".$title."\"</strong>";
				$output = $output."</span><br/><span class='text'>".$text."</span>";
				$output = $output."<span class='date'>".$date."</span></p>";
				//Links
				$objTest = $nItem->getElementsByTagName("links")->item(0)->getElementsByTagName("link")->item(0)->attributes->item(0)->nodeValue;
				if (!empty($objTest)) { 
					$output = $output."<p class=\"pub-links\">";
					foreach($links as $x) {
						$title = $x->getAttributeNode("title")->nodeValue;
						$link = $x->getAttributeNode("url")->nodeValue;
						$output = $output."<a target='_blank' href='" . $link . "' title='" . $title . "' >" . $title . "</a>";
					}
					$output = $output."</p>";
				}
				$output = $output."</li>";
			}
		}
		$output = $output."</ul>";
		return($output);
	}
	
	//Horizontal Member Browser
	function peopleBrowser($type)
	{
		//Set up path to XML
		//Load XML	
		// create new DOM and XPath objects and load the XML file
		$doc = new DOMDocument();
		$xmlFile = $_SERVER['DOCUMENT_ROOT']."/dev/prototype/assets/xml/people.xml";
		$doc->load($xmlFile);
		$xpath = new DOMXpath($doc);


		$query = "//people/person[@type = '".$type."']";
		$nodeList = $xpath->query($query);

		$output = "<div id=\"peoplebrowser\"><ul id=\"pb-list\" >";
		foreach($nodeList as $nItem)
		{
			//store the info
			$userID   = $nItem->getElementsByTagName("login")->item(0)->nodeValue;
			$name     = $nItem->getElementsByTagName("name")->item(0)->nodeValue;
			$picPath  = $nItem->getElementsByTagName("picture")->item(0)->nodeValue;

			$output = $output."<li><a href='#".$userID."'><img alt='".$name."' width='75' height='70' src=\"/dev/prototype/member-files/portraits/list/".$picPath."\" /><span class='pb-name'>".$name."</span></a></li>";
			$output = $output."<li><a href='#".$userID."'><img alt='".$name."' width='75' height='70' src=\"/dev/prototype/member-files/portraits/list/".$picPath."\" /><span class='pb-name'>".$name."</span></a></li>";
			$output = $output."<li><a href='#".$userID."'><img alt='".$name."' width='75' height='70' src=\"/dev/prototype/member-files/portraits/list/".$picPath."\" /><span class='pb-name'>".$name."</span></a></li>";
			$output = $output."<li><a href='#".$userID."'><img alt='".$name."' width='75' height='70' src=\"/dev/prototype/member-files/portraits/list/".$picPath."\" /><span class='pb-name'>".$name."</span></a></li>";
			$output = $output."<li><a href='#".$userID."'><img alt='".$name."' width='75' height='70' src=\"/dev/prototype/member-files/portraits/list/".$picPath."\" /><span class='pb-name'>".$name."</span></a></li>";
		}
		$output = $output."<li class='clear'></li></ul>";
		$output = $output."</div>";
		return($output);
	}
	
	//List Type of Member
	function listPeople($type, $title)
	{
		//Set up path to XML
		//Load XML	
		// create new DOM and XPath objects and load the XML file
		$doc = new DOMDocument();
		$xmlFile = $_SERVER['DOCUMENT_ROOT']."/dev/prototype/assets/xml/people.xml";
		$doc->load($xmlFile);
		$xpath = new DOMXpath($doc);

		//Select the parent of all items
		$nodeList = $doc->getElementsByTagName("person");
		
		$output = "<ul class=\"user-list\">";
		foreach($nodeList as $nItem)
		{
			//store the info
			$userID   = $nItem->getElementsByTagName("login")->item(0)->nodeValue;
			$name     = $nItem->getElementsByTagName("name")->item(0)->nodeValue;
			$position = $nItem->getElementsByTagName("position")->item(0)->nodeValue;
			$time     = $nItem->getElementsByTagName("time")->item(0)->nodeValue;
			$email    = $nItem->getElementsByTagName("email")->item(0)->nodeValue;
			$picPath  = $nItem->getElementsByTagName("picture")->item(0)->nodeValue;
			$remark   = $nItem->getElementsByTagName("remark")->item(0)->nodeValue;
			//store user's page info
			$pages    = $nItem->getElementsByTagName("page");
			
			$t = $nItem->attributes->item(0)->nodeValue;
			if($t == $type && $position == $title) {					
				//output the item
				$output = $output."<li id=\"".$userID."\">";
				$output = $output."<div class=\"user-list-left\">";
				$output = $output."<a href=\"?id=".$userID."\" title=\"".$name."'s Biography\"><img width='100' height='93' src=\"/dev/prototype/member-files/portraits/list/".$picPath."\" /></a>";
				$output = $output."</div>";
				$output = $output."<div class=\"user-list-right\">";
				$output = $output."<div class='user-list-header'><h3>".$name."</h3>";
				$output = $output."<h4>".$time."</h4></div>";
				
				$objTest = $nItem->getElementsByTagName("pages")->item(0)->getElementsByTagName("page")->item(0)->nodeValue;
				if (!empty($objTest)) { 
					foreach($pages as $x) {
						$id        = $x->attributes->item(0)->nodeValue;
						$pageTitle     = $x->attributes->item(1)->nodeValue;
						$pageType  = $x->attributes->item(2)->nodeValue;
						$content   = $x->nodeValue;
						if($id == "summary"&& $pageType="summary"){
							$output = $output."<h4>".$pageTitle."</h4>";
							$output = $output.$content;
						}
					}
				}
				if(!empty($remark)){
					$output = $output."<h4>Remark</h4>";
					$output = $output.$remark;
				}
				$output = $output."</div>";
				$output = $output."<div class='clear'></div>";
				$output = $output."</li>";
			}
		}
		$output = $output."</ul>";
		return($output);
	}
	
	
	

?>