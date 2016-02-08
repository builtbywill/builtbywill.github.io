<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Speed - Demos", true);
?>    
        <h3>Custom Speed</h3>        
        <?php sample_booklet(); ?>

        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[

            $(function() {
                $('#mybook').booklet({
                    speed: 250
                });
            });
        ]]></script>
        </div>

<?php template_end_open(); ?>

	<script>
		$(function() {
			$('#mybook').booklet({
				speed:  250
			});
		});
    </script>
    
<?php template_end_close(); ?>