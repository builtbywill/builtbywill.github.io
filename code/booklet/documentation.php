<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Documentation - Booklet - jQuery Plugin</title>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
	<?php include("-/includes/scripts.php"); ?>
	<link href="/-/js/jquery-ui/base/jquery.ui.tabs.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />

	<script type="text/javascript">
	$(function() {
		$("#tabs").tabs();
		$(".description, .examples").hide();
		$(".header").click(function(e){
			e.preventDefault();
			//$(this).parent().siblings().find(".description, .examples").hide();
			$(this).siblings(".description, .examples").toggle();
		});
		$('.toggle').click(function(e){
			e.preventDefault();
			if($(this).text() == "Expand All"){
				$(".description, .examples").show();
				$('.toggle').text("Collapse All"); 
			} else {
				$(".description, .examples").hide();
				$('.toggle').text("Expand All");				
			}
		});
	});
    </script>
</head>
<body>
	<?php include("-/includes/header.php"); ?>
    <section id="content">      	
        <h2>documentation</h2>
		<div id="tabs">
		<ul>
			<li><a href="#tabs-1">Options</a></li>
			<li><a href="#tabs-2">Events</a></li>
			<li><a href="#tabs-3">Methods</a></li>
			<li><a href="#tabs-4">Style</a></li>
		</ul>
		<div id="tabs-1">
			<div class="details">	
				<a href="#" class="toggle">Expand All</a>			
				<h2>Options</h2>
				<p>Below are all available options and their default values for each booklet. Override these at initialization with an options object, or after init using the <strong>option</strong> method.</p>
			</div>
			<ul class="list" id="options-list">
				<li><h2 class="section-name">General</h2></li>
				<li>
					<div class="header">
						<h3 class="name">name</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">null</dd>
						</dl>
					</div>
					<div class="description">
						<p>Name of the booklet to display in the browser's document title bar.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>name</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ name: "Booklet" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>name</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var name = $(".selector").booklet( "option", "name" );
//setter
$(".selector").booklet( "option", "name", "Booklet" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">width</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Number, String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">600</dd>
						</dl>
					</div>
					<div class="description">
						<p>The width of the booklet. The option can either be a number (default is 600), a CSS string ("600px") or a percentage string ("50%").</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>width</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ width: 500 });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>width</code> option, after init. Getter will always return a number.
								</dt>
							<dd>
							<pre><code>//getter
var width = $(".selector").booklet( "option", "width" );
//setter
$(".selector").booklet( "option", "width", 500 );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">height</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Number, String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">400</dd>
						</dl>
					</div>
					<div class="description">
						<p>The height of the booklet. The option can either be a number (default is 400), a CSS string ("400px") or a percentage string ("50%").</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>height</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ height: 500 });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>height</code> option, after init. Getter will always return a number.
								</dt>
							<dd>
							<pre><code>//getter
var height = $(".selector").booklet( "option", "height" );
//setter
$(".selector").booklet( "option", "height", 500 );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">speed</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Number</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">1000</dd>
						</dl>
					</div>
					<div class="description">
						<p>Speed of the transition between pages in milliseconds.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>speed</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ speed: 500 });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>speed</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var speed = $(".selector").booklet( "option", "speed" );
//setter
$(".selector").booklet( "option", "speed", 500 );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">direction</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">"LTR"</dd>
						</dl>
					</div>
					<div class="description">
						<p>Direction of the overall page organization. Default is "LTR", left to right. Can also be "RTL" for languages which read right to left.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>direction</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ direction: "RTL" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>direction</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var direction = $(".selector").booklet( "option", "direction" );
//setter
$(".selector").booklet( "option", "direction", "RTL" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">startingPage</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Number</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">0</dd>
						</dl>
					</div>
					<div class="description">
						<p>Zero-based index of the page that will be visible when the booklet is first created.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>startingPage</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ startingPage: 2 });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>startingPage</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var startingPage = $(".selector").booklet( "option", "startingPage" );
//setter
$(".selector").booklet( "option", "startingPage", 2 );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">easing</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">"easeInOutQuad"</dd>
						</dl>
					</div>
					<div class="description">
						<p>Easing method for the complete page transition. Options defined in the <a href="http://gsgd.co.uk/sandbox/jquery/easing/" rel="external">Easing Plugin</a>.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>easing</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ easing: "easeInOutExpo" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>easing</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var easing = $(".selector").booklet( "option", "easing" );
