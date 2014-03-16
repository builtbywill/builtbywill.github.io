$(function() {
	//set vars
	var curr = checkHash(),
	d = new Date(), h = d.getHours(), daytime = 9, nighttime = 17,
	$b1 = $('#bg-1'), $b2 = $('#bg-2'), $b3 = $('#bg-3'), $b4 = $('#bg-4'), $b5 = $('#bg-5'),
	t_y = 2000, t_x = 2000, easing = 'easeInOutQuad';
		
	//update page style for time of day	
	if(h >= daytime && h <= nighttime){
		 $('#below').append($b2, $b3, $b4);
		 $('body, #switch a').removeClass('night day').addClass('day');
	}else{
		 $('#above').prepend($b4, $b3);
		 $('body, #switch a').removeClass('night day').addClass('night');
	}
		
	//check hash tag and slide bg's to correct position
	updateNav(curr);
			   
	//setup navigation links
	$('#nav').localScroll({
		target: $('#content-mask'), 
		duration: t_x*0.25,
		easing: 'easeInOutExpo',
		axis: 'x',
		queue: true,
		hash: true
	});
	$('#nav a').click(function(){
		curr = $('#nav a').index($(this));					   
		updateNav(curr);
		return false;
	});
	
	//setup theme switch
	$('#switch a').click(function(){
		if($('body').hasClass('night')){
			changeDay();
		}else{
			changeNight();
		}
		$(this).toggleClass('day','night');
		$(this).toggleClass('night','day');
		return false;
	}).qtip({
		position: {
			corner: { target: 'topMiddle', tooltip: 'bottomMiddle' },
			adjust: { y: -3 }
		},
		style:{ tip : 'bottomMiddle' }
	});
		
	//setup projects
	$('.project-details').css({top: $('body').height()});
	$('.project-details .description').hide();
	$('.project-box ul a').click(function(){
										  
		$('.project-box').stop().animate({top: $('body').height()}, 1000, easing);
		$('.project-details').stop().animate({top: 0}, 1000, easing);
		$('.project-details .description:eq('+ $('.project-box ul a').index($(this)) +')').show().find('.project-images').cycle('resume');
		
		animTo(-1);
		
		$('#project-sorting').fadeOut();
		$('#project-return').fadeIn();
		
		return false;
	});
	$('#project-return').click(function(){
										
		$('.project-box').stop().animate({top: 0}, 1000, easing);
		$('.project-details').stop().animate({top: $('body').height()}, 1000, easing, function(){
			$('.project-details .description').hide();
		});
		
		animTo(0);
		
		$('.project-images').cycle('pause');
		
		$('#project-sorting').fadeIn();
		$('#project-return').fadeOut();
		
		return false;
	});
	$("a.fancy").fancybox({
		'padding'		: 0,
		'autoScale'	    : true,
		'overlayOpacity': 0.50,
		'overlayColor'  : '#000',
		onStart: function(){
			$('.project-images:visible').cycle('pause');
		},
		onClosed: function(){
			$('.project-images:visible').cycle('resume');
		}
	});
	$(".hotseat").click(function() {
		$.fancybox({
			'padding'		: 0,
			'autoScale'		: false,
			'titleShow'     : false,
			'width'		    : 853,
			'height'		: 505,
			'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
			'overlayColor' : '#000',
			'type'			: 'swf',
			'swf'			: {
				 'wmode'		: 'transparent',
				'allowfullscreen'	: 'true'
			}
		});
		return false;
	});		
	
	$('.project-images').cycle({
		fit:1
	});
	$('.project-images').cycle('pause')
	
	//project sorting
	$('#project-sorting label').click(function(){
		$(this).toggleClass('on');
	});
	$('#project-sorting input').change(function(){
		var checked = '';
		$('#project-sorting input:checked').each(function(){
			checked += '.'+$(this).val();
		});
		if(checked.length > 0){
			$('.project-box ul li').each(function(){
				if($(this).is(checked)){
					$(this).stop().fadeTo("fast", 1);
				}else{
					$(this).stop().fadeTo("fast", 0.1);
				}
			});
		}else{
			$('.project-box ul li').stop().fadeTo("fast", 1);
		}
	});

	//setup contact form
	$('#contact_form').ajaxForm({ 
		 target: '#message',
		 clearForm: true,
		 resetForm: true,
		 beforeSubmit: validate
	});		
	$('#contact_form').append('<input type="hidden" name="js" value="true" />');
	
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

	//hide scroll bars
	$('#content-mask, .project-mask').css('overflow-x','hidden');
	$('#content-mask').stop().animate({scrollLeft:$('#content li').width()*curr});
	
	//add listeners for window resize and hash tags
	$(window).resize(function(){
		$('#content-mask').stop().animate({scrollLeft:$('#content li').width()*curr}); //fix for col widths not being correct size
	});
	setInterval(doChange, 1000);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// FUNCTIONS
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		function checkHash(){
			var hash = window.location.hash;
			switch(hash){
				case '#projects':
					return 0;
					break;
				case '#code':
					return 1;
					break;
				case '#about':
					return 2;
					break;
				case '#contact':
					return 3;
					break;
				default:
					return 0;
			}
		}
		function updateNav(curr){
			$('#nav a').removeClass('current');
			$('#nav a:eq('+curr+')').addClass('current');
			animTo(curr);
		}
		function doChange(){
			var h_new;	   
			d = new Date();
			h_new = d.getHours();
			if(h_new == daytime && h < daytime){
				changeDay();
			}
			if(h_new == nighttime && h < nighttime){
				changeNight();
			}
			h = h_new;
		}
		function beforeChange(){
			if($.support.opacity){
				$('#logo, #nav, #content-mask, #content').fadeTo(100, 0);
			}else{
				$('#logo, #nav, #content-mask, #content').css({'visibility':'hidden'});
			}
		}
		function afterChange(){
			if($('body').hasClass('night')){
				 $('body').attr('class','day');
			}else{
				 $('body').attr('class','night');
			}
			if($.support.opacity){
				$('#logo, #nav, #content-mask, #content').fadeTo('slow', 1);
			}else{
				$('#logo, #nav, #content-mask, #content').css({'visibility':'visible'});
			}
		}
		function changeNight(){
			var w_h = $('body').height();
			beforeChange();
			$b1.stop().css({bottom: w_h-$b1.offset().top-$b1.height(),top:'auto'}).animate({bottom: '-30px'}, t_y, easing);
			$b2.stop().css({bottom: w_h-$b2.offset().top-$b2.height(),top:'auto'}).animate({bottom: '-60px'}, t_y, easing);
			$b3.stop().css({bottom: w_h-$b3.offset().top-$b3.height(),top:'auto'}).animate({bottom: "-1085px"}, t_y, easing);
			$b4.stop().animate({bottom: "-228px"}, t_y, easing);
			$b5.stop().animate({bottom: "-180px"}, t_y, easing, function(){
				$('#above').prepend($b4, $b3);
				afterChange();
			});
		}
		function changeDay(){
			beforeChange();
			$('#below').append($b2, $b3, $b4);
			$b1.stop().css({bottom:'auto',top: $b1.offset().top}).animate({top: "-100px"}, t_y, easing);
			$b2.stop().css({bottom:'auto',top: $b2.offset().top}).animate({top: "-45px"}, t_y, easing);
			$b3.stop().css({bottom:'auto',top: $b3.offset().top}).animate({top: "0px"}, t_y, easing);
			$b4.stop().animate({bottom: "0px"}, t_y, easing);
			$b5.stop().animate({bottom: "-25px"}, t_y, easing, function(){
				afterChange();
			});
		}
		function animTo(x){
			var bg_positions  = [0,38,75,150,38,0,50],
			    bg_increments = [-10,-50,-100,-200,-50,-100,-200];
			
			$b1.stop().animate({backgroundPosition: bg_positions[1]+(bg_increments[1]*x)+'%' }, t_x, easing);
			$b2.stop().animate({backgroundPosition: bg_positions[2]+(bg_increments[2]*x)+'%' }, t_x, easing);
			
			if($('body').hasClass('night')){
				$('html').stop().animate({backgroundPosition: bg_positions[0]+(bg_increments[0]*x)+'%' }, t_x, easing);
				$b3.stop().animate({backgroundPosition: bg_positions[3]+(bg_increments[3]*x)+'%' }, t_x, easing);
			}else{
				$b3.stop().animate({backgroundPosition: bg_positions[4]+(bg_increments[4]*x)+'%' }, t_x, easing);
			}
			$b4.stop().animate({backgroundPosition: bg_positions[5]+(bg_increments[5]*x)+'%' }, t_x, easing);
			$b5.stop().animate({backgroundPosition: bg_positions[6]+(bg_increments[6]*x)+'%' }, t_x, easing);
		}
		
		// FORM VALIDATION
		function validate(formData, jqForm, options) { 
			var name = $('#name').val(); 
			var email = $('#email').val();
			var comments = $('#comments').val();
			var errors = '';
			
			$('input, textarea').removeClass('error');
			
			if(name == '' || name == 'name'){
				$('#name').addClass('error');
				errors += 'Please enter your name<br/>';
			}
			if(email == '' || email == 'email'){
				$('#email').addClass('error');
				errors += 'Please enter your email<br/>';
			}	
			else if(!isEmail(email)){
				$('#email').addClass('error');
				errors += 'Please enter a valid email<br/>';
			}	
			if(comments == '' || comments == 'comments'){
				$('#comments').addClass('error');
				errors += 'Please enter some comments<br/>';
			}
			
			if(errors != ''){
				setFormMessage(errors);
				return false;
			}else
				return true;
		}	
		function isEmail(string) {
			if (string.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1)
				return true;
			else
				return false;
		}		
		function setFormMessage(str) {
			$('#message').html('<div class="errormessage">'+str+'</div>'); 
		}
	}); 
	
