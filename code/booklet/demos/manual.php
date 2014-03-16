<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Manual Page Turning - Demos - Booklet - jQuery Plugin</title>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />	
	<?php include("../-/includes/head.php"); ?>
</head>
<body>
<?php include("../-/includes/header.php"); ?>
<?php include("../-/includes/aside.php"); ?>
	<section id="content" class="sub-content">
		<h2>examples</h2>                
        <h3>Manual Page Turning</h3>
        <p>Manual page turning is turned on by default. It will allow the use to grab each page to commence the page turning animation.</p><br/>
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
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[
            $(function() {
                $('#mybook').booklet({);
            });
        ]]></script>
        </div>
        <p>If you do not wish to use this option, you can set it to false, and the <strong>overlays</strong> option will be used instead.</p><br/>
        <div id="mybook2">
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
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[
            $(function() {
                $('#mybook2').booklet({
                    manual: false,
                    overlays:true
                });
            });
        ]]></script>
        </div>
    </section>
<?php include("../../../-/php/footer.php"); ?>
<?php include("../../../-/php/analytics.php"); ?>
<?php include("../-/includes/scripts.php"); ?>
	<script type="text/javascript">
	$(function() {
		$('#mybook').booklet();
		$('#mybook2').booklet({
			manual: false,
			overlays:true
		});
    });
    </script>
</body>
</html>