//JQUERY SETUP
	$(document).ready(function () {
		$('#featured-list').cycle({ 
			fx:     'fade', 
			speed:   300, 
			timeout: 9000, 
			pause:   1 ,
			pager: '#featured-nav',
			before: onBefore,
			after: onAfter
		});
		$(".project-image-list img").fadeTo("slow", 0.6);
		$('.project-image-list img').hover(function(){
			$(this).animate( { backgroundColor: 'black', opacity: 1.0 }, {queue: false, duration: 1000})
			},function(){
			$(this).animate( { backgroundColor: 'white', opacity: 0.6  }, {queue: false, duration: 1000})			
		});
		
		$('#nav a, #upperNav a, #nav li, #upperNav li').hover(function(){
			$(this).animate( { backgroundColor: 'white', color: 'black' }, {queue: false, duration: 100})
		},function(){
			$(this).animate( { backgroundColor: 'black', color: 'white'  }, {queue: false, duration: 100})			
		});

		
		
		$("#nav ul li:even").addClass("alt");
		$('#nav li.main').hover(function () {
			if ($(this).find('ul').is(":hidden")) {
				$(this).find('ul').slideDown('fast'); 
			}
		},function(){
			if ($(this).find('ul').is(":visible")) {
				$(this).find('ul').slideUp('fast'); 
			}
		});
/*		$('a').tooltip({ 
			track: true, 
			delay: 700, 
			showURL: false, 
			fade: 300 
		}); 
*/
		
/*		var container = $('#peoplebrowser');
		var ul = $('#content #pb-list');
		var itemsWidth = ul.innerWidth() - container.outerWidth();
		$('#pb-navbar').slider({
			min: 0,
			max: itemsWidth,
			handle: '.slider',
			slide: function (event, ui) {
				ul.css('left', '-' + ui.value + 'px');
			},
			stop: function (event, ui) {
				ul.animate({ left: '-' + ui.value + 'px' }, 500);
			}
		});
*/		
		
/* Publication Sorting */
		$("#searchAuthors").keyup(function() {
			searchItems();										   
		});			
		$("#searchTitle").keyup(function() {
			searchItems();										   
		});			
		$("#sortDate").change(function() {
			searchItems();										   
		});			
		$("#searchID").keyup(function() {
			searchItems();										   
		});			
	});
	
	function searchItems() {
		var strA = $("#searchAuthors").val().toLowerCase();	
		var strT = $("#searchTitle").val().toLowerCase();
		var strD = $("#sortDate").val().toLowerCase();	
		var strI = $("#searchID").val().toLowerCase();	
		$("#content .pub-list li").each(function() {
			var authors = $(this).children('.pub-text').children('.authors').text().toLowerCase();
			var title = $(this).children('.pub-text').children('.title').text().toLowerCase() + $(this).children('.pub-text').children('.text').text().toLowerCase();
			var date = $(this).children('.pub-text').children('.date').text().toLowerCase();		
			var id = $(this).children('.pub-id').text().toLowerCase();	
			
			if(checkItem(strA, authors) && checkItem(strT, title) && checkDD(strD, date) && checkItem(strI, id))
			{
				$(this).show();	
			}
			else {
				$(this).hide();	
			}
		});
	}
	
	function checkItem(input, text) {
		if(input == "")
		{
			return true;
		}
		
		if(text.indexOf(input) >= 0)
		{
			return true;
		}
		else if(text.indexOf(input) < 0)
		{
			return false;
		}
	}
	
	function checkDD(input, text) {
		if(input == "all")
		{
			return true;
		}
		
		if(text.indexOf(input) >= 0)
		{
			return true;
		}
		else if(text.indexOf(input) < 0)
		{
			return false;
		}
	}
	
	function onBefore() {
		$(".img1").animate({ top: "200px", opacity: 0.0 }, 100, "easeInOutQuad" );
		$(".img2").animate({ top: "200px", opacity: 0.0 }, 50, "easeInOutQuad" );
	}

	function onAfter() {
		$(".img1").animate({ top: "0", opacity: 1.0}, 700, "easeInOutQuad" );
		$(".img2").animate({ top: "10px", opacity: 1.0 }, 900, "easeInOutQuad" );
	}
