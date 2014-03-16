<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Size - Demos", true);
?>         	
        <h3>Custom Size</h3>
        <?php sample_booklet(); ?>
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
        <?php sample_booklet("mybook2"); ?>
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

<?php template_end_open(); ?>

	<script>
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
    
<?php template_end_close(); ?>