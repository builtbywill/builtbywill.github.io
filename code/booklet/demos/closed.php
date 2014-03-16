<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Closed Book and Covers - Demos", true);
?>           	
        <h2>examples</h2>
        <h3>Closed Book</h3>
        <p>The closed option lets you give your book the appearance of being closed, by adding blank pages to the beginning and end.</p><br />
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
                    closed: true
                });
            });
        ]]></script>
        </div>
        <h3>Closed Book, Auto Center</h3>
        <p>If you wish your book to be centered when it is closed, use the <strong>autoCenter</strong> option.</p><br />
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
                    closed: true,
                    autoCenter: true
                });
            });
        ]]></script>
        </div>
        <h3>Closed Book with Covers</h3>
        <p>When using the Closed option, you can also set your first and last pages as covers, which will give them a unique style (<em style="color:#fff;">.b-page-cover</em>) and not show page numbers (if applicable).</p><br />
        <div id="mybook3">
                <div> 
                    <h3>Front Cover</h3>
                </div>
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
                    <h3>Back Cover</h3>
                </div>
        </div>
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[
            $(function() {
                $('#mybook3').booklet({
                    closed: true,
                    covers: true
                });
            });
        ]]></script>
        </div>
        <h3>Closed Book with RTL direction</h3>
        <p>You can use both of these options with both LTR and RTL directions</p><br />
        <div id="mybook4">
                <div> 
                    <h3>Front Cover</h3>
                </div>
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
                    <h3>Back Cover</h3>
                </div>
        </div>
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[
            $(function() {
                $('#mybook4').booklet({
                    closed: true,
                    covers: true,
                    direction: 'RTL'
                });
            });
        ]]></script>
        </div>
        <h3>Closed Book with Chapter and Page Selectors</h3>
        <p>You can also still use chapterSelector and pageSelector with your closed books. To modify the Chapter Names and Page Titles for the beginning and end of the book, see the <a href="../documentation">Documentation Page</a>.</p><br />
        <div id="custom-menu"></div>
        <div id="mybook5">
                <div> 
                    <h3>Front Cover</h3>
                </div>
                <div title="This is a page title" rel="Chapter 1"> 
                    <h3>Yay, Page 1!</h3>
                </div>
                <div title="This is another title"> 
                    <h3>Yay, Page 2!</h3>
                </div>
                <div title="This is another title"> 
                    <h3>Yay, Page 3!</h3>
                </div>
                <div title="Hooray for titles!"> 
                    <h3>Yay, Page 4!</h3>
                </div>
                <div title="This is another title"> 
                    <h3>Yay, Page 5!</h3>
                </div>
                <div title="This is a page title" rel="Chapter 2"> 
                    <h3>Yay, Page 6!</h3>
                </div>
                <div title="This is another title"> 
                    <h3>Yay, Page 7!</h3>
                </div>
                <div title="This is another title"> 
                    <h3>Yay, Page 8!</h3>
                </div>
                <div title="This is another title"> 
                    <h3>Yay, Page 9!</h3>
                </div>
                <div title="This is another title"> 
                    <h3>Yay, Page 10!</h3>
                </div>
                <div> 
                    <h3>Back Cover</h3>
                </div>
        </div>
        <div class="code-wrap">
        <script type="syntaxhighlighter" class="brush: js"><![CDATA[
            $(function() {
                $('#mybook5').booklet({
                    closed: true,
                    covers: true,
                    menu: '#custom-menu',
                    pageSelector: true,
                    chapterSelector: true
                });
            });
        ]]></script>
        </div>   

<?php template_end_open(); ?>

    <script>
    	$(function() {
    		$('#mybook').booklet({
    			closed: true
    		});
    		$('#mybook2').booklet({
    			closed: true,
    			autoCenter: true
    		});
    		$('#mybook3').booklet({
    			closed: true,
    			covers: true
    		});
    		$('#mybook4').booklet({
    			closed: true,
    			covers: true,
    			direction: 'RTL'
    		});
    		$('#mybook5').booklet({
    			closed: true,
    			covers: true,
    			menu: '#custom-menu',
    			pageSelector: true,
    			chapterSelector: true
    		});
    	});
    </script>
    
<?php template_end_close(); ?>