$(function(){
	$('#slides').presentation();
	
	//external links
	$('a[rel="external"]').click(function(){
		this.target = "_blank";
	});	
	
	/////////////////////////////////////////////////////
	
	//ID            
	$("#selector_id").addClass("bold");
	
	//Class
	$(".selector_class").addClass("italic");
	
	//Other
	$(".basics p:last").css({'text-align':'right'});
	
	//////////////////////////////////////////////////////
	
	$('#data1').data('foo', 'meh');
	$('#data2').data('foo', 'bleh');

	$('p:data("foo=bleh")').addClass('bold');
	
	////////////////////////////////////////////////////
	
});