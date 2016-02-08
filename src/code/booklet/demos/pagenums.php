<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Page Numbers - Demos", true);
?>
		<h2>examples</h2>                
        <h3>Page Numbers</h3>
        <p>Booklet's default settings uses Page Numbers</p>
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
                $('#mybook').booklet();
            });
        ]]></script>
        </div>
        <p>You can also not show page numbers.</p>
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
                    pageNumbers: false
                });
            });
        ]]></script>
        </div>
<?php template_end_open(); ?>
	<script type="text/javascript">
	$(function() {
		$('#mybook').booklet();
		$('#mybook2').booklet({
			pageNumbers:  false
		});
    });
    </script>
<?php template_end_close(); ?>