<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Reading Direction - Demos - Booklet - jQuery Plugin</title>    
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />	
	<?php include("../-/includes/head.php"); ?>
</head>
<body>
<?php include("../-/includes/header.php"); ?>
<?php include("../-/includes/aside.php"); ?>
<section id="content" class="sub-content">
        <h2>examples</h2>
        <h3>Direction</h3>
        <p>Direction is set to left to right by default.</p><br />
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
                $('#mybook').booklet({
                    direction:  'LTR'
                });
            });
        ]]></script>
        </div>
        
        <p>Alternately, you can modify the direction to be right to left. If you use this option, you may have to use your own CSS to align text to the right.</p><br />
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
                    direction:  'RTL'
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
		$('#mybook').booklet({
			direction:  'LTR'
		});
		$('#mybook2').booklet({
			direction:  'RTL'
		});
    });
    </script>
</body>
</html>