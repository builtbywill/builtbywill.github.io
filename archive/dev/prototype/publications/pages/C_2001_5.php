<?php 
	session_start(); 
	include("../../assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>C_2001_5 \ The Nanoelectronic Modeling Group \ Purdue University</title>
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
                    &gt; <a href="<?php echo $siteRoot; ?>publications/pages/C_2001_5">C_2001_5</a>
                <!-- InstanceEndEditable -->
            </div>
            <div class="main-col">
			<!-- InstanceBeginEditable name="content" -->
		
		<h2>Gerhard Klimeck C_2001_5 </h2>
				
		
		<h3>Atomistic Quantum Dot Simulation using NEMO-3D</h3>
		
		<p>Gerhard Klimeck, R. Chris Bowen, Timothy B. Boykin, and Fabiano Oyafuso,  </p>
		
		
		<p>Nanospace 2001, Galveston, Texas, March 13-16 (2001)</p>
		
		<h3>Abstract:</h3> 
		<p>The goal to reduce payload in future space missions while increasing mission capability demands miniaturization of measurement, analytical, and communication systems.  The enabling technology is the miniaturization of semiconductor devices of the past 40 years. It has now become evident that the atomic dimensions of the underlying crystalline lattice and the countable electron number ultimately limit the scaling in semiconductor devices.  Structures and devices that are being built on the nanometer scale typically cannot be characterized non-invasively without destroying the surrounding structure. Physics-based simulation of such nano-scaled devices can serve as a characterization tool and, by providing feedback to experimental parameters, as a design tool. However, a general-purpose physics-based 3-D quantum device simulation tool does not exist up-to-date.
Raytheon/TI developed a 1-D quantum device simulator (NEMO-1D). In that effort expertise in device physics, numerical and graphical user interface technology were combined to produce the first quantitative, general-purpose quantum device simulator.  The work presented here presents an extension of the of the NEMO software to 3-D modeling and high performance computing. 
The first results using NEMO 3-D will be presented:  spectral linewidth variations in InGaAs/GaAs quantum dots due to alloy disorder, spectral shifts in InAs/GaAs dots due to interface interdiffusion, genetic algorithm based material parameter optimization and mechanical strain calculations in InAs/GaAs dots.  
We utilize a beowulf system, a cluster of commodity PC's, to simulate a system of 2 million atoms.  Scaling of the parallel algorithm on 2 beowulf clusters with different CPU and network configurations and a comparison against a standard shared memory computer will be shown. </p>
  

				
		
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
