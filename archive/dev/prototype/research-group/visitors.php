<?php 
	session_start(); 
	include("../assets/php/constants.php");
	
	$getUser = $_GET["id"];
	if(!empty($getUser))
	{
		$getPage = $_GET["page"];
		if(empty($getPage))
			$getPage = "bio";
		
		//Set up path to XML
		//Load XML	
		// create new DOM and XPath objects and load the XML file
		$doc = new DOMDocument();
		$doc->load($userXML);
		$xpath = new DOMXpath($doc);
		
		$query = "//people/person[@type='visitor']/login[. = '".$getUser."']";
		
		//run the query
		$guidNode = $xpath->query($query);
		
		//test if user exists
		$objTest = $guidNode->item(0)->parentNode;
		if (empty($objTest)) 
		{ 
			header("Location:visitors");
			exit;
		}
			
		//get the parent Item node
		$person = $guidNode->item(0)->parentNode;
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
		
		//test if user has any pages
		$objTest = $pTemp->getElementsByTagName("pages")->item(0)->getElementsByTagName("page")->item(0);
		if (empty($objTest)) 
		{ 
			header("Location:visitors");
			exit;
		}
		
		//test if current page exists
		$objTest = $pTemp->getElementsByTagName("pages")->item(0)->getElementsByTagName("page")->item(0)->attributes->item(0)->nodeValue;
		if (!empty($objTest)) 
		{ 
			$trigger = 0;
			foreach($pages as $x) 
			{
				$id = $x->attributes->item(0)->nodeValue;
				if($id == $getPage)
				{
					$trigger = 1;
				}
			}
			if($trigger == 0)
			{
				header("Location:visitors");
				exit;
			}
		}
	}
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php if(!empty($getUser)){ echo $name." \\\\ ";}?>Visitors \\ The Nanoelectronic Modeling Group \\ Purdue University</title>
    <meta name="keywords" content="gekco, Gerhard, nano, Gerhard Klimeck, JPL, HPCC, Quantum Device Simulation, Resonant Tunneling Diodes, Green Functions, nanoelectronics, NEMO, heterostructures, Genetic algorithm, parallel, 3-D, nano, nanotechnology, NCN, Nanotechnology, Computation, Klimeck, nano, Gerhard, Post doc, Post-doc, Post, Doc, Opportunity, job, Hire, jobs, programming, students, C++, python, fortran, programmer, opportunity, software, engineer, software engineer, nanohub, nanohub.org, cyber, infrastructure" />
    <meta name="description" content="The home of the Nanoelectronic Modeling Group and Gerhard Klimeck" />
    <meta name="language" content="en-us" />
    <style media="all" type="text/css"> @import url("<?php echo $siteRoot; ?>assets/css/base.css"); </style>
    <style media="screen" type="text/css"> @import url("<?php echo $siteRoot; ?>assets/css/screen.css"); </style>
    <script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/jquery-1.3.2.min.js"></script>   
    <script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/jquery-ui-1.7.1.custom.min.js"></script>   
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
              <h1><?php if(!empty($getUser)){ echo $name;}else{echo "Members";}?></h1>
        </div>
</div> 
<!-- @end mast -->
    <div id="content">
    	<div class="center">
            <div id="crumbs">
			<?php
				if(!empty($getUser))
				{
					$objTest = $pTemp->getElementsByTagName("pages")->item(0)->getElementsByTagName("page")->item(0)->attributes->item(0)->nodeValue;
					if (!empty($objTest)) 
					{ 
						foreach($pages as $x) 
						{
							$id        = $x->attributes->item(0)->nodeValue;
							$title     = $x->attributes->item(1)->nodeValue;
							$type      = $x->attributes->item(2)->nodeValue;
							$content   = $x->nodeValue;
							
							if($id == $getPage)
							{
							
				?>
                <a href="<?php echo $siteRoot; ?>">Home</a>
                &gt; <a href="../research-group/">Research Group</a>
                &gt; <a href="visitors">Visitors</a>            
                <?php if(!empty($getUser)){ ?> &gt; <a href="visitors?id=<?php echo $getUser;?>"><?php echo $name;?></a><?php } ?>           
                <?php if(!empty($getPage) && $getPage != "bio"){ ?> &gt; <a href="visitors?id=<?php echo $getUser;?>&amp;page=<?php echo $getPage;?>"><?php echo $title;?></a><?php } ?>           
              </div>
            <div class="main-col">
            <?php
								if($getPage == "bio"){
									echo "<h2>".$name."'s ".$title."</h2>";
									echo "<div class=\"userPic\"><img src=\"/dev/prototype/member-files/portraits/".$picPath."\" /></div>";
									echo "<div class=\"userBio\">";
									echo $content;
									echo "</div>";
								}else{
									echo "<h2>".$title."</h2>";
									echo $content;
								}
							}
                        }
                    }
                ?>
            <?php }else{ 
				?>
                <a href="<?php echo $siteRoot; ?>">Home</a>
                &gt; <a href="../research-group/">Research Group</a>
                &gt; <a href="visitors">Visitors</a>            
                <?php if(!empty($getUser)){ ?> 
                &gt; <a href="visitors?id=<?php echo $getUser;?>"><?php echo $name;?></a>
				<?php } ?>           
                <?php if(!empty($getPage)){ ?> 
                &gt; <a href="visitors?id=<?php echo $getUser;?>&amp;page=<?php echo $getPage;?>"><?php echo $title;?></a>
				<?php } ?>           
              </div>
            <div class="main-col">
            <?php
							
				echo "<h2>Scientific Visitors</h2>";
				echo listPeople("visitor","Scientific Visitor"); 
				
				echo "<h2>Ph.D. Students</h2>";
				echo listPeople("visitor","Previous Visitor"); 
			   
            } ?>
            </div>
            <div class="side-col">
				<?php
                if(!empty($getUser)){
				
					echo "<h2>".$name."'s Pages</h2>";
					$objTest = $pTemp->getElementsByTagName("pages")->item(0)->getElementsByTagName("page")->item(0)->attributes->item(0)->nodeValue;
					if (!empty($objTest)) 
					{ 
						foreach($pages as $x) 
						{
							$id        = $x->attributes->item(0)->nodeValue;
							$title     = $x->attributes->item(1)->nodeValue;
							$type      = $x->attributes->item(2)->nodeValue;
							
							if($type != "summary")
								echo "<a class=\"side\" href=\"?id=".$getUser."&amp;page=".$id."\" title=\"".$title."\">".substr($title,0,50)."</a>";
                		}
					}
                }
                include("../includes/sidenavs/side-group.php");
                include($siteRoot."includes/recent-news.php"); ?>
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
