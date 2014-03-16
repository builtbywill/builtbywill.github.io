<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Padding - Demos - Booklet - jQuery Plugin</title>    
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />	
	<?php include("../-/includes/head.php"); ?>
</head>
<body>
<?php include("../-/includes/header.php"); ?>
<?php include("../-/includes/aside.php"); ?>
	<section id="content" class="sub-content">
		<h2>examples</h2>                
        <h3>Page Padding</h3>
        <p>Booklet's default page padding is set to 10px</p>
        <div id="mybook">
            <div> 
                <h3>Yay, Page 1!</h3>
            </div>
            <div> 
                <img src="../-/images/sample-booklet-image.png" width="100%" height="100%" alt="" />
            </div>
            <div> 
                <h3>Yay, Page 3!</h3>
            </div>
            <div> 
                <img src="../-/images/sample-booklet-image.png" width="100%" height="100%" alt="" />
            </div>
        </div>
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[

            $(function() {
                $('#mybook').booklet();
            });
        ]]></script>
        </div>
        <p>You can also modify this number if you wish to get different effects.</p>
        <div id="mybook2">
            <div> 
                <h3>Yay, Page 1!</h3>
            </div>
            <div> 
                <img src="../-/images/sample-booklet-image.png" width="100%" height="100%" alt="" />
            </div>
            <div> 
                <h3>Yay, Page 3!</h3>
            </div>
            <div> 
                <img src="../-/images/sample-booklet-image.png" width="100%" height="100%" alt="" />
            </div>
        </div>
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[

            $(function() {
                $('#mybook2').booklet({
                    pagePadding: 0
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
			pagePadding: 0
		});
    });
    </script>
</body>
</html>