<?php 
	session_start(); 
	include("../../assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>S_2002_9 \ The Nanoelectronic Modeling Group \ Purdue University</title>
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
                    &gt; <a href="<?php echo $siteRoot; ?>publications/pages/S_2002_9">S_2002_9</a>
                <!-- InstanceEndEditable -->
            </div>
            <div class="main-col">
			<!-- InstanceBeginEditable name="content" -->
		
		<h2>Gerhard Klimeck S_2002_9  </h2>
				
		
		<h3>Modeling of Disordered Multimillion Atom Quantum Dot Systems</h3>
		
		
		<p>Gerhard Klimeck, </p>
		
		<p>Ruhr-University Bochum, Germany, Nov 11, 2002, Host Prof. Ulrich Kunze</p>
		
		<p>Material layers with a thickness of a few nanometers are common-place in today's semiconductor devices. Before long, device fabrication methods will reach a point at which the other two device dimensions are scaled down to few tens of nanometers.  The total atom count in such deca-nano devices is reduced to a few million.  Only a small finite number of &#147;free&#148; electrons will operate such nano-scale devices due to quantized electron energies and electron charge.  This work demonstrates that the simulation of electronic structure and electron transport on these length scales must not only be fundamentally quantum mechanical, but it must also include the atomic granularity of the device. Various elements of the theoretical, numerical, and software foundation of the prototype development of a Nanoelectronic Modeling tool (NEMO 3-D) which enables this class of device simulation on Beowulf cluster computers are presented.  Issues of parallelization and tight binding parameterization using genetic algorithms are discussed. The utility of the new tool is demonstrated by an atomistic analysis of the effects of disorder in InGaAs quantum dots.
Work performed in collaboration with Fabiano Oyafuso, R. Chris Bowen, Tim Boykin, Paul von Allmen.</p>
		
		<p>Gerhard Klimeck is the technical group supervisor of the Applied Cluster Computing Technologies Group since April 2002 and a Principal member at the NASA Jet Propulsion Laboratory since Sept. 2001. He joined JPL in February 1998 as a Senior member technical staff. His research interest is in the quantum mechanical modeling of electron transport through nanoelectronic devices, parallel cluster computing, and genetic algorithms. Previously he was a member of technical staff at the Central Research Lab of Texas Instruments where he served as manager and principal architect of the Nanoelectronic Modeling ( NEMO ) program. Dr. Klimeck received his Ph.D. in 1994 from Purdue University where he studied electron transport through quantum dots, resonant tunneling diodes and 2-D electron gases. His research for his German electrical engineering degree which he obtained in 1990 from Ruhr-University Bochum concerned the study of laser noise propagation. Dr. Klimeck's work is documented in over 60 publications. He is a member of IEEE, APS, HKN and TBP.</p>
		
		
		
		
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
