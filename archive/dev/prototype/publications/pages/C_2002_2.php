<?php 
	session_start(); 
	include("../../assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>C_2002_2 \ The Nanoelectronic Modeling Group \ Purdue University</title>
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
                    &gt; <a href="<?php echo $siteRoot; ?>publications/pages/C_2002_2">C_2002_2</a>
                <!-- InstanceEndEditable -->
            </div>
            <div class="main-col">
			<!-- InstanceBeginEditable name="content" -->
		
		<h2>Gerhard Klimeck C_2002_2 </h2>
				
		
		<h3>Full Brillouin-Zone, Charge Self-consistent Quantum Transport Simulations Enabled by Parallelization of the Nanoelectronic Modeling Tool (NEMO 1-D) on a Beowulf Cluster</h3>

		
		
		<p>Gerhard Klimeck </p>
		
		
		<p><a href="http://www-ncce.ceg.uiuc.edu/iwce8">8th International Workshop on Computational Electronics</a>, October 15-18, Univ. of Illinois, </p>

		
		
		<h3>Abstract:</h3> 
		
		<p>As microelectronic research moves devices to nanometer scale operating at GHz speeds, the physics of electron flow through devices becomes more complicated and physical effects, which previously could be ignored safely in become significant.  High energy electron injection, quantization of charge, quantization of energy, and electron scattering interactions are some of the phenomena that are presently being investigated experimentally and theoretically.  TI/Raytheon developed a 1-D quantum device simulator (NEMO-1D) to address such issues. NEMO 1-D represents the state-of-the-art tool for quantitative transport simulations in resonant tunneling diodes.  The work presented here is an extension of the of the NEMO 1-D software to parallel computing.  This enabled, for the first time, the physical full band (sp3s* and sp3d5s* tight binding), full charge self-consistent simulation of high performance resonant tunneling diodes.
		
		The availability of relatively cheap PC-based Beowulf clusters offers research and/or development groups an affordable entry of into massively parallel computing.  This work here describes the extension of NEMO 1-D to such parallel computers and discusses several different parallel algorithms reaching from coarse, to medium, to fine grain, and a mixed coarse/fine grain algorithm.  The simulations are performed on 26 800MHz Pentium III Dual CPU nodes with 2GB/node RAM (52 CPUs).  The nodes are connected by a high-end Myricom switch.  The scaling of the various algorithms will be compared and the first full band, quantum charge self-consistent RTD simulation will be compared to experimental data.
		
		NEMO's main task is the computation of current-voltage (I-V) characteristics for RTDs. The main workhorse model for high performance RTDs is the full band simulation, which is based on a numerical double integral of energy and transverse momentum over a transport kernel at each bias point.  A full charge self-consistent simulation within this model on a single CPU is prohibitively expensive, as the generation of a single I-V would take about 1-2 weeks to compute.  Simpler charge self-consistent models derived from a parabolic transverse subband assumption had been used in the past.  Computation on a parallel computer now enables the thorough exploration of quantum mechanical transport including charge self-consistency effects in the whole Brillouin zone.
		
		The simplest parallel algorithm for the computation of an I-V is the farming out of the different bias points to various CPUs and the final collection of the results.  This type of algorithm is more efficient than any finer grain algorithms (due to its minimal communication requirements) and it minimizes the interference of parallelism with the 250,000 lines of code in NEMO 1-D.  Such coarse grain algorithm was implemented and almost ideal wall clock time reduction with increasing number of CPU will be shown.  However, this algorithm does have two drawbacks. 1) It is not useful for detailed studies at one or few bias points, and 2) it treats all bias points as independent (making charge feed-back from one bias point to the next impossible).  
		
The double integral of energy and transverse momentum at each bias point offers two other opportunities for parallelism.  Parallelism in the loop around all transverse momentum nodes (medium grain) and all energy nodes (fine grain) has been implemented and the resulting reduction of wall clock time with increasing number of CPUs will be discussed.  Scaling for two different network speeds (slow 100Mb/s and fast 2Gb/s) will be discussed. 
		
Finally a comparison of a fullband, quantum charge self-consistent simulation of a InGaAs/InAlAs RTD to experimental data will be presented for the first time.  The parallelization of the NEMO 1-D code enabled the quantitative simulation of a complete RTD test matrix within a few days, while the experimental creation of such a test matrix took several weeks. The test matrix considered here consists of 4 different RTD structures simulated at 300K and 77K.  </p>





		<p></p>
		<p><a href="../pubs_src/C71_slides/index.htm">Presentation</a>, proceedings <a href="J40.html">abstract</a>, proceedings article <a href="../pubs_src/J40.pdf">PDF</a>.</p>
		
				
		
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
