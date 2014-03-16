<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Easing - Demos", true);
?>
		<h2>examples</h2>                
        <h3>Custom Easing</h3>
        <p>You can either remove your easing:</p><br />
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
                    easing:  null,
                    easeIn:  null,
                    easeOut: null
                });
            });
        ]]></script>
        </div>
        <p>Or you can choose other easing presets:</p><br />
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
                $('#mybook2').booklet({
                    easing:  'easeInOutElastic',
                    easeIn:  'easeInElastic',
                    easeOut: 'easeOutElastic'
                });
            });
        ]]></script>
        </div>
<?php template_end_open(); ?>
	<script type="text/javascript">
	$(function() {
		$('#mybook').booklet({
			easing:  null,
			easeIn:  null,
			easeOut: null
		});
		$('#mybook2').booklet({
			easing:  'easeInOutExpo',
			easeIn:  'easeInExpo',
			easeOut: 'easeOutExpo'
		});
	});
    </script>
<?php template_end_close(); ?>