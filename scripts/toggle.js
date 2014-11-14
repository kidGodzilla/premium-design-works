// responsive navigation

window.onload = function() {
		
	// toggle the main menu and current sub-menu
	jQuery("#toggle").click(function() { 
		jQuery("#navigation, #navigation li.current-menu-item ul.sub-menu, #navigation li.current-menu-parent ul.sub-menu, #navigation li.current_page_parent ul.sub-menu").toggle();
		return false;
	});
	
	// show or hide the main menu's sub-menu at 600px
	/*jQuery(window).resize(function(){
		if (jQuery(window).width() > 600) {
			jQuery("#navigation li ul.sub-menu").css('display', 'none');
		} else {
			if (jQuery(window).width() < 601) {
				jQuery("#navigation li.current-menu-item ul.sub-menu, #navigation li.current-menu-parent ul.sub-menu, #navigation li.current_page_parent ul.sub-menu").css('display', 'block');
			}
		}
	});*/

};
