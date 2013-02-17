<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Events - Demos - Booklet - jQuery Plugin</title>    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />	
	<?php include("../-/includes/scripts.php"); ?>
	<script type="text/javascript">
	$(function() {
		// init binding
		$('#mybook').booklet({			  
			change: function(event, data){
				alert('change! new page index is : '+data.index);
			}			  
		});
		
		// event type binding
		$("#mybook").bind("bookletadd", function(event, data) {
			alert('page added! page html: '+ data.page.outerHTML);
		});
		
		$('#custom-add-end').click(function(e){
			e.preventDefault();
			$('#mybook').booklet("add", "end", "<div><h3>I'm a new page!</h3></div>");
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
                <h3>Using Events and Event Binding</h3>
                <p>You can add custom event callback functions for certain booklet actions. For full details see the <a href="../documentation">Documentation</a>.</p>
                <ul>
                	<li><a href="#" id="custom-add-end">Add a New Page, to "end"</a></li>
                </ul>
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

                    // init binding
					$('#mybook').booklet({			  
						change: function(event, data){
							alert('change! new page index is : '+data.index);
						}			  
					});
					
					// event type binding
					$("#mybook").bind("bookletadd", function(event, data) {
						alert('page added! page html: '+ data.page.outerHTML);
					});
					
					$('#custom-add-end').click(function(e){
						e.preventDefault();
						$('#mybook').booklet("add", "end", "<div><h3>I'm a new page!</h3></div>");
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