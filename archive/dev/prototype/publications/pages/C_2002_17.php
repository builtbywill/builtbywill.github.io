<?php 
	session_start(); 
	include("../../assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>C_2002_17 \ The Nanoelectronic Modeling Group \ Purdue University</title>
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
                    &gt; <a href="<?php echo $siteRoot; ?>publications/pages/C_2002_17">C_2002_17</a>
                <!-- InstanceEndEditable -->
            </div>
            <div class="main-col">
			<!-- InstanceBeginEditable name="content" -->
		
		<h2>Gerhard Klimeck C_2002_17 </h2>
				
		
		<h3>WIGLAF  - A Web Interface Generator and Legacy Application Facade</h3>
		
		<p>Akos (Joey) Czikmantory, Tom Cwik, Edward Vinyard, Hook Hua, Fabiano Oyafuso, Gerhard Klimeck,	</p>
		<p>2nd JPL IT Symposium, Pasadena, CA, Nov 4, 2002.</p>
		
		<h3>Abstract:</h3> 
        <p>Cluster computer systems are being used across JPL and 
		throughout NASA to provide cost effective computation for a wide range of applications, including ground data processing for JPL missions.  Research and development is underway for use of small clusters as co-processors aboard spacecraft.  For such systems, 'ease-of-use' is a serious issue, since the cluster computer must be controlled remotely, requiring data transfer and remote execution of parallel jobs.
		  The goal of this work is to facilitate the use of parallel clusters
		by providing a graphical user interface (WIGLAF) that can be rapidly adapted to a broad range of applications, independent of the language in which they are written.  The interface only requires a web browser on the user's desktop allowing it to be completely portable and available from any desktop location and enables remote control and monitoring of the application executing remotely on the cluster.  In addition to providing a consistent interface for input of data across a variety of applications, WIGLAF also provides a set of visualization components for text, 2D, and 3D output data.
		        WIGLAF development exploits the recent maturation of web-driven software technologies and frameworks for web-portals.  The technologies are open source, readily available and driven by a large development and application ommunity.  Using these technologies enables portability and ease of use for both the application developer and end user.  The framework is deployed as a client-server architecture.  The server executes on the cluster system, controls the application, and serves data to the client.  The client is an applet that runs in the web browser, connected to the server host machine by a network.  Key technologies used include the Extensible Markup Language (XML) to hNew all data associated with the application software, Java to provide a 
		platform independent execution environment, and Java Remote Invocation (RMI) package to provide simple, effective client-server networking.  Information is transfered between client and server via standard XML-based data structures, and support is provided within WIGLAF for translation to and from simple native inputs for the cluster application.
		      A successful prototype framework has been developed over the past year which has enabled integration of a graphical font-end for two distinct parallel applications.  The presentation will demonstrate this successful integration and also how other cluster-based applications may benefit from this framework.</p>
		
		
		
		
		
		
		
		
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
