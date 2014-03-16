<?php 
	session_start(); 
	include("../assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Group \\ The Nanoelectronic Modeling Group \\ Purdue University</title>
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
                <h1>The Nanoelectronic Modeling Group</h1>
            <!-- InstanceEndEditable -->
        </div>
    </div> 
<!-- @end mast -->
    <div id="content">
    	<div class="center">
            <div id="crumbs">
                <a href="<?php echo $siteRoot; ?>">Home</a>
                <!-- InstanceBeginEditable name="breadcrumbs" -->
                &gt; <a href="./">Research Group</a>
			<!-- InstanceEndEditable -->
            </div>
            <div class="main-col">
			<!-- InstanceBeginEditable name="content" -->
                <h2>A Brief Overview</h2>
                <p>The Nanoelectronic Modeling Group works in the area of nanoelectronics where we try to better the understanding of electron flow through nano-scale devices. The effort on modeling and simulation is heavily computer based. We try to connect to experimental results which we try to explain or even predict experiments.</p>
                <p>While some developments are based on Matlab prototypes most of the work flows into the construction of substantial simulators like <a href="../software-projects/nemo1D/" target="_top">NEMO 1-D</a>, <a href="../software-projects/nemo3D/" target="_top">NEMO 3-D</a>, and <a href="../software-projects/omen/" target="_top">OMEN</a>.</p>
                <h2>Group Goals</h2>
                <p>The ultimate goal of the group is not only to advance science and engineering through individual research objectivves, but to create modeling and simulation tools that can be used by other researchers, educators, and students. The outreach outlet is the <a href="http://www.nanohub.org" target="_blank">nanoHUB</a> where the group is creating new content for simulation tools, tutorials, and additional educational material. nanoHUB provides the capability to perform on-line simulation through a web browser without the installation of any software. nanoHUB served currently serves over 6,700 simulation users and over 89,000 users in the year 2008 alone. Updated nanoHUB usage statistics can be found <a href="http://www.nanohub.org/usage" target="_blank">here</a>.</p>
                <p>The group consists of <a href="members">undergraduate and graduate students, post-docs and research scientists</a>. Some group pictures are available.</p>
                <h2>Prospective Students</h2>
                <p><a href="prospective-students">Prospective students</a> applying to Purdue University and the Klimeck group in particular are encouraged to read the "prospective students page".</p>
                <p>Notes to new graduate students in the group with respect to business operations, paper writing, data management etc. are also available.</p>
			<!-- InstanceEndEditable --> 
            </div>
            <div class="side-col">
			<!-- InstanceBeginEditable name="sidenav" -->
				<?php include("../includes/sidenavs/side-group.php"); ?>
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
