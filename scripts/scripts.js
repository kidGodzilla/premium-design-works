window.onload = function() {
	
	// flexslider
	$('.flexslider').flexslider();
	//
		
	// toggle menu
	$("#toggle").click(function() { 
		jQuery("#navigation").slideToggle();
		return false;
	});
	//
	
	// show hide toggle at resolution
	$(window).resize(function(){

		if ($(window).width() > 801) {
			$("#navigation").css('display', 'block');
		}
		
		if ($(window).width() < 801) {
			$("#navigation").css('display', 'none');
		}
		
	});	
	//
	
	//spotlight fade-ins
	$('#word-one').fadeIn(3000);
	$('#word-two').delay(3000).fadeIn(3000);
	$('#word-three').delay(6000).fadeIn(3000);
	//

};