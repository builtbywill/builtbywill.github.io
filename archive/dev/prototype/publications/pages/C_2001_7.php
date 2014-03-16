<?php 
	session_start(); 
	include("../../assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>C_2001_7 \ The Nanoelectronic Modeling Group \ Purdue University</title>
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
                <h1>Publications</h1>
            <!-- InstanceEndEditable -->
        </div>
    </div> 
<!-- @end mast -->
    <div id="content">
    	<div class="center">
            <div id="crumbs">
                <a href="<?php echo $siteRoot; ?>">Home</a>
                <!-- InstanceBeginEditable name="breadcrumbs" --> 
                    &gt; <a href="<?php echo $siteRoot; ?>publications">Publications</a>
                    &gt; <a href="<?php echo $siteRoot; ?>publications/pages/C_2001_7">C_2001_7</a>
                <!-- InstanceEndEditable -->
            </div>
            <div class="main-col">
			<!-- InstanceBeginEditable name="content" -->
		
		<h2>Gerhard Klimeck C_2001_7 </h2>
				
		
		<h3>Beowulf Processing for Real-time Mission Science and Operations Products</h3>
		
		<p>Gerhard Klimeck, Myche McAuley, Tom Cwik, Bob Deen, Eric DeJong,  </p>
		
		
		<p>JPL IT Symposium, Pasadena, CA, May 9 (2001)</p>
		
		<h3>Abstract:</h3> 
		<p>As JPL embarks upon an era of surface mission operations (landers and rovers), the need for timely (i.e. near real-time) delivery of derived products to aid in science and operations planning activities is crucial.  Examples of such telemetry-derived products are: terrain models, panoramic mosaics, and 3-D rendered animations, all of which are used by two different, but overlapping, customers: science and mission operations.  While the science user is trying to understand and visualize the latest data acquired  (usually to prepare for an imminent press conference), the mission planning activities are focused on generating sequences for the very next day of operations.  Both user communities require use of the latest information immediately after the receipt of the most recent downlinked telemetry. In Section 388, we have met this challenge by developing parallelized processing code to be run on Beowulf configured commercial-off-the-shelf (COTS) hardware.  This has lead to a drastic reduction in  the time required to generate these products.</p>

<p>Development of this software is being funded by the TMOD Technology Program under the Beowulf Application and Networking Environment (BANE) project.  The crux of this project is to determine which algorithms are best used in this parallel environment and in what way.  Preliminary work has been performed in mosaic generation and results have been heartening (a performance increase of approximately 10-18X on a modest sized cluster has been proven).  More research will be needed to fully characterize the most practical implementation for use in an operational environment.  After this, the 2-D correlation algorithm will be investigated. As Moore's Law inexorably marches on, the absolute time needed to create any of these products will only shrink, thus allowing for real-time, immersive analysis products for science and mission planning.</p>

<p>The primary goal is to incorporate the BANE system into the much larger telemetry processing architecture, developed and operated by the Multi-mission Instrument Processing Laboratory (MIPL).  Operated in conjunction with the real-time telemetry processing system (see the "Building Distributed Science Data Processing Systems" abstract) and the real-time relational database management system (see the "Systematic Data Processing Automation Prototype" abstract), BANE completes a triumvirate of systems whose goal is to automatically process and create telemetry derived products. BANE processing is controlled by the automation database, which can initiate tasks as soon as the supporting telemetry becomes available from the Real-time telemetry processor.  For example, the database is cognizant of when a stereo pair of images have been received and can therefore initiate the range map calculation pipeline on the BANE system.  Moreover, the database can immediately initiate a mosaic processing pipeline on the BANE system when all necessary products are available for generating a sequenced mosaic.</p>




				
		
	<!-- InstanceEndEditable --> 
            </div>
            <div class="side-col">
			<!-- InstanceBeginEditable name="sidenav" -->
            	<h2>Related Pages </h2>
				<?php include($siteRoot."includes/related.php"); ?>
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
