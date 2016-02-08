<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Padding - Demos", true);
?>
		<h2>examples</h2>                
        <h3>Page Padding</h3>
        <p>Booklet's default page padding is set to 10px</p>
        <div id="mybook">
            <div> 
                <h3>Yay, Page 1!</h3>
            </div>
            <div> 
                <img src="../-/images/sample-booklet-image.png" width="100%" height="100%" alt="" />
            </div>
            <div> 
                <h3>Yay, Page 3!</h3>
            </div>
            <div> 
                <img src="../-/images/sample-booklet-image.png" width="100%" height="100%" alt="" />
            </div>
        </div>
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[

            $(function() {
                $('#mybook').booklet();
            });
        ]]></script>
        </div>
        <p>You can also modify this number if you wish to get different effects.</p>
        <div id="mybook2">
            <div> 
                <h3>Yay, Page 1!</h3>
            </div>
            <div> 
                <img src="../-/images/sample-booklet-image.png" width="100%" height="100%" alt="" />
            </div>
            <div> 
                <h3>Yay, Page 3!</h3>
            </div>
            <div> 
                <img src="../-/images/sample-booklet-image.png" width="100%" height="100%" alt="" />
            </div>
        </div>
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[

            $(function() {
                $('#mybook2').booklet({
                    pagePadding: 0
                });
            });
        ]]></script>
        </div>
<?php template_end_open(); ?>
	<script type="text/javascript">
	$(function() {
		$('#mybook').booklet();
		$('#mybook2').booklet({
			pagePadding: 0
		});
    });
    </script>
<?php template_end_close(); ?>