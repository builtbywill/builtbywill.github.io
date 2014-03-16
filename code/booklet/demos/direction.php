<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Reading Direction - Demos", true);
?>
        <h2>examples</h2>
        <h3>Direction</h3>
        <p>Direction is set to left to right by default.</p><br />
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
                    direction:  'LTR'
                });
            });
        ]]></script>
        </div>
        
        <p>Alternately, you can modify the direction to be right to left. If you use this option, you may have to use your own CSS to align text to the right.</p><br />
        <div id="mybook2">
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
                $('#mybook2').booklet({
                    direction:  'RTL'
                });
            });
        ]]></script>
        </div> 
<?php template_end_open(); ?>

	<script type="text/javascript">
	$(function() {
		$('#mybook').booklet({
			direction:  'LTR'
		});
		$('#mybook2').booklet({
			direction:  'RTL'
		});
    });
    </script>
<?php template_end_close(); ?>