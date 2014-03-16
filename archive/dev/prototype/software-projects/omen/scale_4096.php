<?php 
	session_start(); 
	include("../../assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>OMEN Scaling on a variety of HPC Platforms \\ OMEN \\ The Nanoelectronic Modeling Group \\ Purdue University</title>
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
                <h1>OMEN</h1>
            <!-- InstanceEndEditable -->
        </div>
    </div> 
<!-- @end mast -->
    <div id="content">
    	<div class="center">
            <div id="crumbs">
                <a href="<?php echo $siteRoot; ?>">Home</a>
                <!-- InstanceBeginEditable name="breadcrumbs" -->
                &gt; <a href="<?php echo $siteRoot; ?>software-projects">Software Projects</a>
                &gt; <a href="<?php echo $siteRoot; ?>software-projects/omen">OMEN</a>
                &gt; <a href="<?php echo $siteRoot; ?>software-projects/omen/scale_4096">Parallel Performance: 65,536 / 32,768 cores</a>
				<!-- InstanceEndEditable -->
            </div>
            <div class="main-col">
			<!-- InstanceBeginEditable name="content" -->
			<h2>OMEN Scaling on a variety of HPC Platforms</h2>
            <p>We have access to a variety of  sytems and performed scaling experiments on these machines. These include a local cluster at Purdue &quot;Steele&quot; consistes of dual quad-core Intel chips which are simply interconnected with Gigabit Ethernet. This results in leveling off of scaling at around 4k cores. The Indiana University / Purdue system Big Red is based on an IBM JS21 system connected with a fast network. In terms of raw performance that system performs best. Purdue also hosts a SiCortex with around 3k cores. These cores run significantly slower than than standard CPUs which can immediately seen with the direct comparison.</p>
            <p>The scaling experiment at 4k cores does not involve the outermost voltage loop. As typical device curves contain 50-100 bias points for a whole device characteristic, we can estimate that OMEN will run just fine on a machine of 200,000+ cores.</p>
            <p>
                <a class="left" href="scaling_img/Steele_scaling_r_s_br_V3.jpg"><img width="161" src="scaling_img/Steele_scaling_r_s_br_V3.jpg"><br/>scaling to 4k cores on a variety of machines</a>
                <a  class="left" href="scaling_img/Sicortex_scaling_r_s_br_m2.gif"><img width="161" src="scaling_img/Sicortex_scaling_r_s_br_m2_.gif"><br/>scaling to 4k cores on a variety of machines, including SiCortex</a>
            </p>
			<!-- InstanceEndEditable --> 
            </div>
            <div class="side-col">
			<!-- InstanceBeginEditable name="sidenav" -->
				<?php include("../../includes/sidenavs/side-OMEN.php"); ?>
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
