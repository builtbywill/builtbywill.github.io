<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Overlays - Demos - Booklet - jQuery Plugin</title>    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />	
	<?php include("../-/includes/scripts.php"); ?>
	<script type="text/javascript">
	$(function() {
		$('#mybook').booklet({
			overlays: true,
			manual: false
		});
		$('#mybook2').booklet({
			tabs: true,
			overlays: false,
			manual: false
		});
    });
    </script>
</head>
<body>
<?php include("../-/includes/header.php"); ?>
<?php include("../-/includes/aside.php"); ?>
	<section id="content" class="sub-content">
		<h2>examples</h2>                
        <h3>Overlay Links</h3>
        <p>The overlay links will create a clickable area on top of the entire page. This will make any links or elements in the page un-clickable (except for the first and last page of your book). In order to enable this feature you must have the "manual" option disabled.</p><br />
        <div id="mybook">
            <div> 
                <h3>Yay, Page 1!</h3>
                <a href="/code/booklet/">Go Back To The Homepage</a>
            </div>
            <div> 
                <h3>Yay, Page 2!</h3>
                <a href="/code/booklet/">Go Back To The Homepage</a>
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
                    overlays: true,
                    manual: false
                });
            });
        ]]></script>
        </div>
        <p>Disabling this option will allow you to have a wider variety of page content cababilities.</p><br />

        <div id="mybook2">
            <div> 
                <h3>Yay, Page 1!</h3>
                <a href="/code/booklet/">Go Back To The Homepage</a>
            </div>
            <div> 
                <h3>Yay, Page 2!</h3>
                <a href="/code/booklet/">Go Back To The Homepage</a>
            </div>
            <div> 
                <h3>Yay, Page 3!</h3>
                <a href="/code/booklet/">Go Back To The Homepage</a>
            </div>
            <div> 
                <h3>Yay, Page 4!</h3>
                 <a href="/code/booklet/">Go Back To The Homepage</a>
           </div>
            <div> 
                <h3>Yay, Page 5!</h3>
                <a href="/code/booklet/">Go Back To The Homepage</a>
            </div>
            <div> 
                <h3>Yay, Page 6!</h3>
                 <a href="/code/booklet/">Go Back To The Homepage</a>
           </div>
        </div>
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[

            $(function() {
                $('#mybook').booklet({
                    tabs: true,
                    overlays: false,
                    manual: false
                });
            });
        ]]></script>
        </div>
    </section>
<?php include("../../../-/php/footer.php"); ?>
<?php include("../../../-/php/analytics.php"); ?>
</body>
</html>