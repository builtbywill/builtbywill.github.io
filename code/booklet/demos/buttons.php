<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Buttons - Demos - Booklet - jQuery Plugin</title>    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />	
	<?php include("../-/includes/scripts.php"); ?>
	<script type="text/javascript">
	$(function() {
		$('#mybook').booklet({
			next: '#custom-next',				  
			prev: '#custom-prev'					  
		});
	});
    </script>
</head>
<body>
<?php include("../-/includes/header.php"); ?>
<?php include("../-/includes/aside.php"); ?>
	<section id="content" class="sub-content">                	
        <h2>examples</h2>
        <h3>Custom "Next" and "Prev" Buttons</h3>
        <p>By indicating either next or previous buttons you can make custom controls for your booklet.</p>
        <ul>
            <li><a href="#" id="custom-next">Next Page</a></li>
            <li><a href="#" id="custom-prev">Previous page</a></li>
        </ul><br />
        <div id="mybook">
            <div class="b-load">
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
            </div>
        </div>
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[

            $(function() {
                $('#mybook').booklet({
                    next: '#custom-next',				  
                    prev: '#custom-prev'					  
                });
            });
        ]]></script>
        </div>   
    </section>
<?php include("../../../-/php/footer.php"); ?>
<?php include("../../../-/php/analytics.php"); ?>
</body>
</html>