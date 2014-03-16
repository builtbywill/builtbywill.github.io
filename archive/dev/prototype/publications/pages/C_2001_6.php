<?php 
	session_start(); 
	include("../../assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>C_2001_6 \ The Nanoelectronic Modeling Group \ Purdue University</title>
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
                    &gt; <a href="<?php echo $siteRoot; ?>publications/pages/C_2001_6">C_2001_6</a>
                <!-- InstanceEndEditable -->
            </div>
            <div class="main-col">
			<!-- InstanceBeginEditable name="content" -->
		
		<h2>Gerhard Klimeck C_2001_6 </h2>
				
		
		<h3>The Use of Cluster Computer Systems for NASA/JPL Applications</h3>
		
		<p>Tom Cwik, Viktor Decyk, Daniel.S.Katz, Gerhard Klimeck, Nooshin Meshkaty, Charles Norton, Fabiano Oyafuso, Paul Springer, Thomas Sterling, Bob Tisdale, Frank Villegas, Ed Vinyard, Ping Wang, High Performance Computing Group, Section 385,  </p>
		
		
		<p>JPL IT Symposium, Pasadena, CA, May 9 (2001)</p>
		
		<h3>Abstract:</h3> 
		<p>The development, application and commercialization of cluster computer systems have escalated dramatically over the last several years. Driven by a range of applications that need relatively low-cost access to high performance computing systems, cluster computers have reached worldwide acceptance and use. A cluster system consists of commercial-off-the-shelf hardware coupled to (generally) open source software.  These commodity personal computers are interconnected through commodity network switches and protocols to produce scalable computing systems usable in a wide range of applications. First developed by NASA Goddard Space Flight Center in the mid 1990s, the initial Caltech/JPL development resulted in the Gordon Bell Prize for price-per-performance using the 16 node machine Hyglac in 1997 (T. Sterling et al., Supercomputing 97 Proceedings).  Currently the JPL High Performance Computing Group uses and maintains three generations of clusters including Hyglac. The available hardware resources include nearly 100 CPUs, over 70Gbytes of RAM, and over 600Gbytes of disk space. The individual machines are connected via 100Mbit/s networks with 2.8Gbit/s networks coming on-line shortly. 

Though the resources are relatively large, the system cost-for-performance allows these machines to be treated as Ômini-supercomputersÕ by a relatively small group of users. Application codes are developed, optimized and put into production on the local resources.  Being a distributed memory computer system, existing sequential applications are first parallelized while new applications are developed and debugged using a range of libraries and utilities. Indeed, the cluster systems provide a unique and convenient starting point to using even larger institutional parallel computing resources within JPL and NASA.

A wide range of applications has been developed over the span of three generations of cluster hardware. Initial work concluded that the slower commodity networks used in a cluster computer (as compared to the high-performance network of a non-commodity parallel computer) do not generally slow execution times in parallel applications.  It was also seen that latency tolerant algorithms could be added to offset the slower networks in some of the less efficient applications. What followed was the development or porting of a range of applications that utilized the clusters resources. End benefits include greatly reduced application execution time in many cases, and the availability of large amounts of memory for larger problem sizes or greater fidelity in existing models. The applications can be characterized into the following classes with examples

¥ science data processing: these applications typically exploit the available file systems and processors to speed data reduction. Examples include the radiative transfer code MODTRAN ported to clusters and other parallel machines and the MARSMAP software for producing Mars mosaic maps from individual camera image frames

¥ physics-based modeling: these applications typically use large amounts of memory and can stress the available network latency and bandwidth. Applications include outer-planet atmospheric modeling using grid-based methods; nanotechnology models for electronic structure calculations of quantum dots; and electromagnetic models of antennas and infrared filters for observational instruments.


¥ design environments: cluster computer resources can be integrated into larger software systems to enable fast turnaround of specific design or simulation components that otherwise slow the design cycle. The integrated millimeter-wave antenna design environment MODTool uses a cluster computer for time-expensive diffraction calculations while thermal, structural and CAD components are executed elsewhere.  In a related application, once a model is parameterized, stochastic optimization methods such as a genetic algorithm are executed on the cluster.

The heavy use of clusters for a variety of applications requires the development of a cluster operation and maintenance infrastructure.  This includes the use of commercial or open source tools and libraries. Key components involve the integration of message passing libraries (MPI) with a variety of compilers, queuing systems for effective resource utilization, utilities to monitoring the health of the machine and the use of networked file systems attached to the cluster.  

This talk will expand on the above points, presenting results from a variety of applications that expose both the benefits and limitations of cluster computers used in NASA/JPL projects. </p>


		
		
		
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
