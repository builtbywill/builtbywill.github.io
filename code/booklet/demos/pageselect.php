<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Page Selector - Demos", true);
?>
		<h2>examples</h2>                
        <h3>Page Selector</h3>
        <p>To use the Page Selector option, you must select a page element to use as a menu container.</p>
        <p>Using the pageSelector option adds a dropdown list for navigating directly to pages.</p>
        <p>To have titles display in the page selector, simply add <strong>title</strong> attributes to all of your odd numbered page containers (or elements).<br />
        <div id="custom-menu"></div>
        <div id="mybook">
            <div title="This is a page title"> 
                <h3>Yay, Page 1!</h3>
            </div>
            <div> 
                <h3>Yay, Page 2!</h3>
            </div>
            <div title="This is another title"> 
                <h3>Yay, Page 3!</h3>
            </div>
            <div> 
                <h3>Yay, Page 4!</h3>
            </div>
            <div title="Hooray for titles!"> 
                <h3>Yay, Page 5!</h3>
            </div>
            <div> 
                <h3>Yay, Page 6!</h3>
            </div>
        </div>
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: xml"><![CDATA[
        <div id="mybook">
            <div title="This is a page title"> 
                <h3>Yay, Page 1!</h3>
            </div>
            <div> 
                <h3>Yay, Page 2!</h3>
            </div>
            <div title="This is another title"> 
                <h3>Yay, Page 3!</h3>
            </div>
            <div> 
                <h3>Yay, Page 4!</h3>
            </div>
            <div title="Hooray for titles!"> 
                <h3>Yay, Page 5!</h3>
            </div>
            <div> 
                <h3>Yay, Page 6!</h3>
            </div>
        </div>
        ]]></script>
        </div>
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[
            $(function() {
                $('#mybook').booklet({
                    menu: '#custom-menu',
                    pageSelector: true
                });
            });
        ]]></script>
        </div>
<?php template_end_open(); ?>
    <script type="text/javascript">
	$(function() {
		$('#mybook').booklet({
			menu: '#custom-menu',
			pageSelector: true
		});
	});
    </script>
<?php template_end_close(); ?>