<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Starting Page - Demos", true);
?>
		<h2>examples</h2>               
        <h3>Custom Starting Page</h3>
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
                    startingPage: 3
                });
            });
        ]]></script>
        </div>
<?php template_end_open(); ?>
    <script type="text/javascript">
        $(function() {
        	$('#mybook').booklet({
        		startingPage: 3
        	});
        });
    </script>
<?php template_end_close(); ?>