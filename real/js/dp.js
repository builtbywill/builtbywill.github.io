$(function(){
		   
	//initialize Cufon fonts
	if(!$.browser.msie){
		Cufon.replace('h1, .slider-title, .date-box .day, .date-box .month, .date-box .btm');
	}
		   
	// initialize SuperBGImage
	$('#bg-left, #bg-right').superbgimage({
		vertical_center: 0,
		inlineMode : 1
	});
	
	//featured slider
	$('.js-overflow').removeClass('js-overflow');
	$('#slider-next, #slider-prev, #featured-list-down').show().css('display','block');
	
	if($.support.opacity){
		$('#slider-next, #slider-prev').hover(function(){
			$(this).stop().fadeTo('fast',1);
		},function(){
			$(this).stop().fadeTo('fast',0);
		});
	}else{
		$('#slider-next, #slider-prev').addClass('ie-hide').hover(function(){
			$(this).removeClass('ie-hide');
		},function(){
			$(this).addClass('ie-hide');
		});
	}
	$('#slider-wrap').after('<ul id="slider-ctrls"></ul><!-- #slider-ctrls -->');
	$('#slider').cycle({
		fx:     'scrollHorz', 
		speed:   800, 
		timeout: 8000,
		easing: 'easeInOutQuad',
		next: '#slider-next',
		prev: '#slider-prev',
		activePagerClass: 'active',
	    pager:  '#slider-ctrls', 
		pagerAnchorBuilder: function(idx, slide) { return '<li><a href="#">' + (idx+1) + '</a></li>'; } 		
	});
	
	//featured list
	var fl = new Array(), fl_pos = 0;
	fl[0] = 0;
	$('#featured-list').children().each(function(i){
		if(i == 0){
			fl[i+1] = $(this).outerHeight() + 5;
		}else{
			fl[i+1] = fl[i] + $(this).outerHeight() + 5;
		}
	});
	//featured list controls
	if($.support.opacity){
		$('#featured-list-up').hover(function(){
			if(fl_pos > 0){
				$(this).stop().fadeTo('fast',1);
			}
		},function(){
			if(fl_pos > 0){
				$(this).stop().fadeTo('fast',0);
			}
		}).click(function(e){
			e.preventDefault(); 
			moveList(false);
		});
		
		$('#featured-list-down').hover(function(){
			if(fl_pos < fl.length-2){
				$(this).children('.on').stop().fadeTo('fast',1);
				$(this).children('.off').stop().fadeTo('fast',0);
			}else{
				$(this).children('.on').stop().fadeTo('fast',0);
				$(this).children('.off').stop().fadeTo('fast',1);
			}
		},function(){
			$(this).children('.on').stop().fadeTo('fast',0);
			$(this).children('.off').stop().fadeTo('fast',1);
		}).click(function(e){
			e.preventDefault(); 
			moveList(true);
		});
	//featured list controls, IE
	}else{
		$('#featured-list-up').addClass('ie-hide')
		.hover(function(){
			if(fl_pos > 0){
				$(this).removeClass('ie-hide');
			}
		},function(){
			if(fl_pos > 0){
				$(this).addClass('ie-hide');
			}
		}).click(function(e){
			e.preventDefault(); 
			moveList(false);
		});
		
		$('#featured-list-down .on').addClass('ie-hide');
		$('#featured-list-down').hover(function(){
			if(fl_pos < fl.length-2){
				$(this).children('.on').removeClass('ie-hide');
				$(this).children('.off').addClass('ie-hide');
			}else{
				$(this).children('.on').addClass('ie-hide');
				$(this).children('.off').removeClass('ie-hide');
			}
		},function(){
			$(this).children('.on').addClass('ie-hide');
			$(this).children('.off').removeClass('ie-hide');
		}).click(function(e){
			e.preventDefault(); 
			moveList(true);
		});
	}
	
	function moveList(inc){
		//increase/decrease list position
		if(inc){
			fl_pos++;
		}else if(!inc){
			fl_pos--;
		}
		var fl_anim = fl[fl_pos];
		$('#featured-list').stop().animate({'top': -fl_anim}, 500, "easeInOutQuad");
		
		//update list controls
		if(fl_pos == fl.length-2){
			if($.support.opacity){
				$('#featured-list-down .on').stop().fadeTo('fast',0);
				$('#featured-list-down .off').stop().fadeTo('fast',1);
			}else{
				$('#featured-list-down .on').addClass('ie-hide');
				$('#featured-list-down .off').removeClass('ie-hide');
			}
		}else if(fl_pos > 0 && fl_pos > 0){
			if($.support.opacity){
				if( $('#featured-list-up').is(':hidden')){
					$('#featured-list-up').show().css({'display':'block','opacity':0});
				}
			}else{
				if( $('#featured-list-up').is(':hidden')){
					$('#featured-list-up').show().addClass('ie-hide');
				}
			}
		}else if(fl_pos == 0){
			if($.support.opacity){
				$('#featured-list-up').stop().fadeTo('fast',0);
			}else{
				$('#featured-list-up').hide();
			}
		}
	}

	//collapsing boxes	   
	$('.collapse').click(function(e){
		e.preventDefault();
		if($(this).next('.box').is(':hidden')){
			$(this).next('.box').slideDown();
			$(this).removeClass('collapse-closed');	
		}else{
			$(this).next('.box').slideUp();
			$(this).addClass('collapse-closed');						  
		}
	});
	
	$('a').not('.date-box').each(function(){
		if($(this).attr('href') != "" && $(this).attr('href').indexOf('#') != 0 && $(this).attr('href').indexOf('/discoverypark/') < 0 && $(this).attr('href').indexOf('/dp/') < 0){
			$(this).attr('rel','external');
			$(this).attr('target','_blank');
		}
	});
	
	//Initialize feature support object
	try {
		$.featureSupport({ cssClasses: false });
		var isSupported = featureSupport.form.attribute.placeholder;
	} catch (e) {
		var isSupported = false;
	}

	//Form Placeholder Text
	$('form').placeholderfix({
		onClass: 'on',
		offClass: 'off',
		placeholderSupport: isSupported
	});
	

});	