//setter
$(".selector").booklet( "option", "easing", "easeInOutExpo" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">easeIn</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">"easeInQuad"</dd>
						</dl>
					</div>
					<div class="description">
						<p>Easing method for the first half of the page transition. Options defined in the <a href="http://gsgd.co.uk/sandbox/jquery/easing/" rel="external">Easing Plugin</a>.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>easeIn</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ easeIn: "easeInExpo" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>easeIn</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var easeIn = $(".selector").booklet( "option", "easeIn" );
//setter
$(".selector").booklet( "option", "easeIn", "easeInExpo" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">easeOut</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">"easeOutQuad"</dd>
						</dl>
					</div>
					<div class="description">
						<p>Easing method for the second half of the page transition. Options defined in the <a href="http://gsgd.co.uk/sandbox/jquery/easing/" rel="external">Easing Plugin</a>.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>easeOut</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ easeOut: "easeOutExpo" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>easeOut</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var easeOut = $(".selector").booklet( "option", "easeOut" );
//setter
$(".selector").booklet( "option", "easeOut", "easeOutExpo" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li><h2 class="section-name">Closed / Covers</h2></li>
				<li>
					<div class="header">
						<h3 class="name">closed</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Boolean</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">false</dd>
						</dl>
					</div>
					<div class="description">
						<p>Gives the booklet the appearance of being closed. Adds empty pages to beginning and end of book with the class <code>.b-page-empty</code>.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>closed</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ closed: true });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>closed</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var closed = $(".selector").booklet( "option", "closed" );
//setter
$(".selector").booklet( "option", "closed", true );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">closedFrontTitle</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">"Beginning"</dd>
						</dl>
					</div>
					<div class="description">
						<p>Used with <code>closed</code>, <code>menu</code> and <code>pageSelector</code> options. Determines title of blank starting page.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>closedFrontTitle</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ closedFrontTitle: "Start" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>closedFrontTitle</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var closedFrontTitle = $(".selector").booklet( "option", "closedFrontTitle" );
//setter
$(".selector").booklet( "option", "closedFrontTitle", "Start" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">closedFrontChapter</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">"Beginning of Book"</dd>
						</dl>
					</div>
					<div class="description">
						<p>Used with <code>closed</code>, <code>menu</code> and <code>chapterSelector</code> options. Determines chapter name of blank starting page.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>closedFrontChapter</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ closedFrontChapter: "Start of Book" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>closedFrontChapter</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var closedFrontChapter = $(".selector").booklet( "option", "closedFrontChapter" );
//setter
$(".selector").booklet( "option", "closedFrontChapter", "Start of Book" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">closedBackTitle</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">"End"</dd>
						</dl>
					</div>
					<div class="description">
						<p>Used with <code>closed</code>, <code>menu</code> and <code>pageSelector</code> options. Determines title of blank ending page.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>closedBackTitle</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ closedBackTitle: "End" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>closedBackTitle</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var closedBackTitle = $(".selector").booklet( "option", "closedBackTitle" );
//setter
$(".selector").booklet( "option", "closedBackTitle", "End" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">closedBackChapter</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">"End of Book"</dd>
						</dl>
					</div>
					<div class="description">
						<p>Used with <code>closed</code>, <code>menu</code> and <code>chapterSelector</code> options. Determines chapter name of blank ending page.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>closedBackChapter</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ closedBackChapter: "End of Book" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>closedBackChapter</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var closedBackChapter = $(".selector").booklet( "option", "closedBackChapter" );
//setter
$(".selector").booklet( "option", "closedBackChapter", "End of Book" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">covers</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Boolean</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">false</dd>
						</dl>
					</div>
					<div class="description">
						<p>Used with <code>closed</code> option. Makes the first and last pages into covers by hiding page numbers (if enabled) and adding the class <code>.b-page-cover</code> to the page content.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>closed</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ closed: true });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>closed</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var closed = $(".selector").booklet( "option", "closed" );
//setter
$(".selector").booklet( "option", "closed", true );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">autoCenter</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Boolean</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">false</dd>
						</dl>
					</div>
					<div class="description">
						<p>Used with <code>closed</code> option. Makes the booklet position in the center of its container when closed.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>autoCenter</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ autoCenter: true });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>autoCenter</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var autoCenter = $(".selector").booklet( "option", "autoCenter" );
//setter
$(".selector").booklet( "option", "autoCenter", true );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li><h2 class="section-name">Pages</h2></li>
				<li>
					<div class="header">
						<h3 class="name">pagePadding</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Number</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">10</dd>
						</dl>
					</div>
					<div class="description">
						<p>Padding added to each page wrapper <code>.b-wrap</code>.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>pagePadding</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ pagePadding: 20 });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>pagePadding</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var pagePadding = $(".selector").booklet( "option", "pagePadding" );
