//JQUERY SETUP
	$(function() {	
		$('#work').hide();
		$('#about').hide();
		$('#contact').hide();
		$('#nav1, #nav1b').click(function(){
			$('#about').slideDown();
		});
		$('#nav2, #nav2b').click(function(){
			$('#work').slideDown();
		});
		$('#nav3, #nav3b').click(function(){
			$('#contact').animate( { width:"400px"}, 1000 )
		});
		$.localScroll({
			axis:'xy',					   
			easing: 'easeInOutExpo',
			offset:-150,
			duration: 2000
		});
	});
	
	
//LINKS	
	function externalLinks() {
		if (!document.getElementsByTagName) return;
		var anchors = document.getElementsByTagName("a");
		for (var i=0; i<anchors.length; i++) {

			var anchor = anchors[i];
			if (anchor.getAttribute("href") && (anchor.getAttribute("rel") == "external" || anchor.getAttribute("rel") == "pdf" || anchor.getAttribute("rel") == "word"))
				anchor.target = "_blank";
		}
	}
	
	window.onload = externalLinks;