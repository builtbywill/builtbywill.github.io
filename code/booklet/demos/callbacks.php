<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Callbacks - Examples - Booklet - jQuery Plugin</title>    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />	
	<?php include("../includes/scripts.php"); ?>
	<script type="text/javascript">
	$(function() {
		$('#mybook').booklet({
			before: function(){
				alert('before!');
			},				  
			after: function(options){
				alert('after! new page index is : '+options.currentIndex);
			}			  
		});
	});
    </script>
</head>
<body class="day">
	<?php include("../includes/bar.php"); ?>
    <div id="header">
        <div class="wrap">
            <h1><a href="../">Booklet</a></h1>
            <ul id="nav">
                <li><a href="../">Home</a></li>
                <li><a href="../installation">Installation</a></li>
                <li><a href="./" class="current">Examples</a></li>
                <li><a href="../options">Options</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="wrap">    	
            <div class="col-third">        	
                <h2>examples</h2>
				<?php include("../includes/nav.php"); ?>
            </div>
            <div class="col-2-third"> 
                <h3>Custom Callbacks</h3>
                <p>You can add custom callback functions to run before or after each page turn action.</p>
                <p>You can optionally access the "options" variable, which gives you access to all the current data about the booklet.</p>
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
                </div>
                <div class="code-wrap">
                <script type="syntaxhighlighter" class="brush: js"><![CDATA[

                    $(function() {
                        $('#mybook').booklet({
							before: function(){
								alert('before!');
							},				  
							after: function(options){
								alert('after! new page index is : '+options.currentIndex);
							}			  
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