//setter
$(".selector").booklet( "option", "pagePadding", 20 );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">pageNumbers</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Boolean</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">true</dd>
						</dl>
					</div>
					<div class="description">
						<p>Display page numbers on each page. Page numbers are given the class <code>.b-counter</code>.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>pageNumbers</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ pageNumbers: false });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>pageNumbers</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var pageNumbers = $(".selector").booklet( "option", "pageNumbers" );
//setter
$(".selector").booklet( "option", "pageNumbers", false );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">pageBorder</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Number</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">0</dd>
						</dl>
					</div>
					<div class="description">
						<p>The size of the border around each page, <code>.b-page</code>. This should only be updated if you have added a CSS border to this class.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>pageBorder</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ pageBorder: 5 });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>pageBorder</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var pageBorder = $(".selector").booklet( "option", "pageBorder" );
//setter
$(".selector").booklet( "option", "pageBorder", 5 );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li><h2 class="section-name">Controls</h2></li>
				<li>
					<div class="header">
						<h3 class="name">manual</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Boolean</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">true</dd>
						</dl>
					</div>
					<div class="description">
						<p>Enables manual page turning using click and drag. Requires jQuery UI in order to function.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>manual</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ manual: false });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>manual</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var manual = $(".selector").booklet( "option", "manual" );
//setter
$(".selector").booklet( "option", "manual", false );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">hovers</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Boolean</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">true</dd>
						</dl>
					</div>
					<div class="description">
						<p>Enables a preview page turn hover animation, which shows a small preview of the previous or next page on hover.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>hovers</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ hovers: false });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>hovers</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var hovers = $(".selector").booklet( "option", "hovers" );
//setter
$(".selector").booklet( "option", "hovers", false );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">hoverWidth</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Number</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">50</dd>
						</dl>
					</div>
					<div class="description">
						<p>The width of the page turn hover preview.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>hoverWidth</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ hoverWidth: 100 });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>hoverWidth</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var hoverWidth = $(".selector").booklet( "option", "hoverWidth" );
//setter
$(".selector").booklet( "option", "hoverWidth", 100 );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">hoverSpeed</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Number</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">500</dd>
						</dl>
					</div>
					<div class="description">
						<p>The speed in milliseconds of the page turn hover preview.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>hoverSpeed</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ hoverSpeed: 1000 });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>hoverSpeed</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var hoverSpeed = $(".selector").booklet( "option", "hoverSpeed" );
//setter
$(".selector").booklet( "option", "hoverSpeed", 1000 );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">hoverTreshold</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Number</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">0.25</dd>
						</dl>
					</div>
					<div class="description">
						<p>The percentage used with manual page dragging. Sets the percentage amount of the page width a drag must reach before the next of previous transition will occur when released.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>hoverTreshold</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ hoverTreshold: 0.50 });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>hoverTreshold</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var hoverTreshold = $(".selector").booklet( "option", "hoverTreshold" );
//setter
$(".selector").booklet( "option", "hoverTreshold", 0.50 );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">hoverClick</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Boolean</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">true</dd>
						</dl>
					</div>
					<div class="description">
						<p>Enables a "click" on the page turn hover preview, when using manual page turning, to begin the page turn.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>hoverClick</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ hoverClick: false });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>hoverClick</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var hoverClick = $(".selector").booklet( "option", "hoverClick" );
//setter
$(".selector").booklet( "option", "hoverClick", false );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">overlays</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Boolean</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">false</dd>
						</dl>
					</div>
					<div class="description">
						<p>Enables navigation using a page sized overlay. When enabled page content, like links, will not be clickable. If <code>manual</code> option is enabled, overlays are removed.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>overlays</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ overlays: true });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>overlays</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var overlays = $(".selector").booklet( "option", "overlays" );
