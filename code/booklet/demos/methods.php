<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Methods - Demos - Booklet - jQuery Plugin</title>    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />	
	<?php include("../-/includes/scripts.php"); ?>
    
    <script type="text/javascript">
	$(function() {
		
		var mybook = $('#mybook').booklet();
		var newPageHtml = "<div><h3>I'm a new page!</h3></div>";
		var display = $("#display");	
				
		$('#custom-destroy').click(function(e){
			e.preventDefault();
			$('#mybook').booklet("destroy");
			display.text('Destroyed');
		});
		
		$('#custom-create').click(function(e){
			e.preventDefault();
			$('#mybook').booklet();
			display.text('Created');
		});
		
		$('#custom-disable').click(function(e){
			e.preventDefault();
			$('#mybook').booklet("disable");
			display.text('Disabled');			
		});
		
		$('#custom-enable').click(function(e){
			e.preventDefault();
			$('#mybook').booklet("enable");
			display.text('Enabled');						
		});
		
		$('#custom-next').click(function(e){
			e.preventDefault();
			$('#mybook').booklet("next");
		});
		
		$('#custom-prev').click(function(e){
			e.preventDefault();
			$('#mybook').booklet("prev");
		});
		
		$('#custom-goto').click(function(e){
			e.preventDefault();
			$('#mybook').booklet("gotopage", "end");
		});
		
		$('#custom-add-start').click(function(e){
			e.preventDefault();
			$('#mybook').booklet("add", "start", newPageHtml);
		});
		
		$('#custom-add-end').click(function(e){
			e.preventDefault();
			$('#mybook').booklet("add", "end", newPageHtml);
		});
		
		$('#custom-add-index').click(function(e){
			e.preventDefault();
			$('#mybook').booklet("add", 4, newPageHtml);
		});
		
		$('#custom-remove-start').click(function(e){
			e.preventDefault();
			var page = $('#mybook').booklet("remove", "start");
			alert("Removed Page: "+page);
		});
		
		$('#custom-remove-end').click(function(e){
			e.preventDefault();
			$('#mybook').booklet("remove", "end");
		});
		
		$('#custom-remove-index').click(function(e){
			e.preventDefault();
			var page = $('#mybook').booklet("remove", 4);
			alert("Removed Page: "+page);
		});
		
		$('#custom-keyboard-off').click(function(e){
			e.preventDefault();
			$('#mybook').booklet("option", {keyboard: false});
			display.text("Keyboard off");
		});
		
		$('#custom-keyboard-on').click(function(e){
			e.preventDefault();
			$('#mybook').booklet("option", {keyboard: true});
			display.text("Keyboard on");
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
                <h3>Methods - Calling Methods</h3>
                <p>Using the method functions you can send commands to the booklet, update options, add or remove pages, etc.</p>
               	<div id="display">Created</div>
                <ul>
                	<li><a href="#" id="custom-destroy">Destroy</a></li>
                	<li><a href="#" id="custom-create">Create</a></li>
                	<li><a href="#" id="custom-enable">Enable</a></li>
                	<li><a href="#" id="custom-disable">Disable</a></li>
                	<li><a href="#" id="custom-next">Next page</a></li>
                	<li><a href="#" id="custom-prev">Previous page</a></li>
                	<li><a href="#" id="custom-goto">Go to Page 5</a></li>
                	<li><a href="#" id="custom-add-start">Add a New Page, to "start"</a></li>
                	<li><a href="#" id="custom-add-end">Add a New Page, to "end"</a></li>
                	<li><a href="#" id="custom-add-index">Add a New Page, at index 4</a></li>
                	<li><a href="#" id="custom-remove-start">Remove Page at "start"</a></li>
                	<li><a href="#" id="custom-remove-end">Remove Page at "end"</a></li>
                	<li><a href="#" id="custom-remove-index">Remove Page at index 4</a></li>
                	<li><a href="#" id="custom-keyboard-off">Keyboard Off</a></li>
                	<li><a href="#" id="custom-keyboard-on">Keyboard On</a></li>
                </ul><br />
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
		
						var mybook = $('#mybook').booklet();
						
						var newPageHtml = "<div>I'm a new page!</div>";
						var display = $("#display");	
								
						$('#custom-destroy').click(function(e){
							e.preventDefault();
							$('#mybook').booklet("destroy");
							display.text('Destroyed');
						});
						
						$('#custom-create').click(function(e){
							e.preventDefault();
							$('#mybook').booklet();
							display.text('Created');
						});
						
						$('#custom-disable').click(function(e){
							e.preventDefault();
							$('#mybook').booklet("disable");
							display.text('Disabled');			
						});
						
						$('#custom-enable').click(function(e){
							e.preventDefault();
							$('#mybook').booklet("enable");
							display.text('Enabled');						
						});
						
						$('#custom-next').click(function(e){
							e.preventDefault();
							$('#mybook').booklet("next");
						});
						
						$('#custom-prev').click(function(e){
							e.preventDefault();
							$('#mybook').booklet("prev");
						});
						
						$('#custom-goto').click(function(e){
							e.preventDefault();
							$('#mybook').booklet("gotopage", "end");
						});
						
						$('#custom-add-start').click(function(e){
							e.preventDefault();
							$('#mybook').booklet("add", "start", newPageHtml);
						});
						
						$('#custom-add-end').click(function(e){
							e.preventDefault();
							$('#mybook').booklet("add", "end", newPageHtml);
						});
						
						$('#custom-add-index').click(function(e){
							e.preventDefault();
							$('#mybook').booklet("add", 4, newPageHtml);
						});
						
						$('#custom-remove-start').click(function(e){
							e.preventDefault();
							var page = $('#mybook').booklet("remove", "start");
							alert("Removed Page: "+page);
						});
						
						$('#custom-remove-end').click(function(e){
							e.preventDefault();
							$('#mybook').booklet("remove", "end");
						});
						
						$('#custom-remove-index').click(function(e){
							e.preventDefault();
							var page = $('#mybook').booklet("remove", 4);
							alert("Removed Page: "+page);
						});
						
						$('#custom-keyboard-off').click(function(e){
							e.preventDefault();
							$('#mybook').booklet("option", {keyboard: false});
							display.text("Keyboard off");
						});
						
						$('#custom-keyboard-on').click(function(e){
							e.preventDefault();
							$('#mybook').booklet("option", {keyboard: true});
							display.text("Keyboard on");
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