<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Auto Play - Demos - Booklet - jQuery Plugin</title>    
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />	
	<?php include("../-/includes/head.php"); ?>
</head>
<body>
<?php include("../-/includes/header.php"); ?>
<?php include("../-/includes/aside.php"); ?>
	<section id="content" class="sub-content">                	
        <h2>examples</h2>
        <h3>Auto Play</h3>
        <p>The <strong>auto</strong> option allows you to set your booklet to automatically progress forward. The default delay on each page is 5 seconds.</p><br/>
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
                    auto: true
                });
            });
        ]]></script>
        </div>
        <p>You can edit the <strong>delay</strong> amount in your setup.</p><br/>
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
                $('#mybook2').booklet({
                    auto: true,
                    delay: 2000
                });
            });
        ]]></script>
        </div>
        <p>If you wish to pause/play your booklet turning, you can use the <strong>pause</strong> and <strong>play</strong> options.</p><br/>
        <div id="mybook3">
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
        <a href="#" id="pause" style="padding:5px; margin:5px; display:block; float:left;">Pause!</a>
        <a href="#" id="play" style="padding:5px; margin:5px; display:block; float:left;">Play!</a>
        <div class="clear"></div>
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[
            $(function() {
                $('#mybook3').booklet({
                    auto: true,
                    play: '#play',
                    pause: '#pause'
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
			auto: true
		});
		$('#mybook2').booklet({
			auto: true,
			delay: 2000
		});
		$('#mybook3').booklet({
			auto: true,
			play: '#play',
			pause: '#pause'
		});
    });
    </script>
</body>
</html>