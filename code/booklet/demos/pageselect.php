<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Page Selector - Demos - Booklet - jQuery Plugin</title>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
	<?php include("../-/includes/head.php"); ?>
</head>
<body>
<?php include("../-/includes/header.php"); ?>
<?php include("../-/includes/aside.php"); ?>
	<section id="content" class="sub-content">
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
    </section>
<?php include("../../../-/php/footer.php"); ?>
<?php include("../../../-/php/analytics.php"); ?>
<?php include("../-/includes/scripts.php"); ?>
    <script type="text/javascript">
	$(function() {
		$('#mybook').booklet({
			menu: '#custom-menu',
			pageSelector: true
		});
	});
    </script>
</body>
</html>