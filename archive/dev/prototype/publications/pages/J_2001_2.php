<?php 
	session_start(); 
	include("../../assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>J_2001_2 \ The Nanoelectronic Modeling Group \ Purdue University</title>
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
                    &gt; <a href="<?php echo $siteRoot; ?>publications/pages/J_2001_2">J_2001_2</a>
                <!-- InstanceEndEditable -->
            </div>
            <div class="main-col">
			<!-- InstanceBeginEditable name="content" -->
		
		<h2>Gerhard Klimeck J_2001_2  </h2>
				
		<h3>&quot;Full Band Simulation of Indirect Phonon-Assisted Tunneling in a Silicon Tunnel Diode with Delta-Doped Contacts&quot;,		</h3>
       	<p>Christian Rivas, Roger Lake, Gerhard Klimeck, William R. Frensley, Massimo V. Fischetti, Phillip E. Thompson, Sean L. Rommel, and Paul R. Berger,		</p>
		<p>Applied Physics Letters, , Vol. 78, pg 814, (2001).</p>
		
		
		<h3>Abstract:</h3>: 
        <p>Full-band simulations of indirect, phonon-assisted, interband tunneling are used to calculate the current-voltage response of a low temperature molecular beam epitaxy grown Silicon tunnel diode with delta-doped contacts. Electron confinement in the contacts results in weak structure in the current-voltage characteristic. The structure is lost when infinite lifetime effects are included. The approach uses the non equilibrium Green function formalism in a second neighbor sp3s* planar orbital basis.</p>

		
		
		
		<p>Requests for reprints can be granted for educational use only.</p>
		
		
		
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
