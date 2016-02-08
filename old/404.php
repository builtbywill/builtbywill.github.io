<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Built By Will"/>
    <meta name="copyright" content="&copy; <?php echo date("Y") ?> Built By Will"/>
    <meta name="description" content="Portfolio site of Indiana Web Designer and Developer Will Grauvogel" />
    <meta name="keywords" content="builtbywill, built, will, grauvogel, indiana, purdue, west lafayette, design, web design, interface, multimedia, portfolio, graphic design, standards compliant, mobile developer, ios developer" />    
	<meta name="google-site-verification" content="Vv-F3PTIcS6Y_WyioQB9ZjrE6i4dlSPD6JeLb_ubZdA" />
 	<title>404 - Built By Will - Design + Development</title>
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
	<link rel="stylesheet" href="/-/css/common.css" />
    <link rel="stylesheet" href="/-/js/jquery.qtip.min.css" />
    <link rel="stylesheet" href="/-/css/screen.css" />
</head>	
<body>
	<header>
    	<h1><a href="/">Built By Will</a></h1>
        <ul>
        	<li><a href="#" title="builtbywill [at] gmail.com" id="gmail_link">gmail</a></li>
	        <li><a href="http://twitter.com/builtbywill" title="@builtbywill" id="twitter_link">@builtbywill</a></li>
        </ul>
        <div id="preview"></div>
    </header>
    <section id="content">
        <h2>404! We can't find that page!</h2>
        <p>It looks like the page you were trying to access does not exist. Check the URL and try again!</p>
        <h3><a href="http://www.sadtrombone.com/" target="_blank">Sad Trombone feels your pain.</a></h3>
    </section>
<?php include("-/includes/footer.php"); ?>
<?php include("-/includes/analytics.php"); ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/-/js/jquery.qtip.min.js"></script>
    <script>
    $(function() {
		$('a[title]').qtip({
			position: {
				my: 'top center',
				at: 'bottom center'
			},
			style: {
				classes: 'qtip-light qtip-rounded'
			}
		})
	});
    </script>
</body>
</html>