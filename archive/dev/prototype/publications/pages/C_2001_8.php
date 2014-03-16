<?php 
	session_start(); 
	include("../../assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>C_2001_8 \ The Nanoelectronic Modeling Group \ Purdue University</title>
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
                    &gt; <a href="<?php echo $siteRoot; ?>publications/pages/C_2001_8">C_2001_8</a>
                <!-- InstanceEndEditable -->
            </div>
            <div class="main-col">
			<!-- InstanceBeginEditable name="content" -->
		
		<h2>Gerhard Klimeck C_2001_8 </h2>
				
		
		<h3>IT Challenges in Nanoscale Electronic Devices Modeling</h3>
		
		<p>Gerhard Klimeck, R. Chris Bowen, Fabiano Oyafuso, Tom Cwik, Section 385, Edith Huang, Section 366,  </p>
		
		<p>JPL IT Symposium, Pasadena, CA, May 9 (2001)</p>
		
		<h3>Abstract:</h3> 
		<p>As microelectronic research moves devices to nanometer scale operating at GHz speeds, the physics of electron flow through devices becomes more complicated and physical effects, which previously could be ignored safely in microelectronic devices, become significant.  High energy electron injection, quantization of charge, quantization of energy, and electron scattering interactions are some of the phenomena that are presently being investigated experimentally and theoretically.  Raytheon/TI developed a 1-D quantum device simulator (NEMO-1D) to address such issues.  That effort combined expertise in device physics, numerical and graphical user interface technologies to produce the first quantitative, general-purpose quantum device simulator.  The work presented here is an extension of the of the NEMO 1-D software to 3-D modeling to enable quantum dot simulations.</p>

<p>NASAÕs interest in long wavelength infrared imaging and the advancements of computation technology has sparked research in quantum dots at JPL.  Near term interest in self-assembled InAs quantum dots on GaAs substrates lies in far-infrared detectors with reduced dark current, increased temperature of operation, increased radiation hardness, and increased sensitivity over quantum well infrared detectors.  </p>

<p>Since the InAs quantum dots are highly strained in the GaAs matrix it is essential to model the effects of this strain on the electronic structure.  We implemented a nearest neighbor tight binding model including s, p and d orbitals. The interaction energies in this model are fit to experimentally observed quantities such as bandgaps, effective masses, and strain induced shifts using a genetic algorithm packa</p>ge.  The mechanical strain in the quantum dots is computed via conjugate gradient-based minimization using the Keating potential.  Resonance states are computed using a customized parallel Lanczos eigenvalue solver for systems of about one million atoms.  

<p>These simulations are enabled by the use of high performance computers such as clusters of PCs (Beowulfs). Scaling results of our eigenvalue solver on our Beowulf clusters and an SGI Origin 2000 will be presented.
Developing a user environment that allows engineers / physicists to analyze nanoelectronic structures with an ever expanding research software provides a significant software challenge.  A prototype for a dynamically created graphical user interface that is based on abstract structure definitions will be presented.</p>




				
		
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
