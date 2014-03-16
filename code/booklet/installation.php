<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Installation - Booklet - jQuery Plugin</title>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
	<?php include("-/includes/head.php"); ?>
</head>
<body>
	<?php include("-/includes/header.php"); ?>
    <section id="content">        	
        <h2>installation</h2>
        
        <h3>Add CSS and Javascript</h3>
        
        <p>Add the Booklet CSS file to your page.</p>
        <div class="code-wrap">    
            <div style="width:1000px;">        	
            <script type="syntaxhighlighter" class="brush: xml"><![CDATA[
		         <link href="booklet/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
             ]]></script>
            </div>
        </div>  
             
        <p>Add jQuery, jQuery UI (optional), jQuery Easing Plugin and the Booklet JS files to your page.</p>          
        <div class="code-wrap">    
            <div style="width:1000px;">        	
            <script type="syntaxhighlighter" class="brush: xml"><![CDATA[
				<!-- jQuery -->
				&lt;script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js">&lt;/script>
				&lt;script> window.jQuery || document.write('<script src="booklet/jquery-2.1.0.min.js"><\/script>') &lt;/script>
			
				<!-- jQuery UI (optional) -->
				&lt;script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js">&lt;/script>
				&lt;script> window.jQuery.ui || document.write('<script src="booklet/jquery-ui-1.10.4.custom.min.js"><\/script>') &lt;/script>
			
				<!-- Booklet -->
				<script src="booklet/jquery.easing.1.3.js">&lt;/script>
				<script src="booklet/jquery.booklet.latest.min.js">&lt;/script>
			]]></script>
            </div>
        </div>  
   
        <h3>Create the Content</h3>
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
        
        <h3>Initialize the Booklet</h3>
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
        
    </div>  
    </section>
<?php include("../../-/php/footer.php"); ?>
<?php include("../../-/php/analytics.php"); ?>
<?php include("-/includes/scripts.php"); ?>
</body>
</html>