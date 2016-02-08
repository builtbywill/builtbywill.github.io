<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Events - Demos", true);
?>
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
<?php template_end_open(); ?>
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
<?php template_end_close(); ?>