//setter
$(".selector").booklet( "option", "overlays", true );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">tabs</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Boolean</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">false</dd>
						</dl>
					</div>
					<div class="description">
						<p>Adds tabs along the top of the booklet.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>tabs</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ tabs: true });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>tabs</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var tabs = $(".selector").booklet( "option", "tabs" );
//setter
$(".selector").booklet( "option", "tabs", true );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">tabWidth</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Number, String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">60</dd>
						</dl>
					</div>
					<div class="description">
						<p>Set the width of each tab. Can be a number or CSS string value.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>tabWidth</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ tabWidth: 100 });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>tabWidth</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var tabWidth = $(".selector").booklet( "option", "tabWidth" );
//setter
$(".selector").booklet( "option", "tabWidth", 100 );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">tabHeight</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Number, String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">20</dd>
						</dl>
					</div>
					<div class="description">
						<p>Set the height of each tab. Can be a number or CSS string value.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>tabHeight</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ tabHeight: 100 });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>tabHeight</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var tabHeight = $(".selector").booklet( "option", "tabHeight" );
//setter
$(".selector").booklet( "option", "tabHeight", 100 );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">nextControlText</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">"Next"</dd>
						</dl>
					</div>
					<div class="description">
						<p>Set the inline text for all "next" controls (tabs, arrows, etc.).</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>nextControlText</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ nextControlText: "Forward" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>nextControlText</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var nextControlText = $(".selector").booklet( "option", "nextControlText" );
//setter
$(".selector").booklet( "option", "nextControlText", "Forward" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">previousControlText</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">"Previous"</dd>
						</dl>
					</div>
					<div class="description">
						<p>Set the inline text for all "previous" controls (tabs, arrows, etc.).</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>previousControlText</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ previousControlText: "Back" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>previousControlText</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var previousControlText = $(".selector").booklet( "option", "previousControlText" );
//setter
$(".selector").booklet( "option", "previousControlText", "Back" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">nextControlTitle</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">"Next Page"</dd>
						</dl>
					</div>
					<div class="description">
						<p>Set the text for the title attributes of all "next" controls (tabs, arrows, etc.).</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>nextControlTitle</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ nextControlTitle: "Forward" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>nextControlTitle</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var nextControlTitle = $(".selector").booklet( "option", "nextControlTitle" );
//setter
$(".selector").booklet( "option", "nextControlTitle", "Forward" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">previousControlTitle</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">"Previous Page"</dd>
						</dl>
					</div>
					<div class="description">
						<p>Set text for title attributes of all "previous" controls (tabs, arrows, etc.).</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>previousControlTitle</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ previousControlTitle: "Back" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>previousControlTitle</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var previousControlTitle = $(".selector").booklet( "option", "previousControlTitle" );
//setter
$(".selector").booklet( "option", "previousControlTitle", "Back" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">arrows</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Boolean</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">false</dd>
						</dl>
					</div>
					<div class="description">
						<p>Adds arrow overlays on the sides of the booklet.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>arrows</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ arrows: true });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>arrows</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var arrows = $(".selector").booklet( "option", "arrows" );
//setter
$(".selector").booklet( "option", "arrows", true );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">arrowsHide</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Boolean</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">false</dd>
						</dl>
					</div>
					<div class="description">
						<p>Auto hide the <code>arrows</code> when the controls are not hovered.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>arrowsHide</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ arrowsHide: true });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>arrowsHide</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var arrowsHide = $(".selector").booklet( "option", "arrowsHide" );
//setter
$(".selector").booklet( "option", "arrowsHide", true );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">cursor</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">"pointer"</dd>
						</dl>
					</div>
					<div class="description">
						<p>The CSS cursor used for all controls (tabs, arrows, etc.). Accepts any CSS Cursor</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>cursor</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ cursor: "move" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>cursor</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var cursor = $(".selector").booklet( "option", "cursor" );
//setter
$(".selector").booklet( "option", "cursor", "move" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">hash</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Boolean</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">false</dd>
						</dl>
					</div>
					<div class="description">
						<p>Enables navigation using a hash string (e.g. "#/page/1"). Will affect all booklets with <code>hash</code> enabled on the same page.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>hash</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ hash: true });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>hash</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var hash = $(".selector").booklet( "option", "hash" );
