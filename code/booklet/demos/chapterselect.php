<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Chapter Selector - Demos", true);
?>           	              	
        <h2>examples</h2>
        <h3>Chapter Selector</h3>
        <p>To use the Chapter Selector option, you must select a page element to use as a menu container.</p>
        <p>Using the chapterSelector option adds a dropdown list for navigating directly to pages where you have set a chapter title.</p>
        <p>To have chapter titles display in the chapter selector, simply add <strong>rel</strong> attributes to your pages.<br />
        <div id="custom-menu"></div>
        <div id="mybook">
                <div title="This is a page title" rel="Chapter 1"> 
                    <h3>Yay, Chapter 1 Page 1!</h3>
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
                <div title="This is a page title" rel="Chapter 2"> 
                    <h3>Yay, Chapter 2 Page 1!</h3>
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
            <div title="This is a page title" rel="Chapter 1"> 
                <h3>Yay, Chapter 1 Page 1!</h3>
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
            <div title="This is a page title" rel="Chapter 2"> 
                <h3>Yay, Chapter 2 Page 1!</h3>
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
                    menu: '#custom-menu-2',
                    chapterSelector: true,
                    pageSelector: true
                });
            });
        ]]></script>
        </div>  
<?php template_end_open(); ?>
    <script>
    	$(function() {
    		$('#mybook').booklet({
    			menu: '#custom-menu',
    			chapterSelector: true,
    			pageSelector: true
    		});
    	});
    </script>
<?php template_end_close(); ?>