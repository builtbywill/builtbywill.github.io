<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Booklet - jQuery Plugin</title>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
    
    <!-- page css -->
    <link href="/-/css/base.css" rel="stylesheet" media="screen, projection, tv" />
    <link href="/-/css/booklet.css" rel="stylesheet" media="screen, projection, tv" />
    
    <!-- required files for booklet -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>
    <script src="1.2.0/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="1.2.0/jquery.booklet.js" type="text/javascript"></script>
    <link href="1.2.0/jquery.booklet.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
    
    <script type="text/javascript">
    $(function() {
        $('#mybook').booklet({
			closed:true,
			autoCenter:true,
			hash: true
		});		
    });
    </script>
</head>
<body class="day">
    <div id="content">
        <div class="wrap">    	
            <div class="col-full">
                <div id="custom-menu"></div>
                <div id="mybook">
                  <div class="b-load">
                        <div> 
                        	<h3>jQuery Booklet</h3>
                            <p>This is a sample bookley! It uses all of the default options, but feel free to explore all the possibilities in the <a href="options">options</a> section.</p>   
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
                            	<li><a href="options">View the Options Reference</a></li>
                            	<li><a href="examples/">View Examples</a></li>
                            	<li><a href="installation">View Installation Instructions</a></li>
                            	<li>Download below!</li>
                            </ul>      
                        </div>
                        <div>
                        	<img src="/code/booklet/images/LargeThumbnail.jpg" width="100%" height="100%" alt="" />
                        </div>
                    </div>
                </div>
            </div>  
            <div class="clear"></div>
        </div>    
    </div>
</body>
</html>