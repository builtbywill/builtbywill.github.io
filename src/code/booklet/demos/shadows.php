<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Shadows - Demos", true);
?>
		<h2>examples</h2>                
        <h3>Custom Shadows</h3>
        <p>You can disable shadows on page animation if you wish. To use different images, check the <a href="../documentation">Documentation</a> page to see all of the available items you can change.</p>
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
                    shadows: false
                });
            });
        ]]></script>
        </div>
<?php template_end_open(); ?>
	<script type="text/javascript">
	$(function() {
		$('#mybook').booklet({
			shadows:  false
		});
    });
    </script>
<?php template_end_close(); ?>