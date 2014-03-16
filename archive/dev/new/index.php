<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Built By Will"/>
    <meta name="copyright" content="&copy; 2010 Built By Will"/>
    <meta name="description" content="Portfolio site of Indiana Web Designer and Developer Will Grauvogel" />
    <meta name="keywords" content="builtbywill, built, will, grauvogel, indiana, purdue, west lafayette, design, web design, interface, flash, multimedia, flash design, portfolio, graphic design, standards compliant" />    
    <title>Built by Will - UX Design + Development</title>
    <link type="image/x-icon" href="img/favicon_day.png" rel="shortcut icon" />
    <link type="text/css" href="css/base.css" rel="stylesheet" />
</head>
<body class="night">
    <div id="header">
        <div class="wrap">
            <h1><a href="./" id="logo" title="Built by Will">built by will</a></h1>
            <div id="switch"><a href="#" title="Switch Theme - Day + Night">Switch Theme - Day + Night</a></div>
            <ul id="nav">
                <li><a href="#projects" id="nav-projects" class="current" title="Projects">projects</a></li>
                <li><a href="#about" id="nav-about" title="About">about</a></li>
                <li><a href="#contact" id="nav-contact" title="Contact">contact</a></li>
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
                                <li><a href="#project_4" title="Discovery Park Undergraduate Research Internship Program"></a></li>
                                <li><a href="#project_5" title="xOpenAir Chat"></a></li>
                                <li><a href="#project_6" title="Notre Dame Marketplace"></a></li>
                                <li><a href="#project_7" title="Grauvogel &amp; Associates"></a></li>
                                <li><a href="#project_8" title="GLHRC Lives Interrupted"></a></li>
                            </ul>
                        </div>
                        <div class="project-box">
                            <div class="project-mask">
                                <ul>                    
                                    <li id="project_1" class="current">
                                        <img src="img/projects/viewbook.jpg" alt="Project Image - Discovery Park Viewbook" />
                                        <div class="description">
                                            <a href="http://www.purdue.edu/dp/viewbook" class="btn" target="_blank">visit site</a>
                                            <h3>Discovery Park Viewbook</h3>
                                            <p>The Disovery Park Viewbook was a project intended to highlight the mission and impact of Discovery Park. The site consists of 5 separate sections of content which each address a specific area of impact and are presented in a very intuitive interactive experience. For this project, I developed a jQuery plugin which simulates the page turning of a book. To view and download the plugin you can go to <a href="http://code.builtbywill.com/viewbook" target="_blank">http://code.builtbywill.com/viewbook</a>. I contributed to the design, markup, interactive elements and content creation on this project.</p>
                                        </div>
                                        <a href="img/projects/viewbook_large.jpg" class="fancy project-overlay"></a>                                   
                                    </li>
                                    <li id="project_2">
                                        <img src="img/projects/statefarm_small.jpg" alt="Project Image - State Farm" />
                                      <div class="description">
                                            <a href="http://www.facebook.com/insurewithjosh" class="btn" target="_blank">visit site</a>
                                            <h3>Josh Baumgartner - State Farm Facebook Page</h3>
                                            <p>To increase exposure to clients and customers this facebook fan page was created for State Farm Agent Josh Baumgartner. My role on this project was focused on the HTML markup and wrangling with FBML and FBJS.</p>
                                      </div>
                                         <a href="img/projects/statefarm_large.jpg" class="fancy project-overlay"></a>                                   
                                    </li>
                                    <li id="project_3">
                                        <img src="img/projects/hotseat.jpg" alt="Project Image - Hotseat" />
                                      <div class="description">
                                            <a href="http://www.youtube.com/v/Wz6TUhcGf6s&amp;hl=en_US&amp;fs=1&amp;rel=0&amp;hd=1" class="btn hotseat">view video</a>
                                            <h3>Hotseat at Purdue Promo Video</h3>
                                            <p>Hotseat, a social networking-powered mobile Web application, creates a collaborative classroom, allowing students to provide near real-time feedback during class and enabling professors to adjust the course content and improve the learning experience. This video was created for the launch of Hotseat and was created using After Effects and Illustrator.</p>
                                      </div>
                                        <a href="http://www.youtube.com/v/Wz6TUhcGf6s&amp;hl=en_US&amp;fs=1&amp;rel=0&amp;hd=1" class="hotseat project-overlay"></a>                                    
                                    </li>
                                    <li id="project_4">
                                        <img src="img/projects/duri_small.jpg" alt="Project Image - DURI" />
                                      <div class="description">
                                            <a href="http://www.purdue.edu/dp/duri/" class="btn" target="_blank">visit site</a>
                                            <h3>Discovery Park Undergraduate Research Internship Program</h3>
                                            <p>The Discovery Park Undergraduate Research Internship (DURI) program is designed to involve Purdue undergraduates in the interdisciplinary research environment of Discovery Park. I designed an extensive backend application in Coldfusion to manage the hundreds of applications which are submitted on a semester basis. The site allows administrators to take an application completely through the process from submission, review, and acceptance. The site also incorporates management portals for Students and Faculty Members to access their applications and projects.</p>
                                      </div>
                                        <a href="img/projects/duri_large.jpg" class="fancy project-overlay"></a>                                    
                                    </li>
                                    <li id="project_5">
                                        <img src="img/projects/xopenair_small.jpg" alt="Project Image - xOpenAir" />
                                      <div class="description">
                                            <a href="#" class="btn xopenair" target="_blank">view pics</a>
                                            <h3>xOpenAir Chat</h3>
                                            <p>xOpenAir Chat is a platform-independent Collaboration and Message Client built in Adobe Flex and utilizing <acronym title="eXtensible Messaging and Presence Protocol">XMPP</acronym> (Jabber). It combines instant messaging, video and voice, whiteboarding and file transferring into a single application with a unique interface. The goal of this project was to explore if a multi-function application like xOpenAir Chat would be perceived to be more effective in a business environment than traditional methods of communication. The project is currently in haitus and is not available.</p>
                                      </div>
                                        <a href="img/projects/xOpenAir1.jpg" class="xopenair project-overlay"></a>                                    
                                    </li>
                                    <li id="project_6">
                                        <img src="img/projects/nd_small.jpg" alt="Project Image - ND Marketplace" />
                                      <div class="description">
                                            <a href="img/projects/nd_large.jpg" class="btn fancy" target="_blank">view pic</a>
                                            <h3>Notre Dame Marketplace</h3>
                                            <p>The Notre Dame Marketplace provides campus organizations with secure and cost-effective e-commerce solutions. Hosting over 15 stores, they are well equipped to manage a variety of needs. During my work there, I completed a redesign of the main website, as well as worked on porting all of the store design layouts between content management systems.</p>
                                      </div>
                                        <a href="img/projects/nd_large.jpg" class="fancy project-overlay"></a>                                    
                                    </li>
                                    <li id="project_7">
                                        <img src="img/projects/g&amp;a_small.jpg" alt="Project Image - Grauvogel and Associates" />
                                      <div class="description">
                                            <a href="http://www.grauvogel-associates.com" class="btn" target="_blank">visit site</a>
                                            <h3>Grauvogel &amp; Associates</h3>
                                            <p>Grauvogel &amp; Associates is a professional engineering and industrial hygiene consulting company, serving clients in Indiana and southern Michigan. I completed an entire site redesign, edited copy and utilized xHTML, CSS and PHP.</p>
                                      </div>
                                        <a href="img/projects/g&amp;a_large.jpg" class="fancy project-overlay"></a>                                    
                                    </li>
                                    <li id="project_8">
                                        <img src="img/projects/glhrc_small.jpg" alt="Project Image - GLHRC" />
                                      <div class="description">
                                            <a href="docs/GLHRC_Flyer.pdf" class="btn" target="_blank">view pdf</a>
                                            <h3>GLHRC Lives Interrupted</h3>
                                            <p>The Greater Lafayette Holocaust Remembrance Conference, or GLHRC, is an annual conference held in the spring. I was contracted with designing a 14 x 21 inch poster, a two sided 8.5 x 11 inch flyer, as well as 66 x 21 inch poster which was printed and displayed on the back of three buses in West Lafayette.</p>
                                      </div>
                                        <a href="img/projects/glhrc_large.jpg" class="fancy project-overlay"></a>                                    
                                    </li>
                                </ul>    
                            </div>
                        </div>
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
                        <img src="img/will.png" alt="Will's Picture" class="right" />
                        <h3>bio</h3>
                        <p>Hello! Thanks for taking a look at my work. I am a designer and developer and I love coming up with new ways to share content and make fun memorable experiences on the web. I have experience with Web Design, Graphic Design and Interactive Application Development and have worked on quite a few projects. I am currently employed by Purdue University as a Web Application Programmer, but am always open to new freelance work or fun side projects.</p>
                        <p>I am always open to considering new projects or just simply making connections so please feel free to contact me.</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
            <li id="contact">
            	<div class="wrap">
                    <div class="col-fourth">
                        <h2>contact</h2>
                    </div>
                    <div class="col-2">
                        <h3>why not say hi?</h3>
                        <p>Go ahead, do it. You know you want to. Most means of contact you can find here. Feel free to contact me for any of the following:</p>
                        <ul class="bulleted">
                        	<li>Freelance Projects</li>
                        	<li>Questions about this Site</li>
                        	<li>Random Conversation</li>
                        	<li>Zombie Apocalyse or Invisible Raptors</li>
                        </ul>
                        <p class="icon icon-twitter"><a href="http://twitter.com/builtbywill" title="@builtbywill on twitter" target="_blank">@builtbywill</a></p>
                        <p class="icon icon-gmail">builtbywill@gmail.com</p>
                        <p class="icon icon-phone">+1 574.286.6908</p>
                    </div>
                    <div class="col-third">
                        <h3>quick contact</h3>
                        <div id="message"><?php if(!empty($_SESSION["errormsg"])) echo $_SESSION["errormsg"]; ?><?php if(!empty($_SESSION["message"])) echo $_SESSION["message"]; ?></div>
                        <form method="post" action="php/mail.php" id="contact_form">
                        	<div>
                                <input id="name" type="text" name="name" value="<?php if(!empty($_SESSION["name"])) echo $_SESSION["name"]; else echo 'name'; ?>" title="name"/>
                                <input id="email" type="text" name="email" value="<?php if(!empty($_SESSION["email"])) echo $_SESSION["email"]; else echo 'email'; ?>" title="email"/>
                                <textarea id="comments" name="comments" rows="7" cols="6" title="comments"><?php if(!empty($_SESSION["comments"])) echo $_SESSION["comments"]; else echo 'comments'; ?></textarea>
                                <input type="submit" alt="submit" value="send" id="button"/>
                           	</div>
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
        </ul>
        </div>
	<? include("../../../-/php/footer.php"); ?>
    <div class="mask">

        <div id="bg-4"></div>
        <div id="bg-5"></div>
    </div>
    <div id="bg-3"></div>
    <div id="bg-2"></div>
    <div id="bg-1"></div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="js/jquery.plugins.js"></script>
    <script type="text/javascript" src="js/builtbywill.1.0.js"></script>
    <!--[if lte IE 6]><script src="js/ie6/warning.js"></script><script>window.onload=function(){e("js/ie6/")}</script><![endif]-->
</body>
</html>
<?php
	$_SESSION["message"] = "";
	$_SESSION["errormsg"] = "";
?>
