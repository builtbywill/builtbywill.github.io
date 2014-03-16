<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hash - Demos - Booklet - jQuery Plugin</title>    
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />	
	<?php include("../-/includes/head.php"); ?>
</head>
<body>
<?php include("../-/includes/header.php"); ?>
<?php include("../-/includes/aside.php"); ?>
	<section id="content" class="sub-content">
		<h2>examples</h2>                
        <h3>Hash Controls</h3>
        <p>With the hash control, the hash string of the page is updated with each page turn, and it is constantly monitored for updates. This allows for linking to direct pages in the booklet.</p>
        <p>Another advantage is that is will allow you to use the browser's "back" button, and even capture analytics of what content is being viewed.</p>
        <p><strong>Note: if multiple booklets are created using hash controls on the same page, they will both be affected and cannot be controlled individually.</strong></p>
        <ul>
            <li><a href="#/page/1">Page 1</a></li>
            <li><a href="#/page/3">Page 3</a></li>
            <li><a href="#/page/5">Page 5</a></li>
        </ul>
        <br />
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
                <div> 
                    <h3>Yay, Page 5!</h3>
                </div>
                <div> 
                    <h3>Yay, Page 6!</h3>
                </div>
                <div> 
                    <h3>Yay, Page 7!</h3>
                </div>
                <div> 
                    <h3>Yay, Page 8!</h3>
                </div>
        </div>
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[

            $(function() {
                $('#mybook').booklet({
                    hash: true
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
			hash: true
		});
	});
    </script>
</body>
</html>