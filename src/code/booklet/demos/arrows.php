<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Arrows - Demos", true);
?>           	
        <h2>examples</h2>
        <h3>Arrows</h3>
        <p>Arrows controls are turned off by default. Enabling them will add clickable areas to either side of your booklet. To modify the image, simply update the background-image style in the CSS file.</p><br/>
        <?php sample_booklet(); ?>

        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[
            $(function() {
                $('#mybook').booklet({
                    arrows: true
                });
            });
        ]]></script>
        </div>
        <p>If you do not wish the arrows to be visible at all times, you can use the <strong>arrowsHide</strong> option</p><br/>
        <?php sample_booklet("mybook2"); ?>

        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[
            $(function() {
                $('#mybook2').booklet({
                    arrows: true,
                    arrowsHide: true
                });
            });
        ]]></script>
        </div> 

<?php template_end_open(); ?>
	<script>
    	$(function() {
    		$('#mybook').booklet({
    			arrows: true
    		});
    		$('#mybook2').booklet({
    			arrows: true,
    			arrowsHide: true
    		});
        });
    </script>
<?php template_end_close(); ?>