<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Built By Will"/>
    <meta name="copyright" content="&copy; 2010 Built By Will"/>
    <meta name="description" content="Portfolio site of Indiana Web Designer and Developer Will Grauvogel" />
    <meta name="keywords" content="builtbywill, built, will, grauvogel, indiana, purdue, west lafayette, design, web design, interface, flash, multimedia, flash design, portfolio, graphic design, standards compliant" />    
	<meta name="google-site-verification" content="Vv-F3PTIcS6Y_WyioQB9ZjrE6i4dlSPD6JeLb_ubZdA" />    
    <title>Built by Will - UX Design + Development</title>
    <link type="image/x-icon" href="favicon.ico" rel="shortcut icon" />
    <link type="text/css" href="/-/css/base.css" rel="stylesheet" />
</head>
<body class="night">
<? include("-/php/analytics.php"); ?>
    <div id="header">
        <div class="wrap">
            <h1><a href="/" id="logo">built by will</a></h1>
            <div id="switch"><a href="#" title="Change day and night themes!">Change day and night themes!</a></div>
            <ul id="nav">
                <li><a href="#projects" id="nav-projects" class="current" onClick="_gaq.push(['_trackPageview', '/'])">projects</a></li>
                <li><a href="#code" id="nav-code" onClick="_gaq.push(['_trackPageview', '/code'])">code</a></li>
                <li><a href="#about" id="nav-about" onClick="_gaq.push(['_trackPageview', '/about'])">about</a></li>
                <li><a href="#contact" id="nav-contact" onClick="_gaq.push(['_trackPageview', '/contact'])">contact</a></li>
            </ul>
        </div>
    </div>
    <div id="content-mask">
        <ul id="content">
            <li id="projects">
            	<div class="wrap">
                    <div class="col-1">
                        <h2>projects</h2>
                    </div>
                    <div class="col-4">
                        <div class="project-controls">
                            <a href="#" class="next" title="Next Project">Next</a>
                            <a href="#" class="prev" title="Previous Project">Previous</a>
                            <ul class="dots">
                                <li><a href="#project_1" class="current" title="Discovery Park Viewbook"></a></li>
                                <li><a href="#project_2" title="Josh Baumgartner - State Farm Facebook Page"></a></li>
                                <li><a href="#project_3" title="Hotseat at Purdue Promo Video"></a></li>
                                <li><a href="#project_4" title="DURI Program"></a></li>
                                <li><a href="#project_5" title="Nanoelectronic Modeling Group - GEKCO"></a></li>
                                <li><a href="#project_6" title="ASSE - Michiana Chapter"></a></li>
                                <li><a href="#project_7" title="xOpenAir Chat"></a></li>
                                <li><a href="#project_8" title="Notre Dame Marketplace"></a></li>
                                <li><a href="#project_9" title="Grauvogel &amp; Associates"></a></li>
                                <li><a href="#project_10" title="GLHRC Lives Interrupted"></a></li>
                            </ul>
                        </div>
                        <div class="project-box">
                            <div class="project-mask">
                                <ul>                    
                                    <li id="project_1">
                                        <img src="/-/img/projects/viewbook.jpg" alt="Project Image - Discovery Park Viewbook" />
                                        <div class="description">
                                            <a href="http://www.purdue.edu/dp/viewbook" class="btn" target="_blank">visit site</a>
                                            <h3>Discovery Park Viewbook - Visions of Discovery</h3>
                                            <p>The Disovery Park Viewbook was a project intended to highlight the mission and impact of Discovery Park. The site consists of 5 separate sections of content which each address a specific area of impact and are presented in a very intuitive interactive experience. For this project, I developed a jQuery plugin which simulates the page turning of a book. To view and download the most recent version of the plugin you can go to <a href="http://builtbywill.com/code/booklet" target="_blank" title="jQuery Booklet Plugin">jQuery Booklet Plugin</a>. I contributed to the design, markup, interactive elements and content creation on this project. <a href="http://www.purdue.edu/discoverypark/global/news/news.php?id=830&amp;center=1" target="_blank">Visions of Discovery Wins 2010 Pride of Case V Award</a></p>
                                        </div>
                                        <a href="/-/img/projects/viewbook_1.jpg" rel="project_1" title="Discovery Park Viewbook" class="fancy project-overlay"></a>
                                        <a href="/-/img/projects/viewbook_2.jpg" rel="project_1" title="Discovery Park Viewbook" class="fancy fancy-hidden"></a>
                                        <a href="/-/img/projects/viewbook_3.jpg" rel="project_1" title="Discovery Park Viewbook" class="fancy fancy-hidden"></a>
                                        <a href="/-/img/projects/viewbook_4.jpg" rel="project_1" title="Discovery Park Viewbook" class="fancy fancy-hidden"></a>
                                        <a href="/-/img/projects/viewbook_5.jpg" rel="project_1" title="Discovery Park Viewbook" class="fancy fancy-hidden"></a>
                                    </li>
                                    <li id="project_2">
                                        <img src="/-/img/projects/statefarm_small.jpg" alt="Project Image - State Farm" />
                                        <div class="description">
                                            <a href="http://www.facebook.com/insurewithjosh" class="btn" target="_blank">visit site</a>
                                            <h3>Josh Baumgartner - State Farm Facebook Page</h3>
                                            <p>To increase exposure to clients and customers this facebook fan page was created for State Farm Agent Josh Baumgartner. My role on this project was focused on the HTML markup and wrangling with FBML and FBJS.</p>
                                        </div>
                                         <a href="/-/img/projects/statefarm_large.jpg" title="Josh Baumgartner - State Farm Facebook Page" class="fancy project-overlay"></a>
                                    </li>
                                    <li id="project_3">
                                        <img src="/-/img/projects/hotseat.jpg" alt="Project Image - Hotseat" />
                                    	<div class="description">
                                            <a href="http://www.youtube.com/v/Wz6TUhcGf6s&amp;hl=en_US&amp;fs=1&amp;rel=0&amp;hd=1" class="btn hotseat">view video</a>
                                            <h3>Hotseat at Purdue Promo Video</h3>
                                            <p>Hotseat, a social networking-powered mobile Web application, creates a collaborative classroom, allowing students to provide near real-time feedback during class and enabling professors to adjust the course content and improve the learning experience. This video was created for the launch of Hotseat and was created using After Effects and Illustrator.</p>
                                    	</div>
                                        <a href="http://www.youtube.com/v/Wz6TUhcGf6s&amp;hl=en_US&amp;fs=1&amp;rel=0&amp;hd=1" class="hotseat project-overlay"></a>
                                    </li>
                                    <li id="project_4">
                                        <img src="/-/img/projects/duri_small.jpg" alt="Project Image - DURI" />
                                    	<div class="description">
                                            <a href="http://www.purdue.edu/dp/duri/" class="btn" target="_blank">visit site</a>
                                            <h3>Discovery Park Undergraduate Research Internship Program</h3>
                                            <p>The Discovery Park Undergraduate Research Internship (DURI) program is designed to involve Purdue undergraduates in the interdisciplinary research environment of Discovery Park. I designed an extensive backend application in Coldfusion to manage the hundreds of applications which are submitted on a semester basis. The site allows administrators to take an application completely through the process from submission, review, and acceptance. The site also incorporates management portals for Students and Faculty Members to access their applications and projects.</p>
                                    	</div>
                                        <a href="/-/img/projects/duri_1.jpg" rel="project_4" title="Discovery Park Undergraduate Research Internship Program" class="fancy project-overlay"></a>                                    
                                        <a href="/-/img/projects/duri_2.jpg" rel="project_4" title="Discovery Park Undergraduate Research Internship Program" class="fancy fancy-hidden"></a>                                    
                                        <a href="/-/img/projects/duri_3.jpg" rel="project_4" title="Discovery Park Undergraduate Research Internship Program" class="fancy fancy-hidden"></a>                                    
                                        <a href="/-/img/projects/duri_4.jpg" rel="project_4" title="Discovery Park Undergraduate Research Internship Program" class="fancy fancy-hidden"></a>                                    
                                        <a href="/-/img/projects/duri_5.jpg" rel="project_4" title="Discovery Park Undergraduate Research Internship Program" class="fancy fancy-hidden"></a>                                    
                                    </li>
                                    <li id="project_5">
                                        <img src="/-/img/projects/gekco_small.jpg" alt="Project Image - GEKCO" />
                                    	<div class="description">
                                            <a href="https://engineering.purdue.edu/gekcogrp/" class="btn" target="_blank">view site</a>
                                            <h3>Nanoelectronic Modeling Group - GEKCO</h3>
                                            <p>The Nanoelectronic Modeling Group works in the area of nanoelectronics where they try to better the understanding of electron flow through nano-scale devices. I designed the overall theme and layout of the site along with some javascript enhancements.</p>
                                    	</div>
                                        <a href="/-/img/projects/gekco_1.jpg" rel="project_5" title="Nanoelectronic Modeling Group - GEKCO" class="fancy project-overlay"></a>                                    
                                        <a href="/-/img/projects/gekco_2.jpg" rel="project_5" title="Nanoelectronic Modeling Group - GEKCO" class="fancy fancy-hidden"></a>                                    
                                        <a href="/-/img/projects/gekco_3.jpg" rel="project_5" title="Nanoelectronic Modeling Group - GEKCO" class="fancy fancy-hidden"></a>                                    
                                    </li>
                                    <li id="project_6">
                                        <img src="/-/img/projects/asse_small.jpg" alt="Project Image - ASSE" />
                                    	<div class="description">
                                            <a href="http://michiana-asse.org" class="btn" target="_blank">view site</a>
                                            <h3>ASSE - Michiana Chapter</h3>
                                            <p>The Michiana Chapter ASSE was officially chartered on June 20, 1982, spun off from the former Tri-State Chapter.  I utilized the Wordpress Blogging platform to create a website for the chapter, giving them a basic content manangement system where they can easily update pages and content. I designed the wordpress theme, implemented the site, and currently perform light upkeep and maintenance.</p>
                                    	</div>
                                        <a href="/-/img/projects/asse_1.jpg" rel="project_6" title="ASSE - Michiana Chapter" class="fancy project-overlay"></a>                                    
                                        <a href="/-/img/projects/asse_2.jpg" rel="project_6" title="ASSE - Michiana Chapter" class="fancy fancy-hidden"></a>                                    
                                    </li>
                                    <li id="project_7">
                                        <img src="/-/img/projects/xopenair_small.jpg" alt="Project Image - xOpenAir" />
                                    	<div class="description">
                                            <a href="#" class="btn xopenair" target="_blank">view pics</a>
                                            <h3>xOpenAir Chat</h3>
                                            <p>xOpenAir Chat is a platform-independent Collaboration and Message Client built in Adobe Flex and utilizing <acronym title="eXtensible Messaging and Presence Protocol">XMPP</acronym> (Jabber). It combines instant messaging, video and voice, whiteboarding and file transferring into a single application with a unique interface. The goal of this project was to explore if a multi-function application like xOpenAir Chat would be perceived to be more effective in a business environment than traditional methods of communication. The project is currently in haitus and is not available.</p>
                                    	</div>
                                        <a href="/-/img/projects/xOpenAir1.jpg" rel="project_7" title="xOpenAir Chat" class="fancy project-overlay"></a>                                    
                                        <a href="/-/img/projects/xOpenAir2.jpg" rel="project_7" title="xOpenAir Chat" class="fancy fancy-hidden"></a>                                    
                                        <a href="/-/img/projects/xOpenAir3.jpg" rel="project_7" title="xOpenAir Chat" class="fancy fancy-hidden"></a>                                    
                                        <a href="/-/img/projects/xOpenAir4.jpg" rel="project_7" title="xOpenAir Chat" class="fancy fancy-hidden"></a>                                    
                                        <a href="/-/img/projects/xOpenAir5.jpg" rel="project_7" title="xOpenAir Chat" class="fancy fancy-hidden"></a>                                    
                                    </li>
                                    <li id="project_8">
                                        <img src="/-/img/projects/nd_small.jpg" alt="Project Image - ND Marketplace" />
                                    	<div class="description">
                                            <a href="/-/img/projects/nd_large.jpg" class="btn fancy" target="_blank">view pic</a>
                                            <h3>Notre Dame Marketplace</h3>
                                            <p>The Notre Dame Marketplace provides campus organizations with secure and cost-effective e-commerce solutions. Hosting over 15 stores, they are well equipped to manage a variety of needs. During my work there, I completed a redesign of the main website, as well as worked on porting all of the store design layouts between content management systems.</p>
                                    	</div>
                                        <a href="/-/img/projects/nd_large.jpg" title="Notre Dame Marketplace" class="fancy project-overlay"></a>                                    
                                    </li>
                                    <li id="project_9">
                                        <img src="/-/img/projects/g&amp;a_small.jpg" alt="Project Image - Grauvogel and Associates" />
                                    	<div class="description">
                                            <a href="http://www.grauvogel-associates.com" class="btn" target="_blank">visit site</a>
                                            <h3>Grauvogel &amp; Associates</h3>
                                            <p>Grauvogel &amp; Associates is a professional engineering and industrial hygiene consulting company, serving clients in Indiana and southern Michigan. I completed an entire site redesign, edited copy and utilized xHTML, CSS and PHP.</p>
                                    	</div>
                                        <a href="/-/img/projects/g&amp;a_large.jpg" title="Grauvogel &amp; Associates" class="fancy project-overlay"></a>
                                    </li>
                                    <li id="project_10">
                                        <img src="/-/img/projects/glhrc_small.jpg" alt="Project Image - GLHRC" />
                                    	<div class="description">
                                            <a href="/-/docs/GLHRC_Flyer.pdf" class="btn" target="_blank">view pdf</a>
                                            <h3>GLHRC Lives Interrupted</h3>
                                            <p>The Greater Lafayette Holocaust Remembrance Conference, or GLHRC, is an annual conference held in the spring. I was contracted with designing a 14 x 21 inch poster, a two sided 8.5 x 11 inch flyer, as well as 66 x 21 inch poster which was printed and displayed on the back of three buses in West Lafayette.</p>
                                    	</div>
                                        <a href="/-/img/projects/glhrc_large.jpg" title="GLHRC Lives Interrupted" class="fancy project-overlay"></a>
                                    </li>
                                </ul>    
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
            <li id="code">
                <div class="wrap">
                     <div class="col-1">
                        <h2>code</h2>
                    </div>
                    <div class="col-4">
                    	<h3>code samples</h3>
                        <p>Below is the start of some side projects which I have developed in my free time in order to make them open to the public. Take a look and let me know if you use them!</p>
                    	<ul>
                        	<li><h3><a href="code/booklet/">jQuery Booklet Plugin</a></h3></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
               </div>
            </li>
            <li id="about">
            	<div class="wrap">
                    <div class="col-1">
                        <h2>about</h2>
                    </div>
                    <div class="col-4">
                        <img src="/-/img/will.png" alt="Will's Picture" class="right" />
                        <h3>bio</h3>
                        <p>Hello! Thanks for taking a look at my work. I am a designer and developer and I love coming up with new ways to share content and make fun and memorable experiences on the web. I have experience with Web Design, Graphic Design and Interactive Application Development and have worked on quite a few projects. I am currently employed by <a href="http://www.purdue.edu" target="_blank">Purdue University</a> as a Web Application Programmer, but am always open to new freelance work or fun side projects.</p>
                        <p>I am always open to considering new projects or just simply making connections so please feel free to contact me.</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
            <li id="contact">
            	<div class="wrap">
                    <div class="col-1">
                        <h2>contact</h2>
                    </div>
                    <div class="col-4">
                        <h3>why not say hi?</h3>
                        <p>Go ahead, do it. You know you want to. Most means of contact you can find here. Feel free to contact me for any of the following:</p>
                        <ul class="bulleted">
                        	<li>Freelance Projects</li>
                        	<li>Questions about this Site</li>
                        	<li>Random Conversation</li>
                        	<li>Zombie Apocalypse or Invisible Raptors</li>
                        </ul>
                        <p class="icon icon-twitter"><a href="http://twitter.com/builtbywill" title="@builtbywill on twitter" target="_blank">@builtbywill</a></p>
                        <p class="icon icon-gmail">builtbywill [at] gmail.com</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
        </ul>
    </div>
<? include("-/php/footer.php"); ?>
    <div class="mask">
        <div id="bg-4"></div>
        <div id="bg-5"></div>
    </div>
    <div id="bg-3"></div>
    <div id="bg-2"></div>
    <div id="bg-1"></div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/-/js/jquery.plugins.js"></script>
    <script type="text/javascript" src="/-/js/jquery.qtip.js"></script>
    <script type="text/javascript" src="/-/js/jquery.fancybox-1.3.1.pack.js"></script>
    <script type="text/javascript" src="/-/js/jquery.mousewheel-3.0.2.pack.js"></script>
    <script type="text/javascript" src="/-/js/jquery.featuresupport-0.1.js"></script>
    <script type="text/javascript" src="/-/js/jquery.placeholderfix.js"></script>
    <script type="text/javascript" src="/-/js/builtbywill.1.0.js"></script>
    <!--[if lte IE 6]><script src="/-/js/ie6/warning.js"></script><script>window.onload=function(){e("js/ie6/")}</script><![endif]-->
</body>
</html>
<?php
	$_SESSION["message"] = "";
	$_SESSION["errormsg"] = "";
?>