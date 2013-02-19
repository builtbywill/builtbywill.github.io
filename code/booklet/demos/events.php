<!DOCTYPE html>
<html>
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
<body>
<?php include("../-/includes/header.php"); ?>
<?php include("../-/includes/aside.php"); ?>
	<section id="content" class="sub-content">
		<h2>examples</h2>                
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
    </section>
<?php include("../../../-/php/footer.php"); ?>
<?php include("../../../-/php/analytics.php"); ?>
</body>
</html>