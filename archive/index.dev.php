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
    <style type="text/css">
		html { background-attachment:fixed;}
		#content-mask {margin:150px 0; overflow:visible; z-index:0;}
		#header, #footer,
		#bg-1, #bg-2, #bg-3, #bg-4, #bg-5 {position:fixed;}
		
		.block img {width:100%;}
	</style>
</head>
<body class="night">
<? //include("-/php/analytics.php"); ?>
    <div id="header">
        <div class="wrap">
            <h1><a href="/" id="logo">built by will</a></h1>
            <div id="switch"><a href="#" title="Change day and night themes!">Change day and night themes!</a></div>
            <ul id="nav">
                <li><a href="#projects" id="nav-projects" class="current">projects</a></li>
                <li><a href="#about" id="nav-about">about</a></li>
                <li><a href="#contact" id="nav-contact">contact</a></li>
                <!--
                <li><a href="#projects" id="nav-projects" class="current" onClick="_gaq.push(['_trackPageview', '/'])">projects</a></li>
                <li><a href="#code" id="nav-code" onClick="_gaq.push(['_trackPageview', '/code'])">code</a></li>
                <li><a href="#about" id="nav-about" onClick="_gaq.push(['_trackPageview', '/about'])">about</a></li>
                <li><a href="#contact" id="nav-contact" onClick="_gaq.push(['_trackPageview', '/contact'])">contact</a></li>
                -->
            </ul>
        </div>
    </div>
    <div id="bg-4"></div>
    <div id="content-mask">
        <div class="wrap" id="projects">
            <div class="col-5">
            
                <div class="block"><a href="#"><img src="/-/img/projects/dp_small.jpg" alt="Project Image - Discovery Park" /></a></div>
                <div class="block"><a href="#"><img src="/-/img/projects/doubletake.jpg" alt="Project Image - Doubletake" /></a></div>
                <div class="block"><a href="#"><img src="/-/img/projects/mixable_small.jpg" alt="Project Image - Mixable" /></a></div>
                <div class="block"><a href="#"><img src="/-/img/projects/booklet_small.jpg" alt="Project Image - jQuery Booklet" /></a></div>
                <div class="block"><a href="#"><img src="/-/img/projects/viewbook.jpg" alt="Project Image - Discovery Park Viewbook" /></a></div>
                <div class="block"><a href="#"><img src="/-/img/projects/statefarm_small.jpg" alt="Project Image - State Farm" /></a></div>
                <div class="block"><a href="#"><img src="/-/img/projects/hotseat.jpg" alt="Project Image - Hotseat" /></a></div>
                <div class="block"><a href="#"><img src="/-/img/projects/duri_small.jpg" alt="Project Image - DURI" /></a></div>
                <div class="block"><a href="#"><img src="/-/img/projects/gekco_small.jpg" alt="Project Image - GEKCO" /></a></div>
                <div class="block"><a href="#"><img src="/-/img/projects/asse_small.jpg" alt="Project Image - ASSE" /></a></div>
                <div class="block"><a href="#"><img src="/-/img/projects/xopenair_small.jpg" alt="Project Image - xOpenAir" /></a></div>
                <div class="block"><a href="#"><img src="/-/img/projects/nd_small.jpg" alt="Project Image - ND Marketplace" /></a></div>
                <div class="block"><a href="#"><img src="/-/img/projects/g&amp;a_small.jpg" alt="Project Image - Grauvogel and Associates" /></a></div>
                <div class="block"><a href="#"><img src="/-/img/projects/glhrc_small.jpg" alt="Project Image - GLHRC" /></a></div>
            
            </div>
            <div class="clear"></div>
            <div style="position:fixed; top:0; left:0; height:150px; background:#73c2e7; width:100%;"></div>
        </div>
        
        <div class="wrap" id="about">
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
        
        <div class="wrap" id="contact">
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
                <p class="icon icon-gmail">builtbywill [at] gmail.com</p>
                <? //<p class="icon icon-phone">+1 574.286.6908</p> ?>
            </div>
            <div class="col-third">
                <h3>quick contact</h3>
                <div id="message"><?php if(!empty($_SESSION["errormsg"])) echo $_SESSION["errormsg"]; ?><?php if(!empty($_SESSION["message"])) echo $_SESSION["message"]; ?></div>
                <form method="post" action="/-/php/mail.php" id="contact_form">
                    <div>
                        <input id="name" type="text" name="name" value="<?php if(!empty($_SESSION["name"])) echo $_SESSION["name"];?>" placeholder="name"/>
                        <input id="email" type="text" name="email" value="<?php if(!empty($_SESSION["email"])) echo $_SESSION["email"];?>" placeholder="email"/>
                        <textarea id="comments" name="comments" rows="7" cols="6" placeholder="comments"><?php if(!empty($_SESSION["comments"])) echo $_SESSION["comments"];?></textarea>
                        <input type="submit" alt="submit" value="send" id="button"/>
                    </div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
        
        
    </div>
    <div id="bg-5"></div>
    <div id="bg-3"></div>
    <div id="bg-2"></div>
    <div id="bg-1"></div>
<? include("-/php/footer.php"); ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/-/js/jquery.plugins.js"></script>
    <!--<script type="text/javascript" src="/-/js/jquery.qtip.js"></script>-->
    <script type="text/javascript" src="/-/js/jquery.fancybox-1.3.1.pack.js"></script>
    <script type="text/javascript" src="/-/js/jquery.mousewheel-3.0.2.pack.js"></script>
    <script type="text/javascript" src="/-/js/jquery.featuresupport-0.1.js"></script>
    <script type="text/javascript" src="/-/js/jquery.placeholderfix.js"></script>
    <script type="text/javascript" src="/-/js/builtbywill.1.1.js"></script>
    <!--[if lte IE 6]><script src="/-/js/ie6/warning.js"></script><script>window.onload=function(){e("js/ie6/")}</script><![endif]-->
</body>
</html>
<?php
	$_SESSION["message"] = "";
	$_SESSION["errormsg"] = "";
?>
