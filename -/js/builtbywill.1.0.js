$(function() {
	//set main body class based off of time of day	   
		var curr, d, h, i;	   
		curr = checkHash();
		d = new Date();
		h = d.getHours();
		if(h >= 9 && h <=17){
			 $('body, #switch a').removeClass('night day').addClass('day');
		}else{
			 $('body, #switch a').removeClass('night day').addClass('night');
		}
		
	//check hash tag and slide bg's to correct position
		updateNav(curr);
			   
	//setup navigation links
		$('#nav').localScroll({
			target: $('#content-mask'), 
			duration: 500,
			easing: 'easeInOutExpo',
			axis: 'x',
			queue: true,
			hash: true,
			onBefore: function(e, anchor, $target, $wrapper){ 
				$('#nav .current').removeClass('current');
				$(this).addClass('current');
				this.blur();
			}			
		});
		$('#nav-projects').click(function(){
			anim1();
			curr = 0;
		});
		$('#nav-code').click(function(){
			anim2();
			curr = 1;
		});
		$('#nav-about').click(function(){
			anim3();
			curr = 2;
		});
		$('#nav-contact').click(function(){
			anim4();
			curr = 3;
		});
	
	//setup theme switch
		$('#switch a').click(function(){
			if($('body').hasClass('night')){
				changeDay();
			}else{
				changeNight();
			}
			if($(this).hasClass('night')){
				$(this).attr('class','day');
			}else{
				$(this).attr('class','night');
			}
			return false;
		});
		$('#switch a, .next, .prev, .dots a').qtip({
			position: {
				corner: {
					 target: 'topMiddle',
					 tooltip: 'bottomMiddle'
				},
				adjust: {
					y: -3
				}
			},
			style:{
				tip : 'bottomMiddle'
			}
		});
		
	//setup projects
		$('.project-box .project-overlay').css({'opacity':0}).hover(function(){
			$(this).animate( { opacity: 1.0 }, {queue: false, duration: 1000})
		},function(){
			$(this).animate( { opacity: 0.0  }, {queue: false, duration: 1000})			
		});
		$('.project-box li').each(function(i){
			$('.project-box ul').width((i+1)*740);
		});
		$('#projects').serialScroll({
			target: '.project-mask', 
			items: 'li',
			navigation: '.project-controls .dots a',
			prev: '.prev',
			next: '.next',
			duration: 500,
			easing: 'easeInOutExpo',
			axis: 'x',
			onBefore: function( e, elem, $pane, $items, pos ){
				$('.project-controls .dots a').removeClass('current');
				$('.project-controls .dots li:nth-child('+(pos+1)+') a').addClass('current');
				this.blur();
			}			
		});
		$("a.fancy").fancybox({
			'padding'		: 0,
			'autoScale'	    : true,
			'titlePosition' : 'outside',
			'titleFormat'   : formatTitle,
			'overlayOpacity': 0,
			'overlayColor'  : '#000',
			'type'          : 'image'
			//'cyclic'        : true
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
		function formatTitle(title, currentArray, currentIndex, currentOpts) {
			return '<div class="right">Image ' + (currentIndex + 1) + ' of ' + currentArray.length + '</div><div>' + (title && title.length ? title : '' ) + '</div>';
		}


	//setup contact form
		$('#contact_form').ajaxForm({ 
			dataType: 'json',
			beforeSubmit: validate,
			success: function(data) {
				if(data.success){
					$('form').find('input[type=text], textarea').removeClass('on').addClass('off').val('');
					javascript:Recaptcha.reload();
					$('#message').show().html('<div class="message">'+data.message+'</div>');
					setInterval(function(){$('#message').slideUp('slow');}, 1000);
				} else if (data.error) {
					javascript:Recaptcha.reload();
					$('#message').show().html('<div class="errormessage">'+data.message+'</div>');			
				}
    		}
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
		
		
	//functions
	//--------------------------------------------------------------------------------------------------------------------------------------------------------
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
			if(curr == 0){
				$('#nav-projects').addClass('current');
				anim1();
			}
			else if(curr == 1){
				$('#nav-code').addClass('current');
				anim2();
			}
			else if(curr == 2){
				$('#nav-about').addClass('current');
				anim3();
			}
			else if(curr == 3){
				$('#nav-contact').addClass('current');
				anim4();
			}
		}
		function doChange(){
			var h_new;	   
			d = new Date();
			h_new = d.getHours();
			if(h_new == 9 && h < 9){
				changeDay();
			}
			if(h_new == 17 && h < 17){
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
			beforeChange();
			$('#bg-1').stop().css({bottom:'900px',top:'auto'}).animate({bottom: "170px"}, 500, 'easeInOutQuad');
			$('#bg-2').stop().css({bottom:'882px',top:'auto'}).animate({bottom: "100px"}, 500, 'easeInOutQuad');
			$('#bg-3').stop().css({bottom:'834px',top:'auto'}).animate({bottom: "40px"}, 500, 'easeInOutQuad');
			$('#bg-4').stop().animate({bottom: "-228px"}, 500, 'easeInOutQuad');
			$('#bg-5').stop().animate({bottom: "-180px"}, 500, 'easeInOutQuad', function(){
				afterChange();
			});
		}
		function changeDay(){
			beforeChange();
			$('#bg-1').stop().css({bottom:'auto',top:'-470px'}).animate({top: "-1200px"}, 500, 'easeInOutQuad');
			$('#bg-2').stop().css({bottom:'auto',top:'577px'}).animate({top: "-205px"}, 500, 'easeInOutQuad');
			$('#bg-3').stop().css({bottom:'auto',top:'689px'}).animate({top: "-105px"}, 500, 'easeInOutQuad');
			$('#bg-4').stop().animate({bottom: "0px"}, 500, 'easeInOutQuad');
			$('#bg-5').stop().animate({bottom: "-25px"}, 500, 'easeInOutQuad', function(){
				afterChange();
			});
		}
		function anim1(){
			$('#bg-1').stop().animate({backgroundPosition: "38%"}, 2000, 'easeInOutQuad');
			$('#bg-2').stop().animate({backgroundPosition: "75%"}, 2000, 'easeInOutQuad');
			
			if($('body').hasClass('night')){
				$('#bg-3').stop().animate({backgroundPosition: "150%"}, 2000, 'easeInOutQuad');
			}else{
				$('#bg-3').stop().animate({backgroundPosition: "38%"}, 2000, 'easeInOutQuad');
			}
			
			$('#bg-4').stop().animate({backgroundPosition: "0%"}, 2000, 'easeInOutQuad');
			$('#bg-5').stop().animate({backgroundPosition: "50%"}, 2000, 'easeInOutQuad');
		}
		function anim2(){
			$('#bg-1').stop().animate({backgroundPosition: "-12%"}, 2000, 'easeInOutQuad');
			$('#bg-2').stop().animate({backgroundPosition: "-25%"}, 2000, 'easeInOutQuad');
			
			if($('body').hasClass('night')){
				$('#bg-3').stop().animate({backgroundPosition: "-50%"}, 2000, 'easeInOutQuad');
			}else{
				$('#bg-3').stop().animate({backgroundPosition: "-12%"}, 2000, 'easeInOutQuad');
			}
			
			$('#bg-4').stop().animate({backgroundPosition: "-100%"}, 2000, 'easeInOutQuad');
			$('#bg-5').stop().animate({backgroundPosition: "-250%"}, 2000, 'easeInOutQuad');
		}
		function anim3(){
			$('#bg-1').stop().animate({backgroundPosition: "-62%"}, 2000, 'easeInOutQuad');
			$('#bg-2').stop().animate({backgroundPosition: "-125%"}, 2000, 'easeInOutQuad');
			
			if($('body').hasClass('night')){
				$('#bg-3').stop().animate({backgroundPosition: "-250%"}, 2000, 'easeInOutQuad');
			}else{
				$('#bg-3').stop().animate({backgroundPosition: "-62%"}, 2000, 'easeInOutQuad');
			}
			
			$('#bg-4').stop().animate({backgroundPosition: "-200%"}, 2000, 'easeInOutQuad');
			$('#bg-5').stop().animate({backgroundPosition: "-450%"}, 2000, 'easeInOutQuad');
		}	
		function anim4(){
			$('#bg-1').stop().animate({backgroundPosition: "-112%"}, 2000, 'easeInOutQuad');
			$('#bg-2').stop().animate({backgroundPosition: "-225%"}, 2000, 'easeInOutQuad');
			
			if($('body').hasClass('night')){
				$('#bg-3').stop().animate({backgroundPosition: "-450%"}, 2000, 'easeInOutQuad');
			}else{
				$('#bg-3').stop().animate({backgroundPosition: "-112%"}, 2000, 'easeInOutQuad');
			}
			
			$('#bg-4').stop().animate({backgroundPosition: "-300%"}, 2000, 'easeInOutQuad');
			$('#bg-5').stop().animate({backgroundPosition: "-650%"}, 2000, 'easeInOutQuad');
		}	
		
		//VALIDATION	
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
			$('#message').show().html('<div class="errormessage">'+str+'</div>'); 
		}
	}); 
	
