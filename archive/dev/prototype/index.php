<?php 
	session_start(); 
	include("assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/homepage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Nanoelectronic Modeling Group \\ Purdue University</title>
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
    <link rel="alternate" type="application/rss+xml" title="Nanoelectronic Modeling Group - Recent News" href="<?php echo $siteRoot; ?>assets/xml/rss.xml"/>    
    <!--[if lte IE 6]>
    <style media="screen" type="text/css"> @import url("<?php echo $siteRoot; ?>assets/css/screen-IE6.css"); </style>
    <script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/iepngfix_tilebg.js"></script>   
    <![endif]-->
</head>
<body id="home">
    <div id="mast">
        <div id="header">
            <div class="center">
                <a href="#content" class="skipnav">Skip to Content</a>
                <!-- @start upperNav -->
                <?php if(empty($_SESSION["userID"])) include("includes/nav-upper-1.php"); else include("includes/nav-upper-2.php"); ?>
                <!-- @end upperNav -->
                <div id="logo">
					<a href="<?php echo $siteRoot; ?>" title="Home"><img src="<?php echo $siteRoot; ?>assets/img/logo.png" width="156" height="88" alt="gekco logo" /></a>
                </div>
				<?php include($siteRoot."includes/nav.php"); ?>
            </div> <!-- @end .center -->
        </div> <!-- @end header -->
        <div class="center header-home">
            <h1>The home of The Nanoelectronic Modeling Group and Gerhard Klimeck.</h1>
            <div id="featured-projects">
                <ul id="featured-list">
				<!-- InstanceBeginEditable name="featured-projects" -->
                    <li id="item1">
                        <img class="img1" src="" />
                        <img class="img2" src="" />
                        <div class="descrip">
                            <h2>nanoHUB</h2>
                            <p>The Nanoelectronic Modeling Group is a significant contributor to nanoHUB.org including tools, educational material research results and more.</p>
                            <a href="software-projects/nanoHUB" title="View nanoHUB">View this Project</a>
                        </div>
                    </li>
                    <li id="item2">
                        <img class="img1" src="" />
                        <img class="img2" src="" />
                        <div class="descrip">
                            <h2>NEMO</h2>
                            <p></p>
                            <a href="software-projects/nemo" title="View NEMO">View this Project</a>
                        </div>
                    </li>
                    <li id="item3">
                        <img class="img1" src="" />
                        <img class="img2" src="" />
                        <div class="descrip">
                            <h2>OMEN</h2>
                            <p></p>
                             <a href="software-projects/omen" title="View OMEN">View this Project</a>
                       </div>
                    </li>
                    <li id="item4">
                        <img class="img1" src="" />
                        <img class="img2" src="" />
                        <div class="descrip">
                            <h2>GENES</h2>
                            <p></p>
                            <a href="software-projects/genes" title="View GENES">View this Project</a>
                        </div>
                    </li>
                <!-- InstanceEndEditable -->
                </ul>
            	<div class="featured-bar">
                    <h2>Featured Projects</h2>
                    <div id="featured-nav"></div>
                </div>
            </div>
        </div>
    </div> 
<!-- @end mast -->
    <div id="content">
    	<div class="center">
            <div class="two-col">
			<!-- InstanceBeginEditable name="content1" -->
                <h2> The Nanoelectronic Modeling Group</h2>
                <p><img src="research-group/images/DSC_4412-homepage.jpg" alt="Research Group Image" width="410" height="185" /></p>
                <p>The Nanoelectronic Modeling Group works in the area of nanoelectronics where we try to better the understanding of electron flow through nano-scale devices. The effort on modeling and simulation is heavily computer based. We try to connect to experimental results which we try to explain or even predict experiments.</p>
                <a href="research-group/">More about the Group...</a>
			<!-- InstanceEndEditable --> 
                <h2><a href="<?php echo $siteRoot; ?>publications" title="Publications">Recent Publications</a></h2>
				<?php
                    // create new DOM and XPath objects and load the XML file
                    $doc = new DOMDocument();
                    $doc->load($rssXML);
                    
                    $maxDisplay = 3;
                    
                    //get all the item elements
                    $itemArray = $doc->getElementsByTagName("item");
                    //loop thru the item elements
                    foreach($itemArray as $item)
                    {
                        $maxDisplay--;
                    } 
                ?>              
                <h2><a href="<?php echo $siteRoot; ?>news" title="Recent News">Recent News</a></h2>
				<?php
                    // create new DOM and XPath objects and load the XML file
                    $doc = new DOMDocument();
                    $doc->load($rssXML);
                    $xpath = new DOMXpath($doc);
                    
                    $maxDisplay = 3;
                    
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
                        $iText = substr($item->getElementsByTagName("description")->item(0)->nodeValue,0,200)."..."; 
                        
                        if($maxDisplay > 0)
                        {
                        
                ?>
                    <div class="news-item">
                        <h3><a href="<?php echo $siteRoot; ?>news?id=<?php echo $iGuidValue; ?>"><?php echo $iTitle; ?></a></h3>
                        <div class="news-date">
                            <div class="news-month"><?php echo $iMonthName; ?></div>
                            <div class="news-day"><?php echo $iDay; ?></div>
                        </div>
                        <p><?php echo $iText; ?></p>
                        <a href="<?php echo $siteRoot; ?>news?id=<?php echo $iGuidValue; ?>">Continue reading...</a>
                    </div>
                <?php 
                        }
                        $maxDisplay--;
                    } 
                ?>              
            </div>
            <div class="two-col">
			<!-- InstanceBeginEditable name="content2" -->
            <h2>Science Applications</h2>
            <ul class="project-image-list">
                <li><a href="science-applications/impurities/" title="Impurities"><img src="assets/img/homepage/impurities.jpg" width="190" height="75" alt="Impurities"/></a></li>
                <li><a href="science-applications/nanowires/" title="Nanowires"><img src="assets/img/homepage/nanowires.jpg" width="190" height="75" alt="Nanowires"/></a></li>
                <li><a href="science-applications/quantum-dots/" title="Quantum Dots"><img src="assets/img/homepage/quantum-dots.jpg" width="190" height="75" alt="Quantum Dots"/></a></li>
                <li><a href="science-applications/ultra-scaled-FETs/" title="Ultra-Scaled FETs"><img src="assets/img/homepage/us-fets.jpg" width="190" height="75" alt="Ultra-Scaled FET's"/></a></li>
            </ul>
            <h2>Projects</h2>
            <ul class="project-image-list">
                <li><a href="software-projects/nanoHUB/" title="nanoHUB"><img src="assets/img/homepage/nanoHUB.jpg" width="190" height="75" alt="nanoHUB"/></a></li>
                <li><a href="software-projects/omen/" title="OMEN"><img src="assets/img/homepage/omen.jpg" width="190" height="75" alt="OMEN"/></a></li>
                <li><a href="software-projects/nemo1D/" title="NEMO 1-D"><img src="assets/img/homepage/nemo1d.jpg" width="190" height="75" alt="NEMO 1-D"/></a></li>
                <li><a href="software-projects/nemo3D/" title="NEMO 3-D"><img src="assets/img/homepage/nemo3d.jpg" width="190" height="75" alt="NEMO 3-D"/></a></li>
                <li><a href="software-projects/genes/" title="GENES"><img src="assets/img/homepage/genes.jpg" width="190" height="75" alt="nanoHUB"/></a></li>
                <!-- <li><a href="software-projects/mars/" title="Mars Image Processing"><img src="assets/img/homepage/mars.jpg" width="190" height="75" alt="Mars Image Processing"/></a></li> -->
                <li><a href="software-projects/parallel/" title="Parallel Scaling"><img src="assets/img/homepage/parallel.jpg" width="190" height="75" alt="Parallel Scaling"/></a></li>
            </ul>
			<!-- InstanceEndEditable --> 
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
