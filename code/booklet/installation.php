<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Installation - Booklet - jQuery Plugin</title>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
	<?php include("-/includes/scripts.php"); ?>
</head>
<body class="day">
	<?php include("-/includes/bar.php"); ?>
    <div id="header">
        <div class="wrap">
            <h1><a href="./">Booklet</a></h1>
            <ul id="nav">
                <li><a href="./">Home</a></li>
                <li><a href="installation" class="current">Installation</a></li>
                <li><a href="documentation">Documentation</a></li>
                <li><a href="demos/">Demos</a></li>
                <li><a href="changelog">Changelog</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="wrap">    	
            <div class="col-third">        	
                <h2>installation</h2>
            </div>
            <div class="col-2-third"> 
            	<h3>1. jQuery</h3>
                <p>Load jQuery either from a local copy or from an external CDN</p>          
                <div class="code-wrap">    
                	<div style="width:1000px;">        	
					<script type="syntaxhighlighter" class="brush: xml"><![CDATA[
                        &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript">&lt;/script>
                    ]]></script>
                    </div>
                </div>  
                              
            	<h3>2. jQuery UI</h3>
                <p>Load jQuery UI either from a local copy or from an external CDN</p>          
                <div class="code-wrap">    
                	<div style="width:1000px;">        	
					<script type="syntaxhighlighter" class="brush: xml"><![CDATA[
                        &lt;script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js" type="text/javascript">&lt;/script>
                    ]]></script>
                    </div>
                </div>                

            	<h3>3. jQuery Easing Plugin</h3>
                <p>Add the <a href="http://gsgd.co.uk/sandbox/jquery/easing/" target="_blank">Easing jQuery Plugin</a>. While not completely necessary, if not included your animations will not look as nice.</p>          
                <div class="code-wrap">    
                	<div style="width:1000px;">        	
					<script type="syntaxhighlighter" class="brush: xml"><![CDATA[
                        &lt;script src="booklet/jquery.easing.1.3.js" type="text/javascript">&lt;/script>
                    ]]></script>
                    </div>
                </div>                

            	<h3>4. Booklet Files</h3>
                <p>Load the Booklet JS and CSS files. Be sure when editing the CSS file to make image paths relative to the CSS file. When changing some of the image options in the Booklet options, those images will be relative to the page itself.</p>
                <div class="code-wrap">    
                	<div style="width:1000px;">        	
					<script type="syntaxhighlighter" class="brush: xml"><![CDATA[
                        &lt;script src="booklet/jquery.booklet.latest.min.js" type="text/javascript">&lt;/script>
                        &lt;link href="booklet/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
                    ]]></script>
                    </div>
                </div> 
                               
                <h3>5. Create the Content</h3>
                <p>To create a booklet you must first place the content for the book onto your page.</p>
                <ol>
                	<li>Make an outside container <strong>&lt;div&gt;</strong> and give it an identifier like an <strong>ID</strong> or <strong>Class</strong>.</li>
                	<li>Inside of your container, add your pages. The booklet will recognize each direct children as a slide, which could contain content or be a single item.</li>
                </ol>
                <p>The following shows a simple four page book.</p>
                <div class="code-wrap">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[
				<div id="mybook">
					<div> 
						<h3>Yay, Page 1!</h3>
					</div>
					<div> 
						<h3>Yay, Page 2!</h3>
					</div>
					<div> 
						<h3>Yay, Page 3!</h3>
					</div>
					<div> 
						<h3>Yay, Page 4!</h3>
					</div>
				</div>
				]]></script>
                </div>
                
                <h3>6. Initialize the Booklet</h3>
                <p>Using jQuery selectors initialize your booklet. You can setup multiple books either with the same class or within the same selector, as long as you want their options to be the same.</p>
            	<p>For more information on customization, visit the <a href="documentation">Documentation</a> page</p>
				<div class="code-wrap">
				<script type="syntaxhighlighter" class="brush: js"><![CDATA[
					$(function() {
						//single book
						$('#mybook').booklet();
						
						//multiple books with ID's
						$('#mybook1, #mybook2').booklet();
						
						//multiple books with a class
						$('.mycustombooks').booklet();
					});
				]]></script>
                </div>
                
                <h3>7. (Optional) IE6 Support</h3>
                <p>By default, the images for the booklet shadows and arrows are PNG's. To make them compatible with IE6 I highly recommend <a href="http://www.dillerdesign.com/experiment/DD_belatedPNG/" target="_blank">DD_belatedPNG</a></p>
            	<p>An example on how to use it is below:</p>
				<div class="code-wrap">
                <div style="width:900px;">
				<script type="syntaxhighlighter" class="brush: js"><![CDATA[
					&lt;!--[if lte IE 6]>
						&lt;script src="DD_belatedPNG.js" type="text/javascript">&lt;/script>
						&lt;script type="text/javascript">  
							DD_belatedPNG.fix(".b-shadow-f, .b-shadow-b, .b-p0, .b-p3, .b-arrow-next div, .b-arrow-prev div");  
						&lt;/script>  
					&lt;![endif]-->  
				]]></script>
                </div></div>
                
            </div>  
            <div class="clear"></div>
        </div>    
    </div>
<?php include("../../-/php/footer.php"); ?>
<?php include("../../-/php/analytics.php"); ?>
</body>
</html>