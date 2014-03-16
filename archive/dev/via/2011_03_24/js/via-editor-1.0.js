/*
 * VIA Document Editor
 * Copyright (c) 2011
 *
 */
$(function() {
	/////////////////////////////////////////////////////////
	// Init
	/////////////////////////////////////////////////////////
	$('#via-editor').booklet({
		speed: 500,					 
		width: 660,
		height: 468,
		easing: 'easeInOutExpo',
		easeIn: 'easeInExpo',
		easeOut: 'easeOutExpo',
		closed: true,
		autoCenter:true,
		pageNumbers: false,
		pagePadding:30,
		hash:true,
		arrows: true
	});
	var $editor = $('#via-editor').booklet("api");
	
	//setup blank templates
	var overflow = '<div class="via-page"><div class="via-editable layout-fullpage"><div class="via-text via-text-static"></div><textarea id="date-page-0" name="date-page-0" class="via-text via-text-form via-overflow" style="display:none;"></textarea></div></div>';
		
	//hide editor inputs/textareas
	$('.via-text-form, .via-photo, .via-thumbs a').hide();
	
	/////////////////////////////////////////////////////////
	// Thumbnail Controls
	/////////////////////////////////////////////////////////	
	$('.via-thumbnails-open').click(function(){
		$(this).hide();
		$('.via-thumbnails-close, .via-thumbs a').show()
		$('.via-thumbs').addClass('via-thumbs-opened');
	});
	$('.via-thumbnails-close').click(function(){
		$(this).hide();
		$('.via-thumbnails-open').show();
		$('.via-thumbs a').hide()
		$('.via-thumbs').removeClass('via-thumbs-opened');
	});
	$('.via-thumbs a').live('click', function(){
		var pageNum = parseInt($('.via-thumbs a').index($(this))) + 1;
		$('#via-editor').booklet(pageNum);
		$(this).siblings().removeClass('current');
		$(this).addClass('current');
	});
	
	/////////////////////////////////////////////////////////
	// Text Editing Controls
	/////////////////////////////////////////////////////////
	$('.via-text-static').live('click',function(){
		$(this).hide();
		$(this).siblings('.via-text-form').show().focus();
		toggleEditing($(this).parent());
		
	});
	$('.via-text-form').live('blur',function(){	
		var pageNum = parseInt($(this).attr('id').substring($(this).attr('id').length-1,$(this).attr('id').length));	
		var checkLength = checkTextLength($(this));		
		
		//check if text is overflowing
		if(checkLength.isOver){
			/*
			//if page is set to overflow, split content onto a new page
			if($(this).hasClass('via-overflow')){
			
				//alert("Adding New Page...");
				
				var pageLines = 26;
				var keepLines = checkLength.limit;
				var numNewPages = Math.ceil((checkLength.lines.length - keepLines)/pageLines);
				
				//split text, keep and move forward
				var underText = '';
				for(i=0; i<checkLength.limit-1; i++){
					underText += checkLength.lines[i];
					if(i<checkLength.limit-2){
						underText += '\n';
					}
				}
				
				//add new pages as needed
				var startPageLine = keepLines-1;
				var endPageLine = startPageLine + pageLines;
				if(checkLength.lines.length - 1 < endPageLine){
					endPageLine = checkLength.lines.length - 1;
				}
				
				for(j=0;j<numNewPages;j++){
					
					var overText = '';	
					var newPageNum = pageNum+j;	
					
					//get lines of content for new page			
					for(i=startPageLine; i<endPageLine; i++){
						if (typeof checkLength.lines[i] != "undefined") {
							overText += checkLength.lines[i];
							if (i < checkLength.lines.length - 1) {
								overText += '\n';
							}
						}
					}		
											
					//create new page content
					var newPage = $(overflow);
					newPage.find('.via-text-static').html(overText.replace(/\n/g,"<br />"));
					newPage.find('.via-text-form').val(overText);
					$editor.addPage(newPageNum, newPage);	
					
					//update vars
					startPageLine = endPageLine;
					endPageLine = startPageLine + pageLines;				
					
				}				
				
				//update current area
				$(this).val(underText);
				$(this).hide()
				.siblings('.via-text-static').html(
					underText.replace(/\n/g,"<br />")
				)
				.show();
				toggleEditing($(this).parent());
				
				
				//update input names for other pages
				$('#via-editor .b-page').each(function(i){
					var updateNum = $(this).data('page');
					$(this).find('input, textarea').each(function(){
						$(this).attr('id', $(this).attr('id').substring(0,$(this).attr('id').lastIndexOf('-')+1)+updateNum);
						$(this).attr('name', $(this).attr('name').substring(0,$(this).attr('name').lastIndexOf('-')+1)+updateNum);
					});
					
				});
				
				//call AJAX save
				/////////////////////////////////////////////////////////
				//alert("AJAX Content to Send:\n\n"+$(this).val());
				$('#via-editor-controls').text('Sending AJAX...');
				setTimeout(function(){
					$('#via-editor-controls').text('Saved.');
				},1000);
				/////////////////////////////////////////////////////////			
				
			}else{
				alert("Oops! Your text input is too long! Please shorten your text.");
			}	*/		
			alert("Oops! Your text input is too long! Please shorten your text.");
		}else{			
			$(this)
			.hide()
			.siblings('.via-text-static').html(
				$(this).val().replace(/\n/g,"<br />")
			)
			.show();
			toggleEditing($(this).parent());		
			
			//call AJAX save
			/////////////////////////////////////////////////////////
			//alert("AJAX Content to Send:\n\n"+$(this).val());
			$('#via-editor-controls').text('Sending AJAX...');
			setTimeout(function(){
				$('#via-editor-controls').text('Saved.');
			},1000);
			/////////////////////////////////////////////////////////			
		}
	});
	
	/////////////////////////////////////////////////////////
	// Photos Editing Controls
	/////////////////////////////////////////////////////////
	$('.via-photo-trigger').live('click',function(){
		var $trigger = $(this), $e   = $(this).parent(),
		$p   = $(this).siblings('.via-photo').show(), $p_w = $p.width(), $p_h = $p.height(),
		img;
		
		$(this).hide();
		toggleEditing($e);
		
		//check for exisiting photo data
		if($e.data('photo-data') && $e.data('photo-data') != ""){
		
			//upload photo			
			//alert('Open dialog to edit or replace photo.');
			
			img_new = $p.find('img').clone().appendTo($e.data('photo-data').find('.via-photo-wrap'));
			$(img_new).draggable({
				stop: function(){constrainPhoto(img_new);}
			});
			$e.data('photo-data').dialog("open");
			
		}else{
		
			//upload photo			
			//alert('Open dialog to upload/choose photo. \n\n Proceed after photo is selected.');
			
			img = new Image();
			$(img).attr('src','images/wide.jpg').addClass('via-photo-img');
			$('#via-editor-controls').text('Loading Image...');
			$(img).load(function(){
				$('#via-editor-controls').text('Image Loaded.');
			
				var $d       = $('<div class="via-photo-dialog" style="display:none;"><h2>Resize / Crop</h2><p>Resize using the zoom slider. Drag the photo to adjust position.</p></div>').appendTo('body');
				var $d_ctrls = $('<div class="via-photo-resizer"></div>').appendTo($d).height($p_h);
				var $d_pw    = $('<div class="via-photo-wrap"></div>').appendTo($d).width($p_w).height($p_h).prepend(img);
				
				//save for aspect ratio
				var $img_w = img.naturalWidth;
				var $img_h = img.naturalHeight;
				var $img_r = $img_w / $img_h;
				var $img_min_percent, $img_max_percent = 100;
				
				if($img_w > $img_h){
					$(img).height($p_h);
					$img_min_percent = ($p_h / $img_h)*100;
				}else if($img_w < $img_h){
					$(img).width($p_w);
					$img_min_percent = ($p_w / $img_w)*100;
				}
				
				//setup resize slider
				$d_ctrls.slider({
					orientation: "vertical",
					range: "min",
					min: $img_min_percent,
					max: $img_max_percent,
					step: 1,
					value: $img_min_percent,
					slide: function( event, ui ) {
						$d.find('img').width(Math.round($img_w*(ui.value / 100))).height(Math.round($img_h*(ui.value / 100)));
					},
					stop: function(){constrainPhoto(img);}
				});
				//enable photo dragging
				$(img).draggable({
					stop: function(){constrainPhoto(img);}
				});
				//open dialog
				$d.dialog({
					modal:true,
					width:$p_w+100,
					height: 'auto',
					resizable: false,
					draggable: false,
					position:'center',
					buttons: {
						"Save Changes": function() {
							savePhoto(img);
							$p.html($d.find('img').draggable("destroy"));
							$(this).dialog("close");
							$e.data('photo-data',$(this));
							toggleEditing($e);
							$trigger.show().text('');
						},
						Cancel: function() {
							$(img).draggable("destroy");
							$(this).dialog("close").remove();
							$e.data('photo-data','');
							$p.hide();
							toggleEditing($e);
							$trigger.show();
						}
					}					
				});
				$(".ui-dialog-titlebar").hide();
			
			});
		}		
		
		//keeps photo within the bounds of the parent box
		function constrainPhoto(img){
			var pos = $(img).position();
			if(pos.top > 0){
				$(img).animate({top:0},100);
			}else if(pos.top+$(img).height() < $p_h){
				$(img).animate({top:$p_h-$(img).height()},100);
			}
			if(pos.left > 0){
				$(img).animate({left:0},100);
			}else if(pos.left+$(img).width() < $p_w){
				$(img).animate({left:$p_w-$(img).width()},100);
			}
		}
		
		function savePhoto(img){
			//get image size
			var i_w = $(img).width(),
				i_h = $(img).height(),
				i_l = Math.abs($(img).position().left),
				i_t = Math.abs($(img).position().top),
				i_dims = [i_l, i_t, i_l+$p_w, i_t+$p_h];
				
			//update form inputs	
			var container = $(img).parents('.via-editable');
			container.find('input.via-photo-src').val($(img).attr('src'));
			container.find('input.via-photo-w').val(i_w);
			container.find('input.via-photo-h').val(i_h);
			container.find('input.via-photo-x1').val(i_dims[0]);
			container.find('input.via-photo-y1').val(i_dims[1]);
			container.find('input.via-photo-x2').val(i_dims[2]);
			container.find('input.via-photo-y2').val(i_dims[3]);
				
			//call AJAX save
			/////////////////////////////////////////////////////////
			//alert("AJAX Content to Send:\n\nImage Width: "+i_w+"\n\nImage Height: "+i_h+"\n\nImage Crop Box Dimensions: "+i_dims);
			$('#via-editor-controls').text('Sending AJAX...');
			setTimeout(function(){
				$('#via-editor-controls').text('Saved.');
			},1000);
			/////////////////////////////////////////////////////////
		}
		
	});
	
	/////////////////////////////////////////////////////////
	// General Functions
	/////////////////////////////////////////////////////////
	//class switching for editable items
	function toggleEditing(el){
		el.toggleClass('via-editing');
	}
	
	function checkTextLength(el){
		var lines = el.val().split('\n');
		var limit = Math.round(el.height() / parseInt(el.css('line-height').replace('px','')));
		var isOver = lines.length > limit;		
		//alert("lines: "+lines+", limit: "+limit+", isOver: "+isOver.toString());
		return {
			isOver: isOver,
			lines: lines,
			limit: limit
		}
	}
	
});
