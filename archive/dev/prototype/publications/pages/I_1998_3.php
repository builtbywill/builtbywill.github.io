<?php 
	session_start(); 
	include("../../assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>I_1998_3 \ The Nanoelectronic Modeling Group \ Purdue University</title>
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
                    &gt; <a href="<?php echo $siteRoot; ?>publications/pages/I_1998_3">I_1998_3</a>
                <!-- InstanceEndEditable -->
            </div>
            <div class="main-col">
			<!-- InstanceBeginEditable name="content" -->
		
		<h2>Gerhard Klimeck I_1998_3 </h2>
				
		
		<h3>Structural Analysis Using Quantum Mechanical Electron Transport Simulations Driven by a Genetic Algorithm</h3>
		
		<p>Gerhard Klimeck, Carlos H. Salazar-Lazaro, Adrian Stoica, and Tom Cwik</p>

		
		<p>Second Workshop on Characterization, Future Opportunities and Applications of 6.1&Aring; III-V Semiconductors, Organized by ONR, NRL, and DARPA, August 24-26, 1998 Naval Research Laboratory, Washington, DC</p>
		
		<h3>Abstract:</h3> <p>The goal to reduce payload in future space missions while increasing mission capability demands miniaturization of measurement and analytical systems. Currently, typical system capabilities include the detection of particular spectral lines, associated data processing, and communication of the acquired data to other subsystems. While silicon device technology dominates the microprocessor and memory market, semiconductor heterostructure devices maintain their niche for light detection, light emission, and high-speed data transmission. The design and optimization of semiconductor heterostructure devices such as heterostructure field effect transistors (HFETs), resonant tunneling diodes (RTDs), quantum well infrared photodetectors (QWIPs), and quantum well lasers requires a detailed understanding of material properties and their influence on electron transport through the devices. In this work the RTD is used as a vehicle to study effects layer thickness and doping variations. The Nanoelectronic Modeling tool (NEMO) [1] was combined with a parallelized genetic algorithm package (PGAPACK) [2] to optimize structural and material parameters. The electron transport simulations are based on a full band simulation, including effects of non-parabolic bands in the longitudinal and transverse directions relative to the electron transport. The first results of the genetic algorithm driven quantum transport calculation are presented. Future work on the analysis of different material systems and the material parameter optimization using this approach will be outlined.</p>
        <p>
		[1] Roger Lake, Gerhard Klimeck, R. Chris Bowen and Dejan Jovanovic, J. of Appl. Phys. 81, 7845 (1997). 
		[2] David Levine, Technical Report Argonne Natl. Laboratory, ANL-95/18.</p>
		
		<p><a href="http://estd-www.nrl.navy.mil/code6870/code6870.html">Workshop Homepage</a>, <a href="http://sinh.nrl.navy.mil/code6870/work/monday2.htm">Program with Abstracts and Viewgraphs</a>, and presentation in <a href="../pubs_src/I16.ppt">powerpoint</a> format.</p>
			
		
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
