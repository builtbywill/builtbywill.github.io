<?php 
	session_start(); 
	include("../../assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>I_2005_5 \ The Nanoelectronic Modeling Group \ Purdue University</title>
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
                    &gt; <a href="<?php echo $siteRoot; ?>publications/pages/I_2005_5">I_2005_5</a>
                <!-- InstanceEndEditable -->
            </div>
            <div class="main-col">
			<!-- InstanceBeginEditable name="content" -->
		
		<h2>Gerhard Klimeck I_2005_5 </h2>
				
		
		<h3>nanoHUB.org - Towards On-Line Simulation for Materials and Nanodevices by Design</h3>
		
		<p>G Klimeck, MS Lundstrom, M Korkusinski, H Xu, F Saied, S Goasguen, TB Boykin, F Oyafuso, S Lee, H Hua, O Lazarankova, RC Bowen, P von Allmen</p>	
		<p>APS March Meeting, Los Angeles, CA, March 21-25, 2005.</p>	
		<h3>Abstract:</h3> 
		<p>Challenges in nanoelectronics are the merging notions of material and device. Device lengths have reached the nanometer scale, where material properties are defined.&nbsp; Detailed atomic composition such as strain, interface, doping, and size fluctuations need to be treated.&nbsp; Here the material science and device engineering communities meet on the common ground of quantum mechanics. Success will depend on bridging language and approach barriers between communities. The development of accepted community software will be a significant step.&nbsp;</p>
		<p>One element of such codes is the NanoElectronic MOdeling Tool. NEMO 3-D enables the computation of strain and electronic structure in an atomistic basis for over 60 and 23 million atoms, corresponding to volumes of (107nm)3 and (77nm)3, respectively.&nbsp; NEMO 3-D runs on a serial and parallel platforms, local cluster computers as well as the NSF Teragrid. About 400,000 atoms are treated efficiently on a single 32bit CPU.&nbsp; NEMO uses an atomistic valence force field method (strain) and the empirical tight binding method (electronic structure). Quantitative simulations for quantum dots in the InAs/GaAs and Si/SiGe material systems have been performed.</p>
		<p>The Network for Computational Nanotechnology (NCN) is in the process of developing new community and research codes for the analysis of nano-(electronic/mechanical/bio) devices.&nbsp; These tools are hosted on http://nanohub.org for on-line simulation use free-of-charge.&nbsp; Last year over 1,000 people performed about 64,000 simulations.&nbsp; 2,200 others viewed seminars and nanotechnology curriculum items.&nbsp; nanoHUB is being developed as a community resource that encourages on-line simulation, collaborations and nanotechnology education.</p>
		
		View <a href="../pubs_src/I55.ppt">Powerpoint file</a>.
		
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
