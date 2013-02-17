/*
 * jQuery viewbook plugin
 * Copyright (c) 2010 W. Grauvogel (http://builtbywill.com/)
 *
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Version : 1.0.2
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
		hash, i, j, p, busy,
		pages = new Array(), titles = new Array(), chapters = new Array(),
		pagesRTL = new Array(), titlesRTL = new Array(), chaptersRTL = new Array(),
		pN, p0, p1, p2, p3, p4, pNwrap, p0wrap, p1wrap, p2wrap, p3wrap, p4wrap, wraps, sF, sB,
		overlays, overlayN, overlayP, tabs, tabN, tabP, arrows, arrowN, arrowP, next, prev, ctrlsN, ctrlsP,
		menu, chapter, dd, ddUL, ddH, ddLI, ddA, ddT, ddC, ddCUL, ddCH, ddCLI, ddCA, ddCT,
		empty = '<div class="vb-page-empty"></div>', blank = '<div class="vb-page-blank"></div>'
		;

	//VARS + STRUCTURE
	busy         = false;
	hovered      = false;
	self         = this;
	self.options = options;
	self.id      = id;
	self.hash    = '';	
	opts         = self.options;
	
	//load viewbook pages into arrays
	vb = target.addClass('viewbook');
	vb.find('.vb-load').children().each(function(i){
		if($(this).children().length > 0){						   
			//if page has children, save them to array
			pages[i] = $(this).html();
		}else{
			//otherwise save the element itself
			pages[i] = $(this);
		}
		
		//save chapter title
		if($(this).attr('rel')){
			chapters[i] = $(this).attr('rel');
		}else{
			chapters[i] = "";
		}
		
		//save page title
		titles[i] = $(this).attr('title');
	});
	
	//remove source content
	vb.find('.vb-load').remove();
	
	//fix for odd number, add blank page
	if((pages.length % 2) != 0){
		//if book is closed and using covers, add page before back cover
		if(opts.closed && opts.covers){
			//copy current last page to the end
			pages[pages.length] = pages[pages.length-1];
			chapters[pages.length] = chapters[pages.length-1];
			titles[pages.length] = titles[pages.length-1];
			//add blank page
			pages[pages.length-2] = blank;
			chapters[pages.length-2] = '';
			titles[pages.length-2] = '';
		}else{
			//add blank page
			pages[pages.length] = blank;
			chapters[pages.length] = '';
			titles[pages.length] = '';
		}
	}
	
	//add empty pages to beginning and end if book is closed
	if(opts.closed){
		
		//add empty page
		pagesRTL[0] = empty;
		chaptersRTL[0] = opts.closedFrontChapter || "Beginning of Book";
		titlesRTL[0] = opts.closedFrontTitle || "Beginning";
		
		for(i=1;i<pages.length+1;i++){
			pagesRTL[i] = pages[i-1];
			chaptersRTL[i] = chapters[i-1];
			titlesRTL[i] = titles[i-1];
		}
		chaptersRTL[chaptersRTL.length-1] = opts.closedBackChapter || "End of Book";
		titlesRTL[titlesRTL.length-1] = opts.closedBackTitle || "End";
		pagesRTL[pagesRTL.length] = empty;
		chaptersRTL[chaptersRTL.length] = "";
		titlesRTL[titlesRTL.length] = "";
		
		pages = pagesRTL;
		chapters = chaptersRTL;
		titles = titlesRTL;
	}
	
	//store data for api calls
	vb.data('viewbook',true);
	vb.data('id', id);
	vb.data('total', pages.length);
	
	//build viewbook structure
	vb.prepend('<div class="vb-pN vb-page"><div class="vb-wrap vb-wrap-left"></div></div>'+
			   '<div class="vb-p1 vb-page"><div class="vb-wrap vb-wrap-left"></div></div>'+
			   '<div class="vb-p4 vb-page"><div class="vb-wrap vb-wrap-right"></div></div>'+
			   '<div class="vb-p2 vb-page"><div class="vb-wrap vb-wrap-right"></div></div>'+
			   '<div class="vb-p3 vb-page"><div class="vb-wrap vb-wrap-left"></div></div>'+
			   '<div class="vb-p0 vb-page"><div class="vb-wrap vb-wrap-right"></div></div>'+
			   '<div class="vb-overlay vb-overlay-prev vb-prev" title="Previous Page"></div>'+
			   '<div class="vb-overlay vb-overlay-next vb-next" title="Next Page"></div>');
	
	//save structure elems to vars
	pN     = vb.find('.vb-pN');
	p0     = vb.find('.vb-p0');
	p1     = vb.find('.vb-p1');
	p2     = vb.find('.vb-p2');
	p3     = vb.find('.vb-p3');
	p4     = vb.find('.vb-p4');
	pNwrap = vb.find('.vb-pN .vb-wrap');
	p0wrap = vb.find('.vb-p0 .vb-wrap');
	p1wrap = vb.find('.vb-p1 .vb-wrap');
	p2wrap = vb.find('.vb-p2 .vb-wrap');
	p3wrap = vb.find('.vb-p3 .vb-wrap');
	p4wrap = vb.find('.vb-p4 .vb-wrap');
	wraps  = vb.find('.vb-wrap');
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
	
	//save page sizes and other vars
	opts.pWidth  = opts.width/2;
	opts.pWidthN = '-'+(opts.width/2)+'px';
	opts.pWidthH = opts.width/4;
	opts.pHeight = opts.height;
	opts.pTotal  = pages.length;
	opts.speedH  = opts.speed/2;
	
	//check reading direction
	if(opts.direction == 'RTL'){
		j = 0, pagesRTL = new Array(), titlesRTL = new Array(), chaptersRTL = new Array();
		for(i=opts.pTotal-1;i>=0;i--){
			pagesRTL[j] = pages[i];
			chaptersRTL[j] = chapters[i];
			titlesRTL[j] = titles[i];
			j++;
		}
		pages = pagesRTL;
		chapters = chaptersRTL;
		titles = titlesRTL;
	}
	
	//set startingPage
	if(opts.direction == 'LTR'){
		opts.curr = 0;
	}else if(opts.direction == 'RTL'){
		opts.curr = opts.pTotal-2;
	}
	if(!isNaN(opts.startingPage) && opts.startingPage <= opts.pTotal && opts.startingPage > 0){
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
		p = opts.curr;		
		//setup page selctor
		if(opts.pageSelector){
			//add selector
			dd = $('<div class="vb-selector vb-selector-page"><span class="vb-current">'+ (p+1) +' - '+ (p+2) +'</span></div>').appendTo(menu);
			ddUL = $('<ul></ul>').appendTo(dd).empty().css('height','auto');

			//loop through all pages
			for(i=0; i < opts.pTotal; i+=2){
				j = i;
				//setup display nums for normal view
				nums = (j+1) +'-'+ (j+2);
				if(opts.closed){
					j--;
					if(i==0){nums='1'}
					else if(i==opts.pTotal-2){nums=opts.pTotal-2}
					else {nums = (j+1) +'-'+ (j+2);}
					
					if(opts.covers){
						j--;
						if(i==0){nums=''}
						else if(i==opts.pTotal-2){nums=''}
						else {nums = (j+1) +'-'+ (j+2);}
					}
				}
				
				if(opts.direction == 'RTL'){
					nums = (Math.abs(j - opts.pTotal)-1) +' - '+ ((Math.abs(j - opts.pTotal)));
					if(opts.closed){
						if(i==opts.pTotal-2){nums='1'}
						else if(i==0){nums=opts.pTotal-2}
						else{nums = (Math.abs(j - opts.pTotal)-3) +' - '+ ((Math.abs(j - opts.pTotal)-2));}
						
						if(opts.covers){
							if(i==opts.pTotal-2){nums=''}
							else if(i==0){nums=''}
							else{nums = (Math.abs(j - opts.pTotal)-5) +' - '+ ((Math.abs(j - opts.pTotal)-4));}
						}
					}
					dd.find('.vb-current').text(nums);
					ddLI = $('<li><a href="#/page/'+ (i+1) +'" id="selector-page-'+i+'"><span class="vb-text">'+ titles[i+1] +'</span><span class="vb-num">'+ nums +'</span></a></li>').prependTo(ddUL);
				}else{
					if(i==0){dd.find('.vb-current').text(nums);}
					ddLI = $('<li><a href="#/page/'+ (i+1) +'" id="selector-page-'+i+'"><span class="vb-text">'+ titles[i] +'</span><span class="vb-num">'+ nums +'</span></a></li>').appendTo(ddUL);
				}
				
				ddA = ddLI.find('a');
				if(!opts.hash){
					ddA.click(function(){
						if(opts.direction == 'RTL'){dd.find('.vb-current').text($(this).find('.vb-num').text());}
						ddT = parseInt($(this).attr('id').replace('selector-page-',''));
						self.gotoPage(ddT);
						return false;
					});
				}
			}
			
			//set height
			ddH = ddUL.height();
			ddUL.css({'height':0, 'padding-bottom':0});
			
			//add hover effects
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
				if(chapters[i] != "" && typeof chapters[i] != "undefined"){
					if(opts.direction == 'RTL'){
						j = i;
						if(j % 2 != 0){j--;}
						ddC.find('.vb-current').text(chapters[i]);
						ddCLI = $('<li><a href="#/page/'+ (j+1) +'" id="selector-page-'+(j)+'"><span class="vb-text">'+ chapters[i] +'</span></a></li>').prependTo(ddCUL);
					}else{
						ddCLI = $('<li><a href="#/page/'+ (i+1) +'" id="selector-page-'+i+'"><span class="vb-text">'+ chapters[i] +'</span></a></li>').appendTo(ddCUL);
					}
					ddCA = ddCLI.find('a');
					if(!opts.hash){
						ddCA.click(function(){
							if(opts.direction == 'RTL'){ddC.find('.vb-current').text($(this).find('.vb-text').text());}
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
			if(!busy){
				self.gotoPage(opts.curr+2);
			}
		},
		prev : function(){
			if(!busy){
				self.gotoPage(opts.curr-2);
			}
		},
		gotoPage : function(num){
			//moving forward (increasing number)
			if(num > opts.curr && num < opts.pTotal && num >= 0 && !busy){
				self.updateBefore(num);
				self.initAnim(p4wrap, p3wrap, true, sF);

				//hide p2 as p3 moves across it
				p2.stop().animate({width:0}, opts.speedH, opts.easeIn);
				//animate p3 from right to left (left: movement, width: reveal slide, paddingLeft: shadow underneath)
				//call setuppages at end of animation to reset pages
				p3.stop().animate({left:opts.pWidthH, width:opts.pWidthH, paddingLeft: opts.shadowBtmWidth}, opts.speedH, opts.easeIn)
				  .animate({left:0, width:opts.pWidth, paddingLeft:0}, opts.speedH);
				p3wrap.animate({left:opts.shadowBtmWidth}, opts.speedH, opts.easeIn)
					  .animate({left:0}, opts.speedH, opts.easeOut, function(){self.updateAfter()});
			//moving backward (decreasing number)
			}else if(num < opts.curr && num < opts.pTotal && num >= 0 && !busy){
				self.updateBefore(num);
				self.initAnim(pNwrap, p0wrap, false, sB);
				
				//hide p1 as p0 moves across it
				p1.animate({left:opts.pWidth, width:0}, opts.speed, opts.easing);
				p1wrap.animate({left:opts.pWidthN}, opts.speed, opts.easing);
				//animate p0 from left to right (right: movement, width: reveal slide, paddingLeft: shadow underneath)
				p0.animate({left:opts.pWidthH, width:opts.pWidthH}, opts.speedH, opts.easeIn)
				  .animate({left:opts.pWidth, width:opts.pWidth}, opts.speedH, opts.easeOut);
				//animate .wrapper content with p0 to keep content right aligned throughout
				//call setuppages at end of animation to reset pages
				p0wrap.animate({right:opts.shadowBtmWidth}, opts.speedH,opts. easeIn)
					  .animate({right:0}, opts.speedH, opts.easeOut, function(){self.updateAfter()});
			}
		},
		resetPages: function(){
			//vb-wrap
			wraps.css({'width':opts.pWidth-(opts.pagePadding*2), 'height':opts.pHeight-(opts.pagePadding*2), 'padding': opts.pagePadding});
			//p1
			p1wrap.html(pages[opts.curr]).css({'left':0, 'opacity':1});
			p1.css({'left':0,'width':opts.pWidth, 'height':opts.pHeight});			
			//p2
			p2wrap.html(pages[opts.curr+1]);
			p2.css({'left':opts.pWidth, 'width':opts.pWidth, 'opacity':1, 'height':opts.pHeight});
			//pN1
			pNwrap.html(pages[opts.curr-2]);
			pN.css({'left':0, 'width':opts.pWidth, 'height':opts.pHeight});
			//p0
			p0wrap.html(pages[opts.curr-1]);
			p0.css({'left':0, 'width':0, 'height':opts.pHeight});
			//p3
			p3wrap.html(pages[opts.curr+2]);
			p3.stop().css({'left':opts.pWidth*2, 'width':0, 'height':opts.pHeight, paddingLeft:0});
			//p4
			p4wrap.html(pages[opts.curr+3]);
			p4.css({'left':opts.pWidth, 'width':opts.pWidth, 'height':opts.pHeight});
			
			if(opts.shadows){
				//reset topShadows to original positions
				sF.css({'right':0,'width':opts.pWidth, 'height':opts.pHeight});
				sB.css({'left':0,'width':opts.pWidth, 'height':opts.pHeight});
			}
			
			//reset styles
			p1wrap.attr('class','vb-wrap vb-wrap-left');
			p2wrap.attr('class','vb-wrap vb-wrap-right');
			
			//closed book options
			if(opts.closed && opts.curr == 0){
				pN.hide();
				p1wrap.attr('class','vb-wrap');
				if(opts.covers){p2wrap.attr('class','vb-wrap vb-page-cover');}
			}else if(opts.closed && opts.curr != 0 && opts.curr < opts.pTotal-2){
				pN.show();
				p1wrap.attr('class','vb-wrap vb-wrap-left');
			}
			if(opts.closed && opts.curr >= opts.pTotal-2){
				p4.hide();
				p2wrap.attr('class','vb-wrap');
				if(opts.covers){p1wrap.attr('class','vb-wrap vb-page-cover');}
			}else if(opts.closed && opts.curr < opts.pTotal-2 && opts.curr > 0){
				p4.show();
				p2wrap.attr('class','vb-wrap vb-wrap-right');
			}
			
			//update current page pagenumbers
			if(opts.pageNumbers){
				if(opts.direction == 'LTR'){
					p = opts.curr + 1;
					if(!opts.closed){
						addNum(p1wrap, p);
						addNum(p2wrap, p+1);
					}else if(!opts.covers){
						if(opts.curr != 0){
							addNum(p1wrap, p-1);
						}
						if(opts.curr < opts.pTotal-2){
							addNum(p2wrap, p);
						}
					}else if(opts.curr != 0 && opts.curr < opts.pTotal-2){
						addNum(p1wrap, p-2);
						addNum(p2wrap, p-1);
					}
				}else if(opts.direction == 'RTL'){
					p = Math.abs((opts.pTotal-1) - opts.curr); 
					if(!opts.closed){
						addNum(p1wrap, p+1);
						addNum(p2wrap, p);
					}else if(!opts.covers){
						if(opts.curr != 0){
							addNum(p1wrap, p);
						}
						if(opts.curr < opts.pTotal-2){
							addNum(p2wrap, p-1);
						}
					}else if(opts.curr != 0 && opts.curr < opts.pTotal-2){
						addNum(p1wrap, p-1);
						addNum(p2wrap, p-2);
					}
				}
			}
		},
		initAnim: function(wrap1, wrap2, inc, shadow){
			p = opts.curr;
			if(opts.direction == 'RTL'){
				p = Math.abs((opts.pTotal-1) - opts.curr) - 1;
			}
			
			//setup content
			if(inc){
				wrap1.html(pages[opts.curr+1]);
				wrap2.html(pages[opts.curr]);
				if(opts.direction == 'RTL'){
					i = wrap2;
					wrap2 = wrap1;
					wrap1 = i;
				}
			}else{
				wrap1.html(pages[opts.curr]);
				wrap2.html(pages[opts.curr+1]);
				if(opts.direction == 'LTR'){
					i = wrap2;
					wrap2 = wrap1;
					wrap1 = i;
				}
			}
			
			//reset styles
			p0wrap.attr('class','vb-wrap vb-wrap-right');
			p3wrap.attr('class','vb-wrap vb-wrap-left');
			
			//updates if moving to start and end of book
			if(opts.closed){
				if(!inc && opts.curr == 0){
					pN.hide();
					if(opts.covers){p0wrap.attr('class','vb-wrap vb-page-cover');}
				}else if(!inc){pN.show();}
				if(inc && opts.curr >= opts.pTotal-2){
					p4.hide();
					if(opts.covers){p3wrap.attr('class','vb-wrap vb-page-cover');}
				}else if(inc){p4.show();}
			}
			
			//add correct page numbers
			if(opts.pageNumbers){
				if(!opts.closed){
					addNum(wrap1, p+2);
					addNum(wrap2, p+1);
				}else if(!opts.covers){
					if(!inc && opts.curr == 0){
						if(opts.direction == 'RTL'){
							addNum(wrap2, p);
						}else{
							addNum(wrap2, p-1);
						}
					}else{
						addNum(wrap2, p);
					}
					if(inc && opts.curr == opts.pTotal-2){
						if(opts.direction == 'RTL'){
							addNum(wrap1, p+1);
						}else{
							addNum(wrap1, p);
						}
					}else{
						addNum(wrap1, p+1);
					}
				}else if(opts.curr > 0 && opts.curr < opts.pTotal-2){
					addNum(wrap1, p);
					addNum(wrap2, p-1);
				}
			}
			
			//init shadows
			if(opts.shadows){
				//check for opacity support -> animate shadow overlay on moving slide
				if($.support.opacity){
					shadow.animate({opacity:1}, opts.speedH, opts.easeIn)
					      .animate({opacity:0}, opts.speedH, opts.easeOut);
				}else{
					if(inc){
						shadow.animate({right:opts.shadowTopFwdWidth}, opts.speed, opts.easeIn);
					}else{
						shadow.animate({left:opts.shadowTopBackWidth}, opts.speed, opts.easeIn);
					}
				}
			}
		},
		updateBefore: function(num){
			busy = true;
			opts.curr = num;
			opts.before.call(self);
			self.updatePager();
			self.updateCtrls();
			updateHash(opts.curr+1, opts);
		},
		updateAfter: function(num){
			self.resetPages();
			self.updatePager();
			self.updateCtrls();
			opts.after.call(self);
			busy = false;
		},
		updateCtrls: function(){
			//update ctrls, cursors and visibility
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
				if(opts.direction == 'RTL'){
					nums = (Math.abs(opts.curr - opts.pTotal)-1) +' - '+ ((Math.abs(opts.curr - opts.pTotal)));
					if(opts.closed){
						if(opts.curr==opts.pTotal-2){nums='1'}
						else if(opts.curr==0){nums=opts.pTotal-2}
						else{nums = (Math.abs(opts.curr - opts.pTotal)-2) +' - '+ ((Math.abs(opts.curr - opts.pTotal)-1));}
						
						if(opts.covers){
							if(opts.curr==opts.pTotal-2){nums=''}
							else if(opts.curr==0){nums=''}
							else{nums = (Math.abs(opts.curr - opts.pTotal)-3) +' - '+ ((Math.abs(opts.curr - opts.pTotal)-2));}
						}
					}
					$(opts.menu+' .vb-selector-page .vb-current').text(nums);
				}else{
					nums = (opts.curr+1) +' - '+ (opts.curr+2);
					if(opts.closed){
						if(opts.curr==0){nums='1'}
						else if(opts.curr==opts.pTotal-2){nums=opts.pTotal-2}
						else {nums = (opts.curr) +'-'+ (opts.curr+1);}
						
						if(opts.covers){
							if(opts.curr==0){nums=''}
							else if(opts.curr==opts.pTotal-2){nums=''}
							else {nums = (opts.curr-1) +'-'+ (opts.curr);}
						}
					}
					$(opts.menu+' .vb-selector-page .vb-current').text(nums);
				}
			}
			if(opts.chapterSelector){
				if(chapters[opts.curr]!=""){
					$(opts.menu+' .vb-selector-chapter .vb-current').text(chapters[opts.curr]);
				}else if(chapters[opts.curr+1]!=""){
					$(opts.menu+' .vb-selector-chapter .vb-current').text(chapters[opts.curr+1]);
				}
				
				if(opts.direction == 'RTL' && chapters[opts.curr+1]!=""){
					$(opts.menu+' .vb-selector-chapter .vb-current').text(chapters[opts.curr+1]);
				}else if(chapters[opts.curr]!=""){
					$(opts.menu+' .vb-selector-chapter .vb-current').text(chapters[opts.curr]);
				}
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
	
//CTRLS SETUP
	
	//add prev next user defined controls
	if(opts.next){
		next = $(opts.next);	
		next.click(function(e){e.preventDefault(); self.next();});
	}
	if(opts.prev){
		prev = $(opts.prev);	
		prev.click(function(e){e.preventDefault(); self.prev();});
	}
	
	//add overlays
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
		
		//update ctrls for RTL direction
		if(opts.direction == 'RTL'){
			tabN.html('Previous').attr('title','Previous Page');
			tabP.html('Next').attr('title','Next Page');
		}
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
		
		//update ctrls for RTL direction
		if(opts.direction == 'RTL'){
			arrowN.html('<div>Previous</div>').attr('title','Previous Page');
			arrowP.html('<div>Next</div>').attr('title','Next Page');
		}
	}
	
	//save all "vb-prev" and "vb-next" controls
	ctrlsN = vb.find('.vb-next');
	ctrlsP = vb.find('.vb-prev');
	
	//add click actions
	ctrlsN.click(function(e){e.preventDefault(); self.next();});
	ctrlsP.click(function(e){e.preventDefault(); self.prev();});
	
	//add page hover animations
	if(opts.hovers){
		ctrlsN.hover(
			function(){
				if(!busy && opts.curr+2 < opts.pTotal){
					//update elements
					p3wrap.attr('class','vb-wrap vb-wrap-left');
					if(opts.closed && opts.curr+2 >= opts.pTotal-2){
						p4.hide();
						if(opts.covers){p3wrap.removeClass('vb-wrap-left').addClass('vb-page-cover');}
					}
					//animate
					p2.stop().animate({'width':opts.pWidth-40}, 500, opts.easing);
					p3.stop().animate({'left':opts.width-40, 'width':20, paddingLeft: 10}, 500, opts.easing);
				}
			},
			function(){
				if(!busy && opts.curr+2 < opts.pTotal){
					p2.stop().animate({'width':opts.pWidth}, 500, opts.easing);
					p3.stop().animate({'left':opts.width, 'width':0, paddingLeft: 0}, 500, opts.easing);				
				}
			}
		);
		ctrlsP.hover(
			function(){
				if(!busy && opts.curr-2 >= 0){
					//update elements
					if(!opts.closed || (opts.closed && opts.curr-2 > 0)){
						pN.show();
					}else if(opts.closed && opts.curr-2 == 0){
						pN.hide();
					}
					if(opts.covers){
						p0wrap.attr('class','vb-wrap vb-wrap-right');
						if(opts.closed && opts.curr-2 == 0){p0wrap.removeClass('vb-wrap-right').addClass('vb-page-cover');}
					}
					//animate
					p1.stop().animate({left:10, width:opts.pWidth-10}, 400, opts.easing);
					p1wrap.stop().animate({left:"-10px"}, 400, opts.easing);
					p0.stop().animate({left:10, width:30}, 400, opts.easing);
					p0wrap.stop().animate({right:10}, 400, opts.easing);
				}
			},
			function(){
				if(!busy && opts.curr-2 >= 0){
					p1.stop().animate({left:0, width:opts.pWidth}, 400, opts.easing);
					p1wrap.stop().animate({left:0}, 400, opts.easing);
					p0.stop().animate({left:0, width:0}, 400, opts.easing);
					p0wrap.stop().animate({right:0}, 400, opts.easing);
				}
			}
		);
	}
	
	//arrow animations	
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

//add page number
function addNum(target, num){
	target.append('<div class="vb-counter">'+(num)+'</div>');
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
	direction:          'LTR',                           // direction of the overall content organization, default LTR, left to right, can be RTL for languages which read right to left
	startingPage:       0,                               // index of the first page to be displayed
	easing:             'easeInOutQuad',                 // easing method for complete transition
	easeIn:             'easeInQuad',                    // easing method for first half of transition
	easeOut:            'easeOutQuad',                   // easing method for second half of transition
	
	closed:             false,                           // start with the book "closed", will add empty pages to beginning and end of book
	closedFrontTitle:   null,                            // used with "closed", "menu" and "pageSelector", determines title of blank starting page
	closedFrontChapter: null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank starting page
	closedBackTitle:    null,                            // used with "closed", "menu" and "pageSelector", determines chapter name of blank ending page
	closedBackChapter:  null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank ending page
	covers:             false,                           // used with  "closed", makes first and last pages into covers, without page numbers (if enabled)

	pagePadding:        10,                              // padding for each page wrapper
	pageNumbers:        true,                            // display page numbers on each page
	
	hovers:             true,                            // enables preview pageturn hover animation, shows a small preview of previous or next page on hover
	overlays:           true,                            // enables navigation using a page sized overlay, when enabled links inside the content will not be clickable
	tabs:               false,                           // adds tabs along the top of the pages
	tabWidth:           60,                              // set the width of the tabs
	tabHeight:          20,                              // set the height of the tabs
	arrows:             false,                           // adds arrows overlayed over the book edges
	cursor:             'pointer',                       // cursor css setting for side bar areas
	
	hash:               false,                           // enables navigation using a hash string, ex: #/page/1 for page 1, will affect all viewbooks with 'hash' enabled
	keyboard:           true,                            // enables navigation with arrow keys (left: previous, right: next)
	next:               null,                            // selector for element to use as click trigger for next page
	prev:               null,                            // selector for element to use as click trigger for previous page

	menu:               null,                            // selector for element to use as the menu area, required for 'pageSelector'
	pageSelector:       false,                           // enables navigation with a dropdown menu of pages, requires 'menu'
	chapterSelector:    false,                           // enables navigation with a dropdown menu of chapters, determined by the "rel" attribute, requires 'menu'

	shadows:            true,                            // display shadows on page animations
	shadowTopFwdWidth:  166,                             // shadow width for top forward anim
	shadowTopBackWidth: 166,                             // shadow width for top back anim
	shadowBtmWidth:     50,                              // shadow width for bottom shadow
	
	before:             function(){},                    // callback invoked before each page turn animation
	after:              function(){}                     // callback invoked after each page turn animation
}
	
})(jQuery);