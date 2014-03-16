<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Hovers - Demos", true);
?>
		<h2>examples</h2>                
        <h3>Hover Effect</h3>
        <p>The hovers effect is on by default and enables a little page turn preview animation when the controls are hovered, in conjunction with the overlays option.</p>
        <p><strong>Note: the manual option must be disabled to utilize overlays and hovers</strong></p><br />
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
                    manual:   false,
                    overlays: true,
                    hovers:   true
                });
            });
        ]]></script>
        </div>
        <p>Alternately, the effect can be disabled.</p><br />
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
                    manual:   false,
                    overlays: true,
                    hovers:   false
                });
            });
        ]]></script>
        </div>
<?php template_end_open(); ?>
    <script type="text/javascript">
	$(function() {
		$('#mybook').booklet({
			manual:   false,
			overlays: true,
			hovers:   true
		});
		$('#mybook2').booklet({
			manual:   false,
			overlays: true,
			hovers:   false
		});
	});
    </script>
<?php template_end_close(); ?>