//setter
$(".selector").booklet( "option", "hash", true );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">hashTitleText</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">" - Page"</dd>
						</dl>
					</div>
					<div class="description">
						<p>Text which forms the hash page title (e.g. "Booklet <strong>- Page </strong> 1").</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>hashTitleText</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ hashTitleText: " - " });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>hashTitleText</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var hashTitleText = $(".selector").booklet( "option", "hashTitleText" );
//setter
$(".selector").booklet( "option", "hashTitleText", " - " );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">next</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">null</dd>
						</dl>
					</div>
					<div class="description">
						<p>jQuery selector for element to use as a click trigger for the next page.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>next</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ next: "#customNext" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>next</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var next = $(".selector").booklet( "option", "next" );
//setter
$(".selector").booklet( "option", "next", "#customNext" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">prev</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">null</dd>
						</dl>
					</div>
					<div class="description">
						<p>jQuery selector for element to use as a click trigger for the previous page.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>prev</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ prev: "#customPrev" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>prev</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var prev = $(".selector").booklet( "option", "prev" );
//setter
$(".selector").booklet( "option", "prev", "#customPrevious" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">auto</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Boolean</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">false</dd>
						</dl>
					</div>
					<div class="description">
						<p>Enables automatic navigation. Requires <code>delay</code> option in order to function. When the end of the booklet is reached it jumps back to the first page.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>auto</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ auto: true });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>auto</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var auto = $(".selector").booklet( "option", "auto" );
//setter
$(".selector").booklet( "option", "auto", true );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">delay</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Number</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">5000</dd>
						</dl>
					</div>
					<div class="description">
						<p>The time in milliseconds between each automatic page flip transition.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>delay</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ delay: 1000 });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>delay</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var delay = $(".selector").booklet( "option", "delay" );
//setter
$(".selector").booklet( "option", "delay", 1000 );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">pause</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">null</dd>
						</dl>
					</div>
					<div class="description">
						<p>jQuery selector for element to use as a click trigger for pausing auto page flipping.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>pause</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ pause: "#customPause" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>pause</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var pause = $(".selector").booklet( "option", "pause" );
//setter
$(".selector").booklet( "option", "pause", "#customPause" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">play</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">null</dd>
						</dl>
					</div>
					<div class="description">
						<p>jQuery selector for element to use as a click trigger for restarting auto page flipping after it has been paused.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>play</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ play: "#customPlay" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>play</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var play = $(".selector").booklet( "option", "play" );
//setter
$(".selector").booklet( "option", "play", "#customPlay" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">menu</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>String</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">null</dd>
						</dl>
					</div>
					<div class="description">
						<p>jQuery selector for the element to use as the menu area. It is required for <code>pageSelector</code> and <code>chapterSelector</code>.</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>menu</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ menu: "#customMenu" });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>menu</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var menu = $(".selector").booklet( "option", "menu" );
//setter
$(".selector").booklet( "option", "menu", "#customMenu" );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">pageSelector</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Boolean</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">false</dd>
						</dl>
					</div>
					<div class="description">
						<p>Enables navigation with a drop-down menu of page titles. Requires <code>menu</code>. Uses the <code>title</code> attribute from each of your starting pages.</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>pageSelector</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ pageSelector: true });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>pageSelector</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var pageSelector = $(".selector").booklet( "option", "pageSelector" );
//setter
$(".selector").booklet( "option", "pageSelector", true );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">chapterSelector</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Boolean</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">false</dd>
						</dl>
					</div>
					<div class="description">
						<p>Enables navigation with a drop-down menu of chapter titles. Requires <code>menu</code>. Uses the <code>rel</code> attribute from each of your starting pages.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>chapterSelector</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ chapterSelector: true });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>chapterSelector</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var chapterSelector = $(".selector").booklet( "option", "chapterSelector" );
//setter
$(".selector").booklet( "option", "chapterSelector", true );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li><h2 class="section-name">Shadows</h2></li>
				<li>
					<div class="header">
						<h3 class="name">shadows</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Boolean</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">true</dd>
						</dl>
					</div>
					<div class="description">
						<p>Display shadows on pages during animations.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>shadows</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ shadows: false });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>shadows</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var shadows = $(".selector").booklet( "option", "shadows" );
