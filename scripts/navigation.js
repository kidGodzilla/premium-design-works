$(window).load(function() { // when the window loads...
		
	$("#toggle").click(function() { 
		$("#navigation").slideToggle(); // toggle main menu
		return false;
	});
	
	/*var mainToggle = function() {
		
		$("#navigation").slideToggle(); // slide toggle main menu
		return false;
		
	};
	
	$("#toggle").on("click", mainToggle); // trigger main toggle function*/
	
	var loadWidth = window.innerWidth; // save window load width as a variable
	
	$(window).resize(function() { // when the window is resized...
			
		if ( loadWidth !== window.innerWidth ) { // trigger for width only...
			
			if (window.innerWidth < 801) { // if width is less than 801px...
			
				$("#navigation").hide(); // hide main navigation items
				
			} else  { // else ...
			
				$("#navigation").show(); // show main navigation items
			}
			
		} // end trigger for width only
		
	}); // end window resize

}); // end window load