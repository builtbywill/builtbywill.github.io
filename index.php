<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="author" content="Built By Will"/>
    <meta name="copyright" content="&copy; <?php echo date("Y") ?> Built By Will"/>
    <meta name="description" content="Portfolio site of Indiana Web Designer and Developer Will Grauvogel" />
    <meta name="keywords" content="builtbywill, built, will, grauvogel, indiana, purdue, west lafayette, design, web design, interface, multimedia, portfolio, graphic design, standards compliant, mobile developer, ios developer" />    
	<meta name="google-site-verification" content="Vv-F3PTIcS6Y_WyioQB9ZjrE6i4dlSPD6JeLb_ubZdA" />
 	<title>Built By Will - Design + Development</title>
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
	<link rel="stylesheet" href="-/css/common.css" />
    <link rel="stylesheet" href="-/js/jquery.qtip.min.css" />
    <link rel="stylesheet" href="-/css/screen.css" />
</head>	
<body>
<?php include("-/php/analytics.php"); ?>
	<header>
    	<h1>Built By Will</h1>
        <ul>
        	<li><a href="#" title="builtbywill [at] gmail.com" id="gmail_link">gmail</a></li>
	        <li><a href="http://twitter.com/builtbywill" title="@builtbywill" id="twitter_link">@builtbywill</a></li>
        </ul>
        <div id="preview"></div>
    </header>
    <section id="content">
    	<p id="about">Hi! My name is Will Grauvogel and I am a designer and developer currently employed by Purdue University. I love to solve problems and come up with new ways to share content on the web and mobile devices. I have experience with Web Design, Graphic Design, Interactive Multimedia and Mobile Application Development.
        <img src="-/images/profile-picture.png" alt="Profile Picture" />
        </p>
        <ul id="content-list">
        	<li>
            	<a href="http://purdue.edu/studio">            		
            		<p><img src="-/images/studio-by-purdue.png" alt="Studio by Purdue" /> I have worked for the ITaP Informatics Team at Purdue since 2009. Studio by Purdue is a showcase of our top projects including <em>Passport</em>, <em>Jetpack</em>, <em>Mixable</em> and <em>Hotseat</em>.<span class="clear"></span></p>
                </a>
            </li>
            <li>
            	<a href="/code/booklet/">	            	
            		<p><img src="-/images/booklet.png" alt="Booklet jQuery Plugin" /> Booklet is a jQuery tool for displaying content on the web in a flipbook layout. View demos, installation instructions, and documentation.<span class="clear"></span></p>
                </a>
            </li>
            <li>
            	<a href="http://github.com/builtbywill">	            	
            		<p><img src="-/images/github.png" alt="github/builtbywill" /> Some of my personal side projects are hosted on github. Check out the <em>jQuery Booklet Plugin</em>, or view the full documentation above.<span class="clear"></span></p>
                </a>
            </li>
        </ul>
    </section>
<?php include("-/php/footer.php"); ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/-/js/jquery.qtip.min.js"></script>
    <script>
    $(function() {
		$('a[title]').qtip({
			position: {
				my: 'top center',
				at: 'bottom center'
			},
			style: {
				classes: 'qtip-light qtip-rounded'
			}
		})
	});
    </script>
</body>
</html> 