<?php 
	session_start(); 
	include("assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>The Nanoelectronic Modeling Group \\ Purdue University</title>
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
                <h1>Recent News</h1>
            <!-- InstanceEndEditable -->
        </div>
    </div> 
<!-- @end mast -->
    <div id="content">
    	<div class="center">
            <div id="crumbs">
                <a href="<?php echo $siteRoot; ?>">Home</a>
                <!-- InstanceBeginEditable name="breadcrumbs" -->
                    &gt; <a href="news">Recent News</a>
                <!-- InstanceEndEditable -->
            </div>
            <div class="main-col">
			<!-- InstanceBeginEditable name="content" -->
			<?php
            // create new DOM and XPath objects and load the XML file
            $doc = new DOMDocument();
            $doc->load($rssXML);
            $xpath = new DOMXpath($doc);
            
            $itemNum = $_REQUEST["id"];
            
            //get all the item elements
            $itemArray = $doc->getElementsByTagName("item");
            //loop thru the item elements
            foreach($itemArray as $item)
			{
				//get the global unique identifier for this item
				$iGuid = $item->getElementsByTagName("guid");
				$iGuidValue = (int)$iGuid->item(0)->nodeValue;
				$iTitle = $item->getElementsByTagName("title")->item(0)->nodeValue;
				$iDate = $item->getElementsByTagName("pubDate")->item(0)->nodeValue;
				$iMonthNum = substr($iDate,5,2);
				$iMonthName = date("M", mktime(0, 0, 0, $iMonthNum, 10));
				$iDay = substr($iDate,8,2);
				$iText = $item->getElementsByTagName("description")->item(0)->nodeValue; 
				if(strlen($iText) > 300)
					$iText = substr($iText,0,300)."...";
				$iTextFull = $item->getElementsByTagName("description")->item(0)->nodeValue; 
				
                // process to get the max guid
                if ($iGuidValue == $itemNum && !empty($itemNum))
                {
			?>
				<div class="news-item">
					<h2><a href="<?php echo $siteRoot; ?>news?id=<?php echo $iGuidValue; ?>"><?php echo $iTitle; ?></a></h2>
					<div class="news-date">
						<div class="news-month"><?php echo $iMonthName; ?></div>
						<div class="news-day"><?php echo $iDay; ?></div>
					</div>
					<p><?php echo $iTextFull; ?></p>
				</div>
                <a href="<?php echo $siteRoot; ?>news">Back to Recent News</a>
            <?php 
                } elseif (empty($itemNum)) {
            ?>
				<div class="news-item">
					<h2><a href="<?php echo $siteRoot; ?>news?id=<?php echo $iGuidValue; ?>"><?php echo $iTitle; ?></a></h2>
					<div class="news-date">
						<div class="news-month"><?php echo $iMonthName; ?></div>
						<div class="news-day"><?php echo $iDay; ?></div>
					</div>
					<p><?php echo $iText; ?></p>
					<a href="<?php echo $siteRoot; ?>news?id=<?php echo $iGuidValue; ?>">Continue reading...</a>
				</div>
            <?php 
                }
            } 
            //Cleanup
            ?>              
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
