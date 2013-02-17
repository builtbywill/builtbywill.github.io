<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Booklet - jQuery Plugin</title>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
	<?php include("-/includes/scripts.php"); ?>
    
	<!-- basic initialization -->
    <script type="text/javascript">
    $(function() {
        $('#mybook').booklet();
    });
    </script>
</head>
<body class="day">
	<?php include("../../-/php/analytics.php"); ?>
	<?php include("-/includes/bar.php"); ?>
    <div id="header">
        <div class="wrap">
            <h1><a href="./">Booklet</a></h1>
            <ul id="nav">
                <li><a href="./" class="current">Home</a></li>
                <li><a href="installation">Installation</a></li>
                <li><a href="documentation">Documentation</a></li>
                <li><a href="demos/">Demos</a></li>
                <li><a href="changelog">Change Log</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="wrap">    	
            <div class="col-third">        	
                <h2>what is it?</h2>
            </div>
            <div class="col-2-third">    
                <p>Booklet is a jQuery tool for displaying content on the web in a flipbook layout.<br />
                It was built using the <a href="http://jquery.com/">jQuery library</a>.
                Licensed under both <a href="http://docs.jquery.com/Licensing">MIT and GPL licenses</a>.</p>
                <p>Want to check out the source? Take a look at the project's <a href="https://github.com/builtbywill/Booklet" rel="external">github repo</a>.</p>
            </div>  
            <div class="clear"></div>
            <div class="col-third">        	
                <h2>see it work</h2>
            </div>
            <div class="col-2-third">
                <div id="mybook">
                    <div> 
                        <h3>jQuery Booklet</h3>
                        <p>This is a sample booklet! It uses all of the default options, but feel free to explore all the possibilities in the <a href="options">options</a> section.</p>   
                        <h3>Content Variety</h3>
                        <p>You can place any sort of html elements inside of your booklet pages. There is no limit to the possibilities you can create. Even using simple options, you can have elaborate displays.</p>   
                    </div>
                    <div>            
                        <h3>Default Options</h3>  
                        <p>The default options include:</p>
                        <ul>
                            <li><h4>Manual Page Turning</h4>This option requires jQuery UI, but will degrade and be usable if not included.</li>
                            <li><h4>Keyboard Navigation (use your arrows!)</h4></li>
                            <li><h4>Page Numbers</h4></li>
                            <li><h4>Shadows (during animation)</h4></li>
                        </ul>      
                        <p>Move to the next page by dragging or the arrow keys to see the animation in action!</p>
                    </div>
                    <div>            
                        <h3>Huzzah!</h3>  
                        <p>That awesome page turning animation was made possible by jQuery. Pretty cool, huh?</p>
                        <h3>What's Next?</h3>
                        <ul>
                            <li><a href="documentation">View the Documentation Reference</a></li>
                            <li><a href="demos">View Demos</a></li>
                            <li><a href="installation">View Installation Instructions</a></li>
                            <li>Download below!</li>
                        </ul>      
                    </div>
                    <div>
                        <img src="-/images/LargeThumbnail.jpg" width="100%" height="100%" alt="" />
                    </div>
                </div>
            </div>  
            <div class="clear"></div>
            <div class="col-third">
                <h2>try it out!</h2>
            </div>
            <div class="col-2-third">
            	<h3><a href="/code/booklet/src/jquery.booklet.1.4.1.zip" onClick="_gaq.push(['_trackPageview', '/download/1.4.1'])" id="download-btn">Download jQuery Booklet</a></h3>
            	<div class="clear"></div><br />
                <p>Current Version: <strong>1.4.1</strong><br />
					Download Size: <strong>144KB</strong><br />
                    Minified Script Size: <strong>33KB</strong>
                </p>
            	<p><a href="changelog">View Change Log</a></p>
            </div>
            <div class="clear"></div>
        </div>    
    </div>
<?php include("../../-/php/footer.php"); ?>
</body>
</html>