//setter
$(".selector").booklet( "option", "shadows", false );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">shadowTopFwdWidth</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Number</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">166</dd>
						</dl>
					</div>
					<div class="description">
						<p>The width of the top forward shadow. Only change if you change the shadow images.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>shadowTopFwdWidth</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ shadowTopFwdWidth: 100 });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>shadows</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var shadowTopFwdWidth = $(".selector").booklet( "option", "shadowTopFwdWidth" );
//setter
$(".selector").booklet( "option", "shadowTopFwdWidth", 100 );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">shadowTopFwdWidth</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Number</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">166</dd>
						</dl>
					</div>
					<div class="description">
						<p>The width of the top forward animation shadow. Only change if you change the shadow images.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>shadowTopFwdWidth</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ shadowTopFwdWidth: 100 });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>shadowTopFwdWidth</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var shadowTopFwdWidth = $(".selector").booklet( "option", "shadowTopFwdWidth" );
//setter
$(".selector").booklet( "option", "shadowTopFwdWidth", 100 );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">shadowBtmWidth</h3>
						<dl>
							<dt class="option-type-label">Type:</dt>
							<dd class="option-type"><span>Number</span></dd>
							<dt class="option-default-label">Default:</dt>
							<dd class="option-default">50</dd>
						</dl>
					</div>
					<div class="description">
						<p>The width of the bottom animation shadow. Only change if you change the shadow images.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Initialize booklet with the <code>shadowBtmWidth</code> option.
							</dt>
							<dd>
								<pre><code>$(".selector").booklet({ shadowBtmWidth: 100 });</code></pre>
								</dd>
								<dt>
								  Get or set the <code>shadowBtmWidth</code> option, after init.
								</dt>
							<dd>
							<pre><code>//getter
var shadowBtmWidth = $(".selector").booklet( "option", "shadowBtmWidth" );
//setter
$(".selector").booklet( "option", "shadowBtmWidth", 100 );</code></pre>
							</dd>
						</dl>
					</div>
				</li>
			</ul>
		</div>
		<div id="tabs-2">
			<div class="details">				
				<a href="#" class="toggle">Expand All</a>
				<h2>Events</h2>
				<p>The following events are triggered when using a booklet.</p>
				<ul>
					<li>bookletcreate</li>
					<li>bookletstart, bookletchange</li>
					<li>bookletadd, bookletremove</li>
				</ul>
				<p>Each event returns a <code><strong>data</strong></code> object which contains data related to the event. Common to all events are:</p>
				<ul>
					<li><strong>data.options</strong> - the current booklet options at time of the event (read-only)</li>
					<li><strong>data.index</strong> - zero-based index of the currently visible page spread</li>
				</ul>
				<p>Only available for <strong>bookletcreate</strong>, <strong>bookletstart</strong> and <strong>bookletchange</strong> events:
				<ul>
					<li><strong>data.pages</strong> - an array of elements, the two currently visible pages</li>
				</ul>
				<p>Only available for <strong>bookletadd</strong> and <strong>bookletremove</strong> events:
				<ul>
					<li><strong>data.page </strong> - element, the page that was either just added or just removed</li>
				</ul>
			</div>
			<ul class="list" id="events-list">
				<li>
					<div class="header">
						<h3 class="name">create</h3>
						<dl>
							<dt class="event-type-label">Type:</dt>
							<dd class="event-type">bookletcreate</dd>
						</dl>
					</div>
					<div class="description">
						<p>This event triggers when booklet is created.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Supply a callback function to handle the <code>create</code> event as an init option.
							</dt>
							<dd>
<pre><code>$(".selector").booklet({
	create: function(event, data) { ... }
});</code></pre>
</dd>
<dt>
  Bind to the <code>create</code> event by type: <code>bookletcreate</code>.
</dt>
<dd>
<pre><code>$(".selector").bind("bookletcreate", function(event, data) {
	...
});</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">start</h3>
						<dl>
							<dt class="event-type-label">Type:</dt>
							<dd class="event-type">bookletstart</dd>
						</dl>
					</div>
					<div class="description">
						<p>This event triggers when pages begin turning.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Supply a callback function to handle the <code>start</code> event as an init option.
							</dt>
							<dd>
<pre><code>$(".selector").booklet({
	start: function(event, data) { ... }
});</code></pre>
</dd>
<dt>
  Bind to the <code>start</code> event by type: <code>bookletstart</code>.
