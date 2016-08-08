<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start("Keyboard - Demos", true);
?>
	<h2>examples</h2>               
    <h3>Keyboard Controls</h3>
    <p>The keyboard controls option uses the left and right arrow keys on the keyboard to navigate through pages.</p><br />
    <p><strong>Note: if multiple booklets are created using keyboard controls on the same page, they will both be affected and cannot be controlled individually.</strong></p>
    <br/>
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
                keyboard: true
            });
        });
    ]]></script>
    </div>
<?php template_end_open(); ?>

    <script type="text/javascript">
    $(function() {
        $('#mybook').booklet({
            keyboard: true
        });
    });
    </script>
<?php template_end_close(); ?>