<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Chapter Selector - Demos - Booklet - jQuery Plugin</title>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
	<?php include("../-/includes/scripts.php"); ?>
    <script type="text/javascript">
	$(function() {
		$('#mybook').booklet({
			menu: '#custom-menu',
			chapterSelector: true,
			pageSelector: true
		});
	});
    </script>
</head>
<body class="day">
	<?php include("../-/includes/bar.php"); ?>
    <div id="header">
        <div class="wrap">
            <h1><a href="../">Booklet</a></h1>
            <ul id="nav">
                <li><a href="../">Home</a></li>
                <li><a href="../installation">Installation</a></li>
                <li><a href="../documentation">Documentation</a></li>
                <li><a href="./" class="current">Demos</a></li>
                <li><a href="../changelog">Change Log</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="wrap">    	
            <div class="col-third">        	
                <h2>examples</h2>
				<?php include("../-/includes/nav.php"); ?>
            </div>
            <div class="col-2-third"> 
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
            </div>  
            <div class="clear"></div>
        </div>    
    </div>
<?php include("../../../-/php/footer.php"); ?>
<?php include("../../../-/php/analytics.php"); ?>
</body>
</html>