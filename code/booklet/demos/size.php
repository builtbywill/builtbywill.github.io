<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Size - Demos - Booklet - jQuery Plugin</title>    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />	
	<?php include("../-/includes/scripts.php"); ?>
	<script type="text/javascript">
	$(function() {
		$('#mybook').booklet({
			width:  600,
			height: 200
		});
		$('#mybook2').booklet({
			width:  '100%',
			height: 600
		});
    });
    </script>
</head>
<body class="day">
	<?php include("../-/includes/bar.php"); ?>
    <div id="header">
        <div class="wrap">
            <h1><a href="../">Booklet</a></h1>
            <ul id="nav">
                <li><a href="../">Home</a></li>
                <li><a href="../installation">Installation</a></li>
                <li><a href="../documentation">Documentation</a></li>
                <li><a href="./" class="current">Demos</a></li>
                <li><a href="../changelog">Change Log</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
      <div class="wrap">    	
            <div class="col-third">        	
                <h2>examples</h2>
				<?php include("../-/includes/nav.php"); ?>
            </div>
            <div class="col-2-third"> 
                <h3>Custom Size</h3>
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
                            width:  600,
                            height: 200
                        });
                    });
                ]]></script>
                </div>
                <h3>Percentage Size</h3>
                <div id="mybook2">
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
                    </div>
                </div>
                <div class="code-wrap">
                <script type="syntaxhighlighter" class="brush: js"><![CDATA[

                    $(function() {
                        $('#mybook2').booklet({
                            width:  '100%',
                            height: 600
                        });
                    });
                ]]></script>
                </div>
        </div>  
            <div class="clear"></div>
        </div>    
    </div>
<?php include("../../../-/php/footer.php"); ?>
<?php include("../../../-/php/analytics.php"); ?>
</body>
</html>