<?php 
	session_start(); 
	include("../assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Prospective Students \\ The Nanoelectronic Modeling Group \\ Purdue University</title>
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
                <h1>Prospective Students</h1>
            <!-- InstanceEndEditable -->
        </div>
    </div> 
<!-- @end mast -->
    <div id="content">
    	<div class="center">
            <div id="crumbs">
                <a href="<?php echo $siteRoot; ?>">Home</a>
                <!-- InstanceBeginEditable name="breadcrumbs" -->
                &gt; <a href="../research-group/">Research Group</a>
                &gt; <a href="prospective-students">Prospective Students</a>	
                <!-- InstanceEndEditable -->
            </div>
            <div class="main-col">
			<!-- InstanceBeginEditable name="content" -->
                <h2>Some Notes for Prospective Students</h2>
                <p>Admissions to to the School of Electrical and Computer Engineering are handled through a central admission process. If you are seeking financial support for your graduate studies it is useful to understand what the individual research groups are doing. With such background knowledge you may want to contact specific faculty members and engage them in a constructive discussion. Blanket letters that show no understanding what the research group does are not very helpful to the faculty member.</p>
                <p>The Nanoelectronic Modeling Group is focused on the building, using, and deployment of nanoelectronic modeling and simulation codes. Prof. Klimeck has focussed in his career at Texas Instruments, NASA JPL, and now Purdue on the construction of <a href="/dev/prototype/software-projects/nemo1D/" target="_self">NEMO 1-D</a> and <a href="/dev/prototype/software-projects/nemo3D/" target="_self">NEMO 3-D</a>. With the advent of massively parallel computing we have begun to scale these two codes to 23,000 and 8,192 cores/CPUs. </p>
                <p>We are under way to build the next generation code in the group codenamed OMEN - NEMO backwards - one more time, now in 1D, 2D, and 3D.... It will combine the non-equilibrium transport capabilities of NEMO 1-D and the multimillion atom electronic structure capabilities of NEMO 3-D into one new exciting code.</p>
                <p>All of these kind of developments are ultimately delivered to users through the <a href="http://nanoHUB.org" target="_self">nanoHUB.org</a> website. For example the NEMO3-D code has an educational version that runs on the nanoHUB as the <a href="https://www.nanohub.org/resources/450/" target="_self">quantum dot lab</a>  A flash <a href="https://www.nanohub.org/resource_files/tools/qdot/qdot.swf">demo</a> is available . Other tools that do transport or atomistic calculations and have been used by hundreds of people already are the <a href="https://www.nanohub.org/resources/1308" target="_self">bandstructure lab</a>, the <a href="https://www.nanohub.org/tools/nanowire/" target="_self">nanowire lab</a> , and  the <a href="https://www.nanohub.org/tools/nanofet/" target="_self">nanoFET lab</a>: </p>
                <p>Presentation material like <a href="https://www.nanohub.org/resources/381/" target="_self">"Bandstructure in Nanoelectronics"</a>,  
                <a href="https://www.nanohub.org/resources/2350" target="_self">"Atomistic Alloy Disorder in Nanostructures"</a>, 
                and <a href="https://www.nanohub.org/resources/189/" target="_self">"Quantum Dots"</a>  help users to understand the nanomaterial better and might give you an idea of what work is being done in the group.
                Each of these materials and simulation tools have been used by hundreds of users. </p>
                <p>Overall the nanoHUB has been used by over 50,000 people in 172 countries in the the year 2007 alone. 5,800 people ran over 200,000 simulations. </p>
                <p>Purdue is one of the very the best places in the world right now to study theoretical electron transport at the nanometer scale. The nanoHUB is an opportunity for students to impact the rest of the world and have an outcome with their PhD thesis that goes beyond a few papers. At Purdue we have 4 theory / modeling professors: Datta, Lundstrom, Alam, and Klimeck. </p>
                <p>The Nanoelectronic Modeling Group is the one primarily focused on model building, numerical developments, and parallel computing. As you consider graduate school and applying to this group ask yourself:</p>
                <ul>
                    <li>Have you taken interest in fundamental semiconductor device classes and quantum mechanics classes?</li>
                    <li>Are you interested in such numerically intensive work?</li>
                    <li>What is your expertise in software development?</li>
                    <li>What languages can you develop software in?</li>
                    <li>Have you done parallel code development?</li>
                    <li>Are you interested more in the software parts of EE or the theoretical parts of understanding nanoelectronics?</li>
                    <li>Have you performed independent research work?</li>
                </ul>
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
