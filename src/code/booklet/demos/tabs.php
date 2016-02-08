<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Tabs - Demos", true);
?>
		<h2>examples</h2>                
        <h3>Tabs</h3>
        <p>You can use tab navigation with the tabs option. Alternately, you can modify the size of the tabs to better fit your design.</p><br />
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
                    tabs:  true,
                    tabWidth:  180,
                    tabHeight:  20
                });
            });
        ]]></script>
        </div>
    </section>
<?php template_end_open(); ?>

    <script type="text/javascript">
    $(function() {
        $('#mybook').booklet({
            tabs:  true,
            tabWidth:  180,
            tabHeight:  20
        });
    });
    </script>
<?php template_end_close(); ?>