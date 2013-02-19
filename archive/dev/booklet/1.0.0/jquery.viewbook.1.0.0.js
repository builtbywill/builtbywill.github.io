/*
 * jQuery viewbook plugin
 * Copyright (c) 2010 W. Grauvogel
 *
 * Version : 1.0.0
 *
 * Originally based on the work of:
 *	1) Charles Mangin (http://clickheredammit.com/pageflip/)
 */
;(function($) {
		   
$.fn.viewbook = function(options){
	
	var o = $.extend({}, $.fn.viewbook.defaults, options);
	
	return $(this).each(function()
	{
		var command, config, obj, id, i, target;
		
		//option type string - api call
		if(typeof options == 'string')
		{
			//check if viewbook has been initialized
			 if($(this).data('viewbook')){
				command = options.toLowerCase();
				obj = $.fn.viewbook.interfaces[$(this).data('id')];
				
				if(command == 'next'){ obj.next() }
				else if(command == 'prev'){ obj.prev() };
				
			 }
		}
		//option type number - api call		
		else if(typeof options == 'number')
		{
			//check if viewbook has been initialized
			 if($(this).data('viewbook')){
				target = options;
				obj = $.fn.viewbook.interfaces[$(this).data('id')];
				
				if(target % 2 != 0) {
					target-= 1;
				};
				
				obj.gotoPage(target);
			 }
			 
		}
		//else build new viewbook
		else
		{
			config = $.extend(true, {}, o);
	
			// Determine ID (Reuse array slots if possible)
			id = $.fn.viewbook.interfaces.length;
			for(i = 0; i < id; i++)
			{
			   if(typeof $.fn.viewbook.interfaces[i] == 'undefined'){ id = i; break; };
			};
	
			// Instantiate the viewbook
			obj = new viewbook($(this), config, id);
	
			// Add API references
			$.fn.viewbook.interfaces[id] = obj;
	
			//reset pages	
			obj.resetPages();
			obj.updateCtrls();
		}
	});
}


function viewbook(target, options, id){

	var self, opts, vb, 
		hash, i, busy,
		pages = new Array(), titles = new Array(), chapters = new Array(), types = new Array(),
		pN, p0, p1, p2, p3, p4, pNwrap, p0wrap, p1wrap, p2wrap, p3wrap, p4wrap, wraps, sF, sB,
		overlays, overlayN, overlayP, tabs, tabN, tabP, arrows, arrowN, arrowP, next, prev, ctrlsN, ctrlsP,
		menu, chapter, dd, ddUL, ddH, ddLI, ddA, ddT, ddC, ddCUL, ddCH, ddCLI, ddCA, ddCT
		;

	//VARS + STRUCTURE
	busy         = false;
	self         = this;
	self.options = options;
	self.id      = id;
	self.hash    = '';	
	opts         = self.options;
	
	//load viewbook pages into arrays
	vb = target.addClass('viewbook');
	vb.find('.vb-load').children().each(function(i){
		/*if($(this).children().length > 0){						   
			pages[i] = $(this).html();
		}else{
		}*/
		pages[i] = $(this);
		if($(this).attr('rel')){
			chapters[i] = $(this).attr('rel');
		}else{
			chapters[i] = "";
		}
		titles[i] = $(this).attr('title');
		types[i] = $(this).attr('class');
	});
	//fix for odd number, add blank page
	if((pages.length % 2) != 0){
		pages[pages.length] = '<div class="vb-page-blank"></div>';
		chapters[pages.length] = '';
		titles[pages.length] = '';
		types[pages.length] = '';
	}
	
	//store data for api calls
	vb.data('viewbook',true);
	vb.data('id', id);
	vb.data('total', pages.length);
	
	//build viewbook structure
	vb.prepend('<div class="vb-pN vb-page"><div class="vb-p-wrap"></div></div>'+
			   '<div class="vb-p1 vb-page"><div class="vb-p-wrap"></div></div>'+
			   '<div class="vb-p4 vb-page"><div class="vb-p-wrap"></div></div>'+
			   '<div class="vb-p2 vb-page"><div class="vb-p-wrap"></div></div>'+
			   '<div class="vb-p3 vb-page"><div class="vb-p-wrap"></div></div>'+
			   '<div class="vb-p0 vb-page"><div class="vb-p-wrap"></div></div>'+
			   '<div class="vb-overlay vb-overlay-prev vb-prev" title="Previous Page"></div>'+
			   '<div class="vb-overlay vb-overlay-next vb-next" title="Next Page"></div>');
	
	//save structure elems to vars
	pN     = vb.find('.vb-pN');
	p0     = vb.find('.vb-p0');
	p1     = vb.find('.vb-p1');
	p2     = vb.find('.vb-p2');
	p3     = vb.find('.vb-p3');
	p4     = vb.find('.vb-p4');
	pNwrap = vb.find('.vb-pN .vb-p-wrap');
	p0wrap = vb.find('.vb-p0 .vb-p-wrap');
	p1wrap = vb.find('.vb-p1 .vb-p-wrap');
	p2wrap = vb.find('.vb-p2 .vb-p-wrap');
	p3wrap = vb.find('.vb-p3 .vb-p-wrap');
	p4wrap = vb.find('.vb-p4 .vb-p-wrap');
	wraps  = vb.find('.vb-p-wrap');
	sF = sB = null;
	
	//overlay controls
	overlayN  = vb.find('.vb-overlay-next');
	overlayP  = vb.find('.vb-overlay-prev');
	overlays  = vb.find('.vb-overlay');
	
//OPTIONS SETUP
	
	//add shadows
	if(opts.shadows){
		sF = $('<div class="vb-shadow-f"></div>').appendTo(p3);
		sB = $('<div class="vb-shadow-b"></div>').appendTo(p0);
	}
	//set width + height
	if(!opts.width){
		opts.width = vb.width();
	}
	if(!opts.height){
		opts.height = vb.height();
	}
	vb.width(opts.width);
	vb.height(opts.height);
	
	//save page sizes
	opts.pWidth  = opts.width/2;
	opts.pWidthN = '-'+(opts.width/2)+'px';
	opts.pWidthH = opts.width/4;
	opts.pHeight = opts.height;
	opts.pTotal  = pages.length;
	opts.speedH  = opts.speed/2;
	
	//set startingPage
	if(isNaN(opts.startingPage) || opts.startingPage > opts.pTotal || opts.startingPage <= 0){
		opts.curr = 0;
	}else{
		if((opts.startingPage % 2) != 0){opts.startingPage--};
		opts.curr = opts.startingPage;
	}
	
	//set viewbook opts.name
	if(opts.name){
		document.title = opts.name;
	}else{
		opts.name = document.title;
	}
	
	//save shadow widths for anim
	if(opts.shadows){
		opts.shadowTopFwdWidth  = '-'+opts.shadowTopFwdWidth+'px';
		opts.shadowTopBackWidth = '-'+opts.shadowTopBackWidth+'px';
	}
	
	//setup menu
	if(opts.menu){
		menu = $(opts.menu).addClass('vb-menu');

		//setup page selctor
		if(opts.pageSelector){
			dd = $('<div class="vb-selector vb-selector-page"><span class="vb-current">'+ (opts.curr+1) +'-'+ (opts.curr+2) +'</span></div>').appendTo(menu);
			ddUL = $('<ul></ul>').appendTo(dd).empty().css('height','auto');

			for(i=0; i < opts.pTotal; i+=2){
				ddLI = $('<li><a href="#/page/'+ (i+1) +'" id="selector-page-'+i+'"><span class="vb-text">'+ titles[i] +'</span><span class="vb-num">'+ (i+1) +' - '+ (i+2) +'</span></a></li>').appendTo(ddUL);
				ddA = ddLI.find('a');
				if(!opts.hash){
					ddA.click(function(){
						ddT = parseInt($(this).attr('id').replace('selector-page-',''));
						self.gotoPage(ddT);
						return false;
					});
				}
			}
			
			ddH = ddUL.height();
			ddUL.css({'height':0, 'padding-bottom':0});
			
			dd.unbind('hover').hover(function(){
				ddUL.stop().animate({height:ddH, paddingBottom:10}, 500);
			},function(){
				ddUL.stop().animate({height:0, paddingBottom:0}, 500);
			});
		}
		
		//setup chapter selctor
		if(opts.chapterSelector){
			
			chapter = chapters[opts.curr];
			if(chapter == ""){ chapter = chapters[opts.curr+1]; }
			
			ddC = $('<div class="vb-selector vb-selector-chapter"><span class="vb-current">'+chapter+'</span></div>').appendTo(menu);
			ddCUL = $('<ul></ul>').appendTo(ddC).empty().css('height','auto');

			for(i=0; i < opts.pTotal; i+=1){
				if(chapters[i] != ""){
					ddCLI = $('<li><a href="#/page/'+ (i+1) +'" id="selector-page-'+i+'"><span class="vb-text">'+ chapters[i] +'</span></a></li>').appendTo(ddCUL);
					ddCA = ddCLI.find('a');
					if(!opts.hash){
						ddCA.click(function(){
							ddCT = parseInt($(this).attr('id').replace('selector-page-',''));
							self.gotoPage(ddCT);
							return false;
						});
					}
				}
			}
			
			ddCH = ddCUL.height();
			ddCUL.css({'height':0, 'padding-bottom':0});
			
			ddC.unbind('hover').hover(function(){
				ddCUL.stop().animate({height:ddCH, paddingBottom:10}, 500);
			},function(){
				ddCUL.stop().animate({height:0, paddingBottom:0}, 500);
			});
		}
	}	
	
	// API METHODS
	$.extend(self,
	{
		next : function(){
			//check for end of content array					   
			if(opts.curr+2 < opts.pTotal && !busy){
				busy = true;
				//inc counter
				opts.curr+=2;
				opts.before.call(self);
				self.updatePager();
				self.updateCtrls();
				
				updateHash(opts.curr+1, opts);
				
				//hide p2 as p3 moves across it
				p2.animate({width:0}, opts.speedH, opts.easeIn);
				
				if(opts.shadows){
					//check for opacity support -> animate shadow overlay on moving slide
					if($.support.opacity){
						sF.animate({opacity:1}, opts.speedH, opts.easeIn)
								       .animate({opacity:0}, opts.speedH, opts.easeOut);
					}else{
						sF.animate({right:opts.shadowTopFwdWidth}, opts.speed, opts.easeIn);
					}
				}
				//animate p3 from right to left (left: movement, width: reveal slide, paddingLeft: shadow underneath)
				//call setuppages at end of animation to reset pages
				p3.animate({left:opts.pWidthH, width:opts.pWidthH, paddingLeft: opts.shadowBtmWidth}, opts.speedH, opts.easeIn)
						  .animate({left:0, width:opts.pWidth, paddingLeft:0}, opts.speedH);
				p3wrap.animate({left:opts.shadowBtmWidth}, opts.speedH, opts.easeIn)
							.animate({left:0}, opts.speedH, opts.easeOut, function(){
																				self.resetPages();
																				self.updatePager();
																				self.updateCtrls();
																				opts.after.call(self);
																				busy = false;
																			});
			}
		},
		prev : function(){
			//check for end of content array					   
			if(opts.curr-2 >= 0 && !busy){
				busy = true;
				//dec counter
				opts.curr-=2;
				opts.before.call(self);
				self.updatePager();
				self.updateCtrls();
				
				updateHash(opts.curr+1, opts);
		
				//reveal pN1
				pN.show();
				//hide p1 as p0 moves across it
				p1.animate({left:opts.pWidth, width:0}, opts.speed, opts.easing);
				p1wrap.animate({left:opts.pWidthN}, opts.speed, opts.easing);
				
				if(opts.shadows){
					//check for opacity support -> animate shadow overlay on moving slide
					if($.support.opacity){
						sB.animate({opacity:1}, opts.speedH, opts.easeIn)
						  .animate({opacity:0}, opts.speedH, opts.easeOut);
					}else{
						sB.animate({left:opts.shadowTopBackWidth}, opts.speed, opts.easeIn);
					}
				}
				//animate p0 from left to right (left: movement, width: reveal slide (half, full))
				p0.animate({left:opts.pWidthH, width:opts.pWidthH}, opts.speedH, opts.easeIn)
						    .animate({left:opts.pWidth, width:opts.pWidth}, opts.speedH, opts.easeOut);
				//animate .wrapper content with p0 to keep content right aligned throughout
				//call setuppages at end of animation to reset pages
				p0wrap.animate({right:opts.shadowBtmWidth}, opts.speedH, opts.easeIn)
							.animate({right:0}, opts.speedH, opts.easeOut, function(){
																				self.resetPages();
																				self.updatePager();
																				self.updateCtrls();
																				opts.after.call(self);
																				busy = false;
																			});
			}
		},
		gotoPage : function(num){
			if(num > opts.curr && num < opts.pTotal && num >= 0 && !busy){
				busy = true;
				//inc counter
				opts.curr = num;
				opts.before.call(self);
				self.updatePager();
				self.updateCtrls();
				
				p3wrap.html(pages[opts.curr]);
				p4wrap.html(pages[opts.curr+1]);
				if(opts.pageNumbers){
					p3wrap.append('<div class="vb-counter">'+(opts.curr+1)+'</div>');
					p4wrap.append('<div class="vb-counter">'+(opts.curr+2)+'</div>');
				}
				
				//hide p2 as p3 moves across it
				p2.animate({width:0}, opts.speedH, opts.easeIn);
				
				if(opts.shadows){
					//check for opacity support -> animate shadow overlay on moving slide
					if($.support.opacity){
						sF.animate({opacity:1}, opts.speedH, opts.easeIn)
								  .animate({opacity:0}, opts.speedH, opts.easeOut);
					}else{
						sF.animate({right:opts.shadowTopFwdWidth}, opts.speed, opts.easeIn);
					}
				}
				//animate p3 from right to left (left: movement, width: reveal slide, paddingLeft: shadow underneath)
				//call setuppages at end of animation to reset pages
				p3.animate({left:opts.pWidthH, width:opts.pWidthH, paddingLeft: opts.shadowBtmWidth}, opts.speedH, opts.easeIn)
						  .animate({left:0, width:opts.pWidth, paddingLeft:0}, opts.speedH);
				p3wrap.animate({left:opts.shadowBtmWidth}, opts.speedH, opts.easeIn)
							.animate({left:0}, opts.speedH, opts.easeOut, function(){
																				self.resetPages();
																				self.updatePager();
																				self.updateCtrls();
																				opts.after.call(self);
																				busy = false;
																			});
			}else if(num < opts.curr && num < opts.pTotal && num >= 0 && !busy){
				busy = true;
				//dec counter
				opts.curr = num;
				opts.before.call(self);
				self.updatePager();
				self.updateCtrls();
				
				pNwrap.html(pages[opts.curr]);
				p0wrap.html(pages[opts.curr+1]);
				if(opts.pageNumbers){
					pNwrap.append('<div class="vb-counter">'+(opts.curr+1)+'</div>');
					p0wrap.append('<div class="vb-counter">'+(opts.curr+2)+'</div>');
				}
				
				//reveal pN
				pN.show();
				//hide p1 as p0 moves across it
				p1.animate({left:opts.pWidth, width:0}, opts.speed, opts.easing);
				p1wrap.animate({left:opts.pWidthN}, opts.speed, opts.easing);
				
				if(opts.shadows){
					//check for opacity support -> animate shadow overlay on moving slide
					if($.support.opacity){
						sB.animate({opacity:1}, opts.speedH, opts.easeIn)
						  .animate({opacity:0}, opts.speedH, opts.easeOut);
					}else{
						sB.animate({left:opts.shadowTopBackWidth}, opts.speed, opts.easeIn);
					}
				}
				//animate p0 from left to right (right: movement, width: reveal slide, paddingLeft: shadow underneath)
				p0.animate({left:opts.pWidthH, width:opts.pWidthH}, opts.speedH, opts.easeIn)
						  .animate({left:opts.pWidth, width:opts.pWidth}, opts.speedH, opts.easeOut);
				//animate .wrapper content with p0 to keep content right aligned throughout
				//call setuppages at end of animation to reset pages
				p0wrap.animate({right:opts.shadowBtmWidth}, opts.speedH,opts. easeIn)
					  .animate({right:0}, opts.speedH, opts.easeOut, function(){
																				self.resetPages();
																				self.updatePager();
																				self.updateCtrls();
																				opts.after.call(self);
																				busy = false;
																			});
			}
		},
		resetPages: function(){
			wraps.css({'width':opts.pWidth-20, 'height':opts.pHeight-20});
			//p1
			p1wrap.html(pages[opts.curr]).css({'left':0, 'opacity':1});
			p1.css({'left':0,'width':opts.pWidth, 'height':opts.pHeight});
			//p2
			p2wrap.html(pages[opts.curr+1]);
			p2.css({'left':opts.pWidth, 'width':opts.pWidth, 'opacity':1, 'height':opts.pHeight});
			//pN1
			pNwrap.html(pages[opts.curr-2]);
			pN.css({'left':0, 'width':opts.pWidth, 'height':opts.pHeight}).hide();
			//p0
			p0wrap.html(pages[opts.curr-1]);
			p0.css({'left':0, 'width':0, 'height':opts.pHeight});
			//p3
			p3wrap.html(pages[opts.curr+2]);
			p3.css({'left':opts.pWidth*2, 'width':0, 'height':opts.pHeight});
			//p4
			p4wrap.html(pages[opts.curr+3]);
			p4.css({'left':opts.pWidth, 'width':opts.pWidth, 'height':opts.pHeight});
			
			if(opts.shadows){
				//reset topShadows to original positions
				sF.css({'right':0,'width':opts.pWidth, 'height':opts.pHeight});
				sB.css({'left':0,'width':opts.pWidth, 'height':opts.pHeight});
			}
			if(opts.pageNumbers){
				p1wrap.append('<div class="vb-counter">'+(opts.curr+1)+'</div>');
				p2wrap.append('<div class="vb-counter">'+(opts.curr+2)+'</div>');
				pNwrap.append('<div class="vb-counter">'+(opts.curr-1)+'</div>');
				p0wrap.append('<div class="vb-counter">'+(opts.curr)+'</div>');
				p3wrap.append('<div class="vb-counter">'+(opts.curr+3)+'</div>');
				p4wrap.append('<div class="vb-counter">'+(opts.curr+4)+'</div>');
			}
		},
		updateCtrls: function(){
			//update ctrls
			if(opts.overlays || opts.tabs || opts.arrows){
				if(opts.curr < opts.pTotal-2){
					ctrlsN.fadeIn('fast').css('cursor',opts.cursor);
				}else{
					ctrlsN.fadeOut('fast').css('cursor','default'); 
				}
				
				if(opts.curr >= 2 && opts.curr != 0){           
					ctrlsP.fadeIn('fast').css('cursor',opts.cursor);
				}else{
					ctrlsP.fadeOut('fast').css('cursor','default'); 
				}
			}
		},
		updatePager: function(){
			if(opts.pageSelector){
				$(opts.menu+' .vb-selector-page .vb-current').text((opts.curr+1) + ' - ' + (opts.curr+2));
			}
			if(opts.chapterSelector && chapters[opts.curr] != ""){
				$(opts.menu+' .vb-selector-chapter .vb-current').text(chapters[opts.curr]);
			}
		},
		setupHash: function(){
			hash = getHashNum();
			
			if(!isNaN(hash) && hash <= opts.pTotal-1 && hash >= 0 && hash != ''){
				if((hash % 2) != 0){
					hash--;
				}
				opts.curr = hash;
			}else{
				updateHash(opts.curr+1, opts);
			}
			
			self.hash = hash;
		},
		pollHash: function(){
			hash = getHashNum();
			//check page num
			if(!isNaN(hash) && hash <= opts.pTotal-1 && hash >= 0){
				if(hash != opts.curr && hash.toString()!=self.hash){
					if((hash % 2) != 0){hash--};
					
					document.title = opts.name + " - Page "+ (hash+1);
					
					if(!busy){
						self.gotoPage(hash);
						self.hash = hash;
					}
				}
			}
		}
	});	
	
	//add prev next user defined controls
	if(opts.next){
		next = $(opts.next);	
		next.click(function(e){e.preventDefault(); self.next();});
	}
	if(opts.prev){
		prev = $(opts.prev);	
		prev.click(function(e){e.preventDefault(); self.prev();});
	}
	
	//add sides actions
	if(!opts.overlays){
		overlays.remove();
	}else{
		if ($.browser.msie) {
			overlays.css({'background':'#fff','filter':'progid:DXImageTransform.Microsoft.Alpha(opacity=0) !important'});
		}
	}
	
	//add tabs
	if(opts.tabs){
		vb.append('<div class="vb-tab vb-tab-prev vb-prev" title="Previous Page">Previous</div>');
		vb.append('<div class="vb-tab vb-tab-next vb-next" title="Next Page">Next</div>');
		
		tabN = vb.find('.vb-tab-next');
		tabP = vb.find('.vb-tab-prev');
		tabs = vb.find('.vb-tab');
		
		if(opts.tabWidth){
			tabs.width(opts.tabWidth);
		}
		if(opts.tabHeight){
			tabs.height(opts.tabHeight);
		}		
		
		tabs.css({'top': '-'+tabN.outerHeight()+'px'});
		vb.css({'marginTop': tabN.outerHeight()});
	}else{
		vb.css({'marginTop': 0});
	}
	
	//add arrows
	if(opts.arrows){
		vb.append('<div class="vb-arrow vb-arrow-prev vb-prev" title="Previous Page"><div>Previous</div></div>');
		vb.append('<div class="vb-arrow vb-arrow-next vb-next" title="Next Page"><div>Next</div></div>');
		
		arrowN = vb.find('.vb-arrow-next');
		arrowP = vb.find('.vb-arrow-prev');
		arrows = vb.find('.vb-arrow');
	}
	
	//save all "vb-prev" and "vb-next" controls
	ctrlsN = vb.find('.vb-next');
	ctrlsP = vb.find('.vb-prev');
	//add click actions
	ctrlsN.click(function(e){e.preventDefault(); self.next();});
	ctrlsP.click(function(e){e.preventDefault(); self.prev();});
	
	//arrow animation	
	if(opts.arrows){
		if($.support.opacity){
			ctrlsN.hover(
				function(){arrowN.find('div').stop().fadeTo('fast', 1);},
				function(){arrowN.find('div').stop().fadeTo('fast', 0);					
			});
			ctrlsP.hover(
				function(){arrowP.find('div').stop().fadeTo('fast', 1);},
				function(){arrowP.find('div').stop().fadeTo('fast', 0);					
			});
		}else{
			ctrlsN.hover(
				function(){arrowN.find('div').show();},
				function(){arrowN.find('div').hide();					
			});
			ctrlsP.hover(
				function(){arrowP.find('div').show();},
				function(){arrowP.find('div').hide();					
			});
		}
	}

	//keyboard ctrls
	if(opts.keyboard){
		//keyboard ctrls
		$(document).keyup(function(event){
			if(event.keyCode == 37){self.prev();}
			else if(event.keyCode == 39){self.next();}
		});
	}
		
	//hash ctrls
	if(opts.hash){
		self.setupHash();
		clearInterval();
		setInterval(function(){self.pollHash()}, 250);
	}
	
	//go to current page (first page OR startingPage)
	self.gotoPage(opts.curr);
	
}

//get page number from hash tag, last element
function getHashNum(){
	var hash = window.location.hash.split('/');
	if(hash.length > 1){
		return parseInt(hash[2])-1;
	}else{
		return '';
	}
}

//get hash item by /placement/
function getHash(x){
	x = x || 0;
	var hash = window.location.hash.split('/');
	if(hash.length > 0){
		return hash[x];
	}else{
		return '';
	}
}

//set the hash
function updateHash(hash, opts){
	if(opts.hash){
		window.location.hash = "/page/" + hash;
	}
}

//define empty array to hold API references
$.fn.viewbook.interfaces = [];

//define default options
$.fn.viewbook.defaults = {
	name:               null,                            // name of the viewbook to display in the document title bar
	width:              600,                             // container width
	height:             400,                             // container height
	speed:              1000,                            // speed of the transition between pages
	startingPage:       0,                               // index of the first page to be displayed
	easing:             'easeInOutQuad',                 // easing method for complete transition
	easeIn:             'easeInQuad',                    // easing method for first half of transition
	easeOut:            'easeOutQuad',                   // easing method for second half of transition
	overlays:           true,                            // enables navigation using a page sized overlay, when enabled links inside the content will not be clickable
	tabs:               true,                            // adds tabs along the top of the pages
	tabWidth:           60,                              // set the width of the tabs
	tabHeight:          20,                              // set the height of the tabs
	arrows:             false,                           // adds arrows overlayed over the book edges
	cursor:             'pointer',                       // cursor css setting for side bar areas
	next:               null,                            // selector for element to use as click trigger for next page
	prev:               null,                            // selector for element to use as click trigger for previous page
	hash:               false,                           // enables navigation using a hash string, ex: #/page/1 for page 1, will affect all viewbooks with 'hash' enabled
	keyboard:           true,                            // enables navigation with arrow keys (left: previous, right: next)
	menu:               null,                            // selector for element to use as the menu area, required for 'pageSelector'
	pageSelector:       false,                           // enables navigation with a dropdown menu of pages, requires 'menu'
	chapterSelector:    false,                           // enables navigation with a dropdown menu of chapters, determined by the "rel" attribute, requires 'menu'
	pageNumbers:        true,                            // display page numbers on each page
	shadows:            true,                            // display shadows on page animations
	shadowTopFwdWidth:  166,                             // shadow width for top forward anim
	shadowTopBackWidth: 166,                             // shadow width for top back anim
	shadowBtmWidth:     50,                              // shadow width for bottom shadow
	before:             function(){},                    // callback invoked before each page turn animation
	after:              function(){}                     // callback invoked after each page turn animation
}
	
})(jQuery);