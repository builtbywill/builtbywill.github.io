<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>willgrauvogel.com</title>
    <meta name="Author" content="Will Grauvogel"/>
    <meta name="Description" content="Portfolio site of Web Designer and Developer Will Grauvogel" />
    <link type="image/x-icon" rel="shortcut icon" href="/assets/img-site/favicon.ico"/>    
    <link type="text/css" rel="stylesheet" href="/dev/min/-/css/core.css" media="screen, tv, projection"/>    
</head>
<body>
	<div id="controls">
        <h1>willgrauvogel.com</h1>
        <h2>interactive designer</h2>
        <p>I make websites, things that look cool, clean code and good experiences. I love what I do.</p>
        <div id="projects">
            <a href="/dev/min/-/img/viewbook.jpg">Visions of Discovery</a>
            <a href="#">Hotseat</a>
            <a href="#">DURI / IFI</a>
            <a href="#">Michiana ASSE</a>
            <a href="#">xOpenAir Chat</a>
            <a href="#">ND Marketplace</a>
            <a href="#">Grauvogel &amp; Associates</a>
            <a href="#">GLHRC</a>
        </ul>
    </div>
    <div id="info"></div>
    <div id="next"></div>
    <div id="prev"></div>
    <div id="superbgimage">
	</div>

	<script type="text/javascript" src="/dev/min/-/js/SuperBGImage/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="/dev/min/-/js/SuperBGImage/jquery.effects.core.min.js"></script>
	<script type="text/javascript" src="/dev/min/-/js/SuperBGImage/jquery.effects.slide.min.js"></script>
	<script type="text/javascript" src="/dev/min/-/js/SuperBGImage/jquery.effects.blind.min.js"></script>
	<script type="text/javascript" src="/dev/min/-/js/SuperBGImage/jquery.superbgimage.min.js"></script>
	<script type="text/javascript">
    $(function() {
    
        // Options for SuperBGImage
        $.fn.superbgimage.options = {
            slideshow: 0, // 0-none, 1-autostart slideshow
            slide_interval: 4000, // interval for the slideshow
            speed: 'slow' // animation speed
        };
    
        // initialize SuperBGImage
        $('#projects').superbgimage();
    
    });
    </script>
</body>
</html>
