// responsive navigation

window.onload = function() {
		
	// toggle the main menu and current sub-menu
	$("#toggle").click(function() { 
		jQuery("#navigation").slideToggle();
		return false;
	});
	
	$(window).resize(function(){

		if ($(window).width() > 801) {
			$("#navigation").css('display', 'block');
		}
		
		if ($(window).width() < 801) {
			$("#navigation").css('display', 'none');
		}
		
	});	

};
