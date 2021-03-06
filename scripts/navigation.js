/*  
Theme Name: Premium Design Works
Script Description: This is a navigation script that your mom would be responsive to.
Author: Premium Design Works
Author URI: http://www.premiumdw.com/
*/

$(window).load(function() { // when the window loads...
    
    $('#toggle').click(function(e) { // when the hamburger is clicked...  

        $('#navigation').slideToggle(); // ... toggle main-menu

        e.preventDefault(); // disable href on main-menu item

    });

    $('#navigation li.menu-item-has-children > a').after('<span class="sub-toggle">&#711;</span>'); // create the sub-toggle arrow

    $('span.sub-toggle').click(function() { // when the arrow is clicked...

        $(this).next('ul.sub-menu').slideToggle(); // ... toggle it's sub-menu

    });
	
    var loadWidth = window.innerWidth; // save window load width as a variable

    $(window).resize(function() { // when the window is resized...

        if ( loadWidth !== window.innerWidth ) { // trigger for width only...

            if (window.innerWidth < 801) { // if width is less than 801px...

                $('#navigation').hide(); // hide main navigation items

            } else  { // else ...

                $('#navigation').show(); // show main navigation items
            }

        } // end trigger for width only

    }); // end window resize

}); // end window load