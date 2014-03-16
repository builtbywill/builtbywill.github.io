<?php 
	session_start(); 
	include("../../assets/php/constants.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>OMEN \\ The Nanoelectronic Modeling Group \\ Purdue University</title>
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
				<!-- InstanceEndEditable -->
            </div>
            <div class="main-col">
			<!-- InstanceBeginEditable name="content" -->
			<h2>OMEN</h2>
            <div align="center">
                <p><img width="480" src="omen_img/omen_geometry.jpg"></p>
            </div>
            <p>Within the next &#xFB01;ve to ten years the semiconductor industry will face the greatest challenge in its history. The conventional planar bulk MOSFETs will reach their physical and technical limit and the prolongation of Moore&rsquo;s law will depend on novel and original device structures. For example the feasibility of silicon-on-insulator ultra-thin-body (UTB) and multi-gate nanowire (NW) &#xFB01;eld-effect transistors (FETS) has already been demonstrated by several groups [1,2].</p>
            <p>Modeling such devices requires to go beyond the classical drift-diffusion approach and other effective mass approximation. The treatment of strong quantization effects as well as the atomic dimensions of ultra-scaled transistors is demanding state-of-the art physical models. For that purpose we have developed OMEN [3-5] the &#xFB01;rst atomistic and full-band quantum transport simulator designed for post-CMOS devices like UTB and NW &#xFB01;eld-effect transistors. A brief summary of its simulation capabilities is presented in this paper</p>
            <div align="center">
                <p><a href="/dev/prototype/research-group/members?id=mathieuLuisier&amp;page=BTBT_slide2"><img src="/dev/prototype/member-files/mathieuLuisier/BTBT_IV_cur_col1.gif" alt="" width="345" height="202" border="0"></a></p></div>
            <h3>Method</h3>
            <p>OMEN is a two- and three-dimensional Schrodinger-Poisson solver based on the sp3d5s* semi-empirical tight-binding method [6]. This bandstructure model has been chosen for (i) its ability to reproduce the principal bulk characteristics of electrons and holes, (ii) its straight-forward extension to nanostructures, and (iii) its atomic description of the simulation domain. Carrier and current densities are obtained by injecting electrons and holes at different energies into the device and by solving the resulting system of equations in the Wave Function or in the Non-equilibrium Green&rsquo;s Function formalism [3]. The 2D or 3D Poisson equation is expressed in a &#xFB01;nite-element basis where the tight-binding charges sit on node position. The computation of the bias points, the energy and momentum integrations, as well as the spatial domain decomposition have been <a href="scale_32768.html">parallelized</a> so that a single simulation can run on a number of processors <a href="scale_32768.html">Ncpu up to O(10^4)</a> with a speed-up factor close to Ncpu.</p>
            <h3>Geometry Examples.</h3>
            <p>Typical device structures that OMEN can handle include NW &#xFB01;eld-effect transistors with any cross section shape (square, circular, triangular, hexagonal, .....), gate architecture (all-around, single, double, or triple), and transport direction (&lt;100&gt;, &lt;110&gt;, &lt;111&gt;, &lt;112&gt;, ...) as well as UTB FETs with single- or double-gate and any con&#xFB01;guration of surface orientation and transport direction. Different semiconductor materials have been parametrized, among them Si, Ge, GaAs, InAs, AlAs, or SiGe. Ternary alloy semiconductors like InGaAs and AlGaAs are treated either as virtual crystals or as atomistically and randomly disordered entities [7]. The multi-level parallel implementation of OMEN and the optimization of its numerical algorithm make the simulation of NW with a cross section up to 22 nm and UTB with a body thickness up to 8 nm and a realistic gate length of 22 nm possible.</p>
            <h3>Application Examples.</h3>
            <div align="left">
                <ul>
                    <li><a name="Anchor-Band-to-band-tunneling-47857" id="Anchor-Band-to-band-tunneling-47857"></a>Band-to-band-tunneling in InAs devices
                        
                        <ul>
                            <li><a href="/dev/prototype/research-group/members?id=mathieuLuisier&amp;page=BTBT_slide1">Momentum-Energy-Resolved Transport in Full-Band Simulations<br>
                                    <img src="/dev/prototype/member-files/mathieuLuisier/BTBT_tunnelin_anim_withbands.gif" alt="" width="421" height="176" border="0"></a>
                            <li><a href="/dev/prototype/research-group/members?id=mathieuLuisier&amp;page=BTBT_slide2">Charge Self-consistent Full-Band Transport in Realistic Structures<br>
                                </a><b> <img src="/dev/prototype/member-files/mathieuLuisier/BTBT_IV_cur_col1.gif" alt="" width="415" height="244" border="0"></b>
                            <li>Gate Control and Sub-Threshold Swing in BTBT<br>
                                <a href="/dev/prototype/research-group/members?id=mathieuLuisier&amp;page=BTBT_slide3">Comparison of in pin InAs Devices</a> &#150; SG-UTB / DG-UTB / NW<br>
                                <a href="/dev/prototype/research-group/members?id=mathieuLuisier&amp;page=BTBT_slide3"><img src="/dev/prototype/member-files/mathieuLuisier/BTBT_structures1.jpg" alt="" width="422" height="313" border="0"></a>.
                        </ul>
                    
                    <li><a name="Anchor-InAs-11481" id="Anchor-InAs-11481"></a>InAs/InAlGaAs HEMT devices.  To be published at IEDM 2008 [<a href="/dev/prototype/publications/proceedings#P104">J104</a>].
                    <li><a name="Anchor-35882" id="Anchor-35882"></a>n- and p-doped double-gate MOSFETs for the 22nm technology node [<a href="/dev/prototype/publications/proceedings#P101">J101</a>].
                </ul>
            </div>
            
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
