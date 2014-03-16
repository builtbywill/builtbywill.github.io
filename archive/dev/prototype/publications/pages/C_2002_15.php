<?php 
	session_start(); 
	include("../../assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>C_2002_15 \ The Nanoelectronic Modeling Group \ Purdue University</title>
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
                    &gt; <a href="<?php echo $siteRoot; ?>publications/pages/C_2002_15">C_2002_15</a>
                <!-- InstanceEndEditable -->
            </div>
            <div class="main-col">
			<!-- InstanceBeginEditable name="content" -->
		
		<h2>Gerhard Klimeck C_2002_15 </h2>
				
		
		<h3>Modeling of Disordered Multimillion Atom Quantum Dot Systems</h3>
		
		<p>Fabiano Oyafuso, Gerhard Klimeck, R. Chris Bowen, Tim Boykin, Paul von Allmen,		</p>
		<p>2nd JPL IT Symposium, Pasadena, CA, Nov 4, 2002.</p>
		
		<h3>Abstract:</h3> 
        <p>As the minimum feature size of solid state devices scales down toward the nanometer scale, modeling of such devices must deal increasingly with atomistic granularity of matter.  We are developing an atomistic nanoelectronic simulation tool (NEMO-3D) to model electronic structure of nanostructures (particularly quantum dots) which encompass many millions of atoms. Our simulation employs a nearest-neighbor tight-binding model sp3d5s* with a 20 orbital basis, consisting of s, p, and d orbitals, associated with each atomic lattice site. The coupling between orbitals is determined by using a genetic algorithm package to determine a best fit to a large number of experimentally measured observables of the bulk binary system, including bandgaps and effective masses at various symmetry points in the Brillouin zone.  Because the orbital couplings also depend on the relative positions of the nearest neighbor atoms, an accurate calculation of the electronic structure requires an accurate representation of the positions of each atom.  NEMO-3D uses a valence force field (VFF) model to minimize the total strain energy, expressed as a sum of local (nearest-neighbor) functionals of atomic positions.</p>
		
		<p>Since the basis used for the representation of the wavefunction consists of atomic orbitals at millions of atomic sites, the problem size is very large (typically requiring in excess of 40 GB of RAM). The simulation, then, must be performed on parallel computers.  The first part of the work will address the numerical issues that need to be (and have been) tackled to deal with such a large problem.  Scaling results  will be presented that illustrate the performance of our algorithm on a Beowulf commodity cluster.  </p>
		
		<p>Our presentation will also demonstrate results that arise from this atomistic representation that cannot be obtained through simple effective mass approximations.  For instance, calculations show that although the variation in eigenenergies may be fairly small (less than 1 meV), disordered systems can produce significant local variations in the ground state wave function.</p>
		
		
		
		<p>View <a href="../pubs_src/C84.pps">Powerpoint file</a>.</p>
		
		
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
