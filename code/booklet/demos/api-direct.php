<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>API - Direct Booklet Functions - Demos - Booklet - jQuery Plugin</title>    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />	
	<?php include("../-/includes/scripts.php"); ?>
	<script type="text/javascript">
	$(function() {
		$('#mybook').booklet();
		
		var mybook = $('#mybook').data("booklet");
		var newPageHtml = "<div>I'm a new page!</div>";
		
		$('#custom-next').click(function(e){
			e.preventDefault();
			mybook.next();
		});
		
		$('#custom-prev').click(function(e){
			e.preventDefault();
			mybook.prev();
		});
		
		$('#custom-goto').click(function(e){
			e.preventDefault();
			mybook.goToPage(4);
		});
		
		$('#custom-add-start').click(function(e){
			e.preventDefault();
			mybook.addPage("start", newPageHtml);
		});
		
		$('#custom-add-end').click(function(e){
			e.preventDefault();
			mybook.addPage("end", newPageHtml);
		});
		
		$('#custom-add-index').click(function(e){
			e.preventDefault();
			mybook.addPage(4, newPageHtml);
		});
		
		$('#custom-keyboard').click(function(e){
			e.preventDefault();
			mybook.options.keyboard = !mybook.options.keyboard;
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
                <li><a href="../demo" class="current">Demos</a></li>
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
                <h3>API - Direct Booklet() Functions</h3>
                <p>Using the direct Booklet() functions, you can do some very advanced manipulations.</p>
                <ul>
                	<li><a href="#" id="custom-next">Next Page</a></li>
                	<li><a href="#" id="custom-prev">Previous page</a></li>
                	<li><a href="#" id="custom-goto">Go to Page 5</a></li>
                	<li><a href="#" id="custom-add-start">Add a New Page, to "start"</a></li>
                	<li><a href="#" id="custom-add-end">Add a New Page, to "end"</a></li>
                	<li><a href="#" id="custom-add-index">Add a New Page, at index 4</a></li>
                	<li><a href="#" id="custom-keyboard">Toggle Keyboard Controls</a></li>
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
						$('#mybook').booklet();
		
						var mybook = $('#mybook').data("booklet");
						var newPageHtml = "<div>I'm a new page!</div>";
						
						$('#custom-next').click(function(e){
							e.preventDefault();
							mybook.next();
						});
						
						$('#custom-prev').click(function(e){
							e.preventDefault();
							mybook.prev();
						});
						
						$('#custom-goto').click(function(e){
							e.preventDefault();
							mybook.goToPage(4);
						});
						
						$('#custom-add-start').click(function(e){
							e.preventDefault();
							mybook.addPage("start", newPageHtml);
						});
						
						$('#custom-add-end').click(function(e){
							e.preventDefault();
							mybook.addPage("end", newPageHtml);
						});
						
						$('#custom-add-index').click(function(e){
							e.preventDefault();
							mybook.addPage(4, newPageHtml);
						});
						
						$('#custom-keyboard').click(function(e){
							e.preventDefault();
							mybook.options.keyboard = !mybook.options.keyboard;
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