<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Cursors - Demos", true);
?>
        <h2>examples</h2>
        <h3>Custom Cursors</h3>
        <p>Modify the cursor that is used on hover for the side links and tabs.</p><br />
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
                    manual: false,
                    overlays: true,
                    cursor: 'crosshair'			  
                });
            });
        ]]></script>
        </div> 

<?php template_end_open(); ?>

	<script>
    	$(function() {
    		$('#mybook').booklet({
    			manual: false,
    			overlays: true,
    			cursor: 'crosshair'			  
    		});
    	});
    </script>
    
<?php template_end_close(); ?>