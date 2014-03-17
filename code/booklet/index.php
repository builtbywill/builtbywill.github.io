<?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/code/booklet/-/php/functions.php"); 
    template_start();
?>

        <h2>what is it?</h2>        
        <p>Booklet is a jQuery tool for displaying content on the web in a flipbook layout.
        It was built using the <a href="http://jquery.com/">jQuery library</a>.
        Licensed under the <a href="http://www.opensource.org/licenses/mit-license.phpg">MIT license</a>. Want to check out the source? Take a look at the project's <a href="https://github.com/builtbywill/Booklet" rel="external">GitHub Repository</a>.</p>
                
        <h2>see it work</h2>        
        <div id="mybook">
            <div> 
                <h3>jQuery Booklet</h3>
                <p>This is a sample booklet! It uses all of the default options, but feel free to explore all the possibilities in the <a href="documentation">documentation</a> section.</p>   
                <h3>Content Variety</h3>
                <p>You can place any sort of html elements inside of your booklet pages. There is no limit to the possibilities you can create. Even using simple options, you can have elaborate displays.</p>   
            </div>
            <div>            
                <h3>Default Options</h3>  
                <p>The default options include:</p>
                <ul>
                    <li><h4>Manual Page Turning</h4>This option requires jQuery UI, but will degrade and be usable if not included.</li>
                    <li><h4>Keyboard Navigation (use your arrows!)</h4></li>
                    <li><h4>Page Numbers</h4></li>
                    <li><h4>Shadows (during animation)</h4></li>
                </ul>      
                <p>Move to the next page by dragging or the arrow keys to see the animation in action!</p>
            </div>
            <div>            
                <h3>What's Next?</h3>  
                <ul>
                    <li><a href="documentation">View the Documentation Reference</a></li>
                    <li><a href="demos">View Demos</a></li>
                    <li><a href="installation">View Installation Instructions</a></li>
                    <li>Download below!</li>
                </ul>      
            </div>
            <div>
                <img src="-/images/sample-booklet-image.png" width="100%" height="100%" alt="" />
            </div>
        </div>
    
<?php template_end_open(); ?>

    <script type="text/javascript">
        $(function() {
            
            $('#download-btn').on('click', function(){
                ga('send', 'event', 'button', 'click',  { page: "/download/1.4.4" });
            });
            
        	// basic initialization
            $('#mybook').booklet({
                pagePadding:20
            });
        });
    </script>
    
<?php template_end_close(); ?>