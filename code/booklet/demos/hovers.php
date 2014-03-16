<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hovers - Demos - Booklet - jQuery Plugin</title>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
	<?php include("../-/includes/head.php"); ?>
</head>
<body>
<?php include("../-/includes/header.php"); ?>
<?php include("../-/includes/aside.php"); ?>
	<section id="content" class="sub-content">
		<h2>examples</h2>                
        <h3>Hover Effect</h3>
        <p>The hovers effect is on by default and enables a little page turn preview animation when the controls are hovered, in conjunction with the overlays option.</p>
        <p><strong>Note: the manual option must be disabled to utilize overlays and hovers</strong></p><br />
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
        </div>
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[
            $(function() {
                $('#mybook').booklet({
                    manual:   false,
                    overlays: true,
                    hovers:   true
                });
            });
        ]]></script>
        </div>
        <p>Alternately, the effect can be disabled.</p><br />
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
                <div> 
                    <h3>Yay, Page 5!</h3>
                </div>
                <div> 
                    <h3>Yay, Page 6!</h3>
                </div>
        </div>
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[
            $(function() {
                $('#mybook2').booklet({
                    manual:   false,
                    overlays: true,
                    hovers:   false
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
			manual:   false,
			overlays: true,
			hovers:   true
		});
		$('#mybook2').booklet({
			manual:   false,
			overlays: true,
			hovers:   false
		});
	});
    </script>
</body>
</html>