</dt>
<dd>
<pre><code>$(".selector").bind("bookletstart", function(event, data) {
	...
});</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">change</h3>
						<dl>
							<dt class="event-type-label">Type:</dt>
							<dd class="event-type">bookletchange</dd>
						</dl>
					</div>
					<div class="description">
						<p>This event triggers after pages have finished turning.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Supply a callback function to handle the <code>change</code> event as an init option.
							</dt>
							<dd>
<pre><code>$(".selector").booklet({
	change: function(event, data) { ... }
});</code></pre>
</dd>
<dt>
  Bind to the <code>change</code> event by type: <code>bookletchange</code>.
</dt>
<dd>
<pre><code>$(".selector").bind("bookletchange", function(event, data) {
	...
});</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">add</h3>
						<dl>
							<dt class="event-type-label">Type:</dt>
							<dd class="event-type">bookletadd</dd>
						</dl>
					</div>
					<div class="description">
						<p>This event triggers when a page is added.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
							<dt>
							  Supply a callback function to handle the <code>add</code> event as an init option.
							</dt>
							<dd>
<pre><code>$(".selector").booklet({
	add: function(event, data) { ... }
});</code></pre>
							</dd>
							<dt>
							  Bind to the <code>add</code> event by type: <code>bookletadd</code>.
							</dt>
							<dd>
<pre><code>$(".selector").bind("bookletadd", function(event, data) {
	...
});</code></pre>
							</dd>
						</dl>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">remove</h3>
						<dl>
							<dt class="event-type-label">Type:</dt>
							<dd class="event-type">bookletremove</dd>
						</dl>
					</div>
					<div class="description">
						<p>This event triggers when a page is removed.</p>
					</div>
					<div class="examples">
					    <h4>Code examples</h4>
					    <dl class="examples-list">
<dt>
  Supply a callback function to handle the <code>remove</code> event as an init option.
</dt>
<dd>
<pre><code>$(".selector").booklet({
	remove: function(event, data) { ... }
});</code></pre>
</dd>
<dt>
  Bind to the <code>remove</code> event by type: <code>bookletremove</code>.
</dt>
<dd>
<pre><code>$(".selector").bind("bookletremove", function(event, data) {
	...
});</code></pre>
</dd>
						</dl>
					</div>
				</li>
			</ul>
		</div>
		<div id="tabs-3">
			<div class="details">
				<a href="#" class="toggle">Expand All</a>
				<h2>Methods</h2>
				<p>The methods available for each booklet can be called on one or more booklets at the same time. Methods which return a value, such as an <strong>option</strong>, when called on more than one selector will return an array of values. Otherwise, the chainability of the elements will be maintained.</p>
			</div>
			<ul class="list" id="methods-list">
				<li>
					<div class="header">
						<h3 class="name">destroy</h3>
						<dl>
							<dt class="method-signature-label">Signature:</dt>
							<dd class="method-signature">.booklet("destroy")</dd>
						</dl>
					</div>
					<div class="description">
						<p>Remove the booklet completely. Returns the element back to its original state.</p>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">disable</h3>
						<dl>
							<dt class="method-signature-label">Signature:</dt>
							<dd class="method-signature">.booklet("disable")</dd>
						</dl>
					</div>
					<div class="description">
						<p>Disable the booklet.</p>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">enable</h3>
						<dl>
							<dt class="method-signature-label">Signature:</dt>
							<dd class="method-signature">.booklet("enable")</dd>
						</dl>
					</div>
					<div class="description">
						<p>Enable the booklet.</p>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">option</h3>
						<dl>
							<dt class="method-signature-label">Signature:</dt>
							<dd class="method-signature">.booklet("option", "name", [value])</dd>
						</dl>
					</div>
					<div class="description">
						<p>Get or set any option. If no value is provided, will act as a getter.</p>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">option</h3>
						<dl>
							<dt class="method-signature-label">Signature:</dt>
							<dd class="method-signature">.booklet("option", [option])</dd>
						</dl>
					</div>
					<div class="description">
						<p>Set multiple options at once by passing in an options object (just like during init). If no options object is provided it returns the complete object of all current options.</p>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">next</h3>
						<dl>
							<dt class="method-signature-label">Signature:</dt>
							<dd class="method-signature">.booklet("next")</dd>
						</dl>
					</div>
					<div class="description">
						<p>Moves the booklet to the next page spread.</p>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">prev</h3>
						<dl>
							<dt class="method-signature-label">Signature:</dt>
							<dd class="method-signature">.booklet("prev")</dd>
						</dl>
					</div>
					<div class="description">
						<p>Moves the booklet to the previous page spread.</p>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">gotopage</h3>
						<dl>
							<dt class="method-signature-label">Signature:</dt>
							<dd class="method-signature">.booklet("gotopage", index)</dd>
						</dl>
					</div>
					<div class="description">
						<p>Moves the booklet to the provided index. Index must either be a zero-based page index or one of the strings "start" or "end".</p>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">add</h3>
						<dl>
							<dt class="method-signature-label">Signature:</dt>
							<dd class="method-signature">.booklet("add", index, html)</dd>
						</dl>
					</div>
					<div class="description">
						<p>Add a new page. Index must either be a zero-based page index where the new page will be inserted or one of the strings "start" or "end". <code>html</code> must be a string of HTML content.</p>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">remove</h3>
						<dl>
							<dt class="method-signature-label">Signature:</dt>
							<dd class="method-signature">.booklet("remove", index)</dd>
						</dl>
					</div>
					<div class="description">
						<p>Remove a page. Index must either be a zero-based page index of the page that will be removed or one of the strings "start" or "end".</p>
					</div>
				</li>
			</ul>
		</div>
		<div id="tabs-4">
			<div class="details">
				<h2>Style</h2>
				<p>Once the booklet is created, the <strong>basic generated</strong> structure and CSS will appear below. The basic top level classes are bolded.</p>
				<p>If more customization is desired, all generated classes are visible in the current jQuery Booklet stylesheet.</p>
<pre><code>&lt;div class="<strong>booklet</strong>" id="mybook"&gt;
    &lt;div class="<strong>b-page</strong> b-page-0 b-p1"&gt;
        &lt;div class="<strong>b-wrap</strong> b-wrap-left"&gt;
            ...
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="<strong>b-page</strong> b-page-1 b-p2"&gt;
        &lt;div class=<strong>"b-wrap</strong> b-wrap-right"&gt;
            ...
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="<strong>b-page</strong> b-page-2 b-p3"&gt;
        &lt;div class="<strong>b-wrap</strong> b-wrap-left"&gt;
            ...
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="<strong>b-page</strong> b-page-3 b-p4"&gt;
        &lt;div class="<strong>b-wrap</strong> b-wrap-right"&gt;
            ...
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="<strong>b-controls</strong>"&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>			
			</div>
			<ul class="list" id="css-list">
				<li><h2 class="section-name">General</h2></li>
				<li>
					<div class="header">
						<h3 class="name">.booklet</h3>
					</div>
					<div class="description">
						<p>The outer container of the booklet. This class is added to the element you designate as the booklet.</p>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">.b-page</h3>
					</div>
					<div class="description">
						<p>The outer container of each page. Given a zero-based index class (<strong>.b-page-0, etc.</strong>) which numbers the pages.</p>
						<p>The other classes (<strong>.b-pN, .b-p0, .b-p1, .b-p2, .b-p3, .b-p4</strong>) are used for animating the booklet. They correspond to the previous, current and next page spreads (paired together).</p>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">.b-wrap</h3>
					</div>
					<div class="description">
						<p>The inner container of each page. Given either <strong>.b-wrap-left</strong> or <strong>.b-wrap-right</strong>, depending if the page is on the left or right side of the booklet.</p>
					</div>
				</li>
				<li>
					<div class="header">
						<h3 class="name">.b-page-cover</h3>
					</div>
					<div class="description">
						<p>Added to <strong>.b-wrap</strong> of the first and last pages, when using the "closed" and "covers" options.</p>
					</div>
				</li>
				<li><h2 class="section-name">Controls</h2></li>
				<li>
					<div class="header">
						<h3 class="name"></h3>
					</div>
					<div class="description">
						<p></p>
					</div>
				</li>
				<li><h2 class="section-name">Menu</h2></li>
				<li>
					<div class="header">
						<h3 class="name"></h3>
					</div>
					<div class="description">
						<p></p>
					</div>
				</li>
			</ul>
		</div>
        </div>
        <div class="clear"></div>
</section>
<?php include("../../-/php/footer.php"); ?>
<?php include("../../-/php/analytics.php"); ?>
</body>
</html>