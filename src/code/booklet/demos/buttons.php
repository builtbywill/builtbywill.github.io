<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Buttons - Demos", true);
?>             	
        <h2>examples</h2>
        <h3>Custom "Next" and "Prev" Buttons</h3>
        <p>By indicating either next or previous buttons you can make custom controls for your booklet.</p>
        <ul>
            <li><a href="#" id="custom-next">Next Page</a></li>
            <li><a href="#" id="custom-prev">Previous page</a></li>
        </ul><br />
        <div id="mybook">
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
                <div> 
                    <h3>Yay, Page 5!</h3>
                </div>
                <div> 
                    <h3>Yay, Page 6!</h3>
                </div>
            </div>
        </div>
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[

            $(function() {
                $('#mybook').booklet({
                    next: '#custom-next',				  
                    prev: '#custom-prev'					  
                });
            });
        ]]></script>
        </div>   
<?php template_end_open(); ?>
	<script>
    	$(function() {
    		$('#mybook').booklet({
    			next: '#custom-next',				  
    			prev: '#custom-prev'					  
    		});
    	});
    </script>
<?php template_end_close(); ?>