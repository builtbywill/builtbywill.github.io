<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Changelog - Booklet - jQuery Plugin</title>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
	<?php include("-/includes/scripts.php"); ?>
</head>
<body>
	<?php include("-/includes/header.php"); ?>
    <section id="content">       	
        <h2>change log</h2>
    
        <h3>1.4.2</h3>
        <h4>February 24, 2013</h4>
        <h5>Updates</h5>
        <ul>
            <li>Added a simple self-contained example.</li>
            <li>Fixed bug with white ghosting lines appearing while animating.</li>
            <li>Updated License and Version Files.</li>
        </ul>
    
        <h3>1.4.1</h3>
        <h4>February 17, 2013</h4>
        <h5>Bug Fixes</h5>
        <ul>
            <li>Moves to use the newest jQuery and jQuery UI versions and fixes issues pertaining to new jQuery changes. Also, moved from using the .bind()/.unbind() methods to the new .on()/.off() methods.</li>
            <li>Fixes a bug concering calling gotopage with "end" on a closed book.</li>
            <li>Fixes bug with Page Selector and Chapter Selector menu items not being updated when pages were added or removed.</li>
        </ul>

        <h3>1.4.0</h3>
        <h4>August 8, 2012</h4>
        <h5>Major Changes</h5>
        <p>This update brings even major changes and a large overhaul to the booklet code. <strong>Please note that previous methods and events have changed!</strong></p>
        <p>The plugin is now modeled a bit closer to the jQuery UI structure, with all new methods and events. Please see the all new <a href="documentation">Documentation</a> page for all details involving the new options, methods and events.</p>
        
        <h3>1.3.0</h3>
        <h4>April 22, 2012</h4>
        <h5>Additions</h5>
        <p>This update brings major changes and a large overhaul to the booklet code.</p>
        <p>The booklet now runs almost entirely from CSS manipulation and does not directly modify the DOM as intensively, which should increase performance.</p>
        <p>The <strong>.b-load</strong> class wrapper is no longer needed in your markup. The plugin will ignore it if it does exist.</p>
        <p>Using the <strong>$("#mybook").data("booklet")</strong> method, access to the Booklet() object is now open, giving access to some public methods listed below. See the <a href="options">options page</a> or <a href="examples/api-direct">direct api examples</a> for more information.</p>

        <ul>
            <li><strong>init()</strong></li>
            <li><strong>next()</strong></li>
            <li><strong>prev()</strong></li>
            <li><strong>goToPage(index)</strong></li>
            <li><strong>addPage(index, html)</strong></li>
            <li><strong>options</strong></li>
        </ul>
        <p>All internal text has been moved to the booklet options, allowing for easy implementation and translation to different languages.</p>
        <h5>Bug Fixes</h5>
        <p>Auto playing the booklet will now automatically restart when the end is reached.</p>
        <p>Issues with setting the direction to 'RTL' for right-to-left, concerning page numbers, hash controls and direct page navigation, have been fixed.</p>
        
        <h3>1.2.0</h3>
        <h4>February 21, 2011</h4>
        <p>New integration of jQuery UI allows for navigation by manual page dragging. The functionality is based off of the <strong>manual</strong> option. Plugin will degrade gracefully if jQuery UI is not loaded.</p>
        
        <h3>1.1.1</h3>
        <h4>February 16, 2011</h4>
        <p>This new update is confirmed to work with jQuery 1.5</p>
        <p>A bug with IE7, IE8 has been fixed. Shadows will no longer appear as a black box in the reverse transitions.</p>
        <p>New options have been added as well for percentage sizing, auto play, and some tweaks for the closed book option.</p>
        <ul>
            <li><a href="examples/closed">autoCenter</a></li>
            <li><a href="examples/arrows">arrowsHide</a></li>
            <li><a href="examples/auto">auto</a></li>
            <li><a href="examples/auto">delay</a></li>
            <li><a href="examples/auto">play</a></li>
            <li><a href="examples/auto">pause</a></li>
        </ul>
        
        <h3>1.1.0</h3>
        <h4>December 9, 2010</h4>
        <p>Due to some concerns set forth by the good people at <a href="http://viewbook.com" target="_blank">Viewbook.com</a> (name trademark, possible client confusion, etc.), my plugin is now called the <strong>jQuery Booklet Plugin</strong>.</p>
        <p>Along with the name change, I have re-worked the way the plugin works with the page data. It should now be compatiple with form elements (inputed data will not disappear on page turn now), CUFON generated text, and other content that needs separate initialization.</p>
        <p>The <a href="examples/callbacks">before and after callbacks</a> can now access an optional "options" variable.</p>
        
        <h3>1.0.2</h3>
        <h4>December 1, 2010</h4>
        <p>New options have been added as well as streamlining certain parts of the code.</p>
        <ul>
            <li><a href="examples/hovers">hovers</a></li>
            <li><a href="examples/closed">closed</a></li>
            <li><a href="examples/closed">covers</a></li>
            <li><a href="examples/closed">closedFrontTitle</a></li>
            <li><a href="examples/closed">closedFrontChapter</a></li>
            <li><a href="examples/closed">closedBackTitle</a></li>
            <li><a href="examples/closed">closedBackChapter</a></li>
            <li><a href="examples/padding">pagePadding</a></li>
        </ul>
        
        <h3>1.0.1</h3>
        <h4>November 29, 2010</h4>
        <p>Added <a href="examples/direction">direction</a> option. Allows for <strong>RTL</strong> or <strong>LTR</strong> book flipping and organization.</p>
        
        <h3>1.0.0</h3>
        <h4>November 23, 2010</h4>
        <p>First Release</p>
    </section>
<?php include("../../-/php/footer.php"); ?>
<?php include("../../-/php/analytics.php"); ?>
</body>
</html>