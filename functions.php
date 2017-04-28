<?php

/*  
Theme Name: Premium Design Works
Description: This is a theme your mom would be responsive to.
Version: 3.0
Author: Premium Design Works
Author URI: http://www.premiumdw.com/
*/

// Link to admin styles
add_editor_style('admin.css');
//

//  Register Sidebar
register_sidebar(array('before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>', 'before_title' => '<h2>', 'after_title' => '</h2>',));
//

// Register Menus
register_nav_menus(array('main-menu' => __('Main Menu'), 'footer-menu' => __('Footer Menu')));	
//

// Create Post Thumbnails
add_theme_support('post-thumbnails');
//

// Create Custom Image Sizes
add_image_size('icon', 140, 140, true); // 140 pixels wide by 140 pixels tall, hard crop mode

// Create Page Excerpts
add_post_type_support('page', 'excerpt');
//

// Get My Title Tag
function get_my_title_tag() {
	
    global $post;

    if (is_front_page()) {  // for the site’s front page

        bloginfo('description'); // retrieve the site tagline

    } elseif (is_page()) { // for your site’s pages

        the_title(); // retrieve the page title 

        if ($post->post_parent) { // if the page has a parent

            echo ' | '; // separator with spaces
            echo get_the_title($post->post_parent);  // retrieve the parent page title

        }

    } elseif (is_category()) { // for your site's categories

        echo get_the_category()[0]->cat_name; // retrieve the category name

    } elseif (is_single()) { // for your site’s postings

        the_title(); // retrieve the posting title 
        echo ' | '; // separator with spaces
        echo get_the_category()[0]->cat_name; // retrieve the category name

    } else { // for everything else

        bloginfo('description'); // retrieve the site tagline

    }

    echo ' | '; // separator with spaces
    bloginfo('name'); // retrieve the site name
    echo ' | '; // separator with spaces
    echo 'Seattle, WA.'; // write in the location
	
}
//

// Get Gateway Page Spotlights
function get_gateway_spotlights() {
	
    global $post;

    $words = get_post_meta($post->ID, 'spotlight-page', true);
    $get = explode(',' , $words);

    $word01 = $get[0];
    $word02 = $get[1];
    $word03 = $get[2];

    if ($words) {

        echo '<div id="spotlight-page">';
        echo '<span id="word-one">'.$word01.'. </span>';
        echo '<span id="word-two">'.$word02.'. </span>';
        echo '<span id="word-three">'.$word03.'. </span>';
        echo '</div>';

    }
	
}
//

// Get Portfolio Galleries
function get_portfolio() {
    
    global $post; // don't forget to make this a global variable inside your function

    $attachments = get_children(array('post_parent' => $post->ID, 'order' => 'ASC', 'orderby' => 'menu_order','post_type' => 'attachment'));

    if ($attachments) { 	

        $portfolio;

        foreach ($attachments as $attachment) { 

            $myPermalink = get_permalink($attachment->ID); // link to attachment page
            $myImage = wp_get_attachment_image($attachment->ID, 'medium'); // image
            $myTitle = apply_filters('the_title', $attachment->post_title); // title
            $myCaption = get_post_field('post_excerpt', $attachment->ID); // caption

            $portfolio .= '<section class="portfolio-piece"><a href="'.$myPermalink.'">'.$myImage.'</a><h3><a href="'.$myPermalink.'">'.$myTitle.'&nbsp;&raquo;</a></h3><p>'.$myCaption.' <a href="'.$myPermalink.'" class="more">View&nbsp;&raquo;</a></p></section>';			      

        } // end foreach 

    } // end if attachments

    return $portfolio;
		
} // end function
	
add_shortcode('portfolio', 'get_portfolio');
//

// Get SEO Paragraph From Home Page
function get_seo() {

    $myPosting = get_post(8);

    $mySEO = $myPosting->post_content;

    echo $mySEO;
	
}
//

// Get Featured Case Study 
function get_featured_case_study($atts) {
	    
    $myPostID = intval($atts['id']); // sets the id to pass

    $myPosting = get_post($myPostID); // gets the post of id passed

    $caseTitle = $myPosting->post_title; // get title
    $caseCategory = get_the_category($myPosting->ID)[0]->name; // get category name
    $caseExcerpt = $myPosting->post_excerpt; // get excerpt
    $caseImage = get_the_post_thumbnail($myPostID, 'thumbnail'); // get featured thumbnail
    $caseLink = get_permalink($myPosting->ID); // get permalink

    $myCaseStudy = '<section class="featured-case"><h3><a href="'.$caseLink.'">'.$caseCategory.': '.$caseTitle.' &raquo;</a></h3><a href="'.$caseLink.'">'.$caseImage.'</a><p>'.$caseExcerpt.'&nbsp;<a href="'.$caseLink.'" class="more">Full Story&nbsp;&raquo;</a></p></section>'; // write it up...

    return $myCaseStudy; // ... and return it, bitch.
	
}

add_shortcode('casestudy', 'get_featured_case_study'); // create the shortcode for the function
//

// Get Featured Page 
function get_featured_page($atts) {
	    
    $myPostID = intval($atts['id']); // sets the id to pass

    $myPosting = get_post($myPostID); // gets the post of id passed

    $pageTitle = $myPosting->post_title; // get title
    $parentTitle = get_the_title($myPosting->post_parent);
    $pageExcerpt = $myPosting->post_excerpt; // get excerpt
    $pageImage = get_the_post_thumbnail($myPostID, 'icon'); // get featured thumbnail
    $pageLink = get_permalink($myPosting->ID); // get permalink

    $myPage = '<article class="page-excerpt"><a href="'.$pageLink.'">'.$pageImage.'</a><h3><a href="'.$pageLink.'">'.$pageTitle.' &raquo;</a></h3><p>'.$pageExcerpt.'&nbsp;<a href="'.$pageLink.'" class="more">View '.$pageTitle.' '.$parentTitle.'&nbsp;&raquo;</a></p></article>'; // write it up...

    return $myPage; // ... and return it, bitch.
	
}

add_shortcode('page', 'get_featured_page'); // create the shortcode for the function
//

// Get Child Pages 
function get_child_pages() {
	
    global $post;

    rewind_posts(); // stop any previous loops 
    query_posts(array('post_type' => 'page', 'posts_per_page' => -1, 'post_status' => 'publish','post_parent' => $post->ID,'order' => 'ASC','orderby' => 'menu_order')); // query and order child pages 

    while (have_posts()) : the_post(); 


        $childID = $post->ID; // post id
        $childTitle = $post->post_title; // post titl
        $parentTitle = get_the_title($post->post_parent);
        $childImage = get_the_post_thumbnail($post->ID, 'icon'); // get featured thumbnail
        $childExcerpt = $post->post_excerpt; // post excerpt
        $childPermalink = get_permalink( $post->ID ); // post permalink

        echo '<article id="page-excerpt-'.$childID.'" class="page-excerpt">';
        echo '<a href='.$childPermalink.'>'.$childImage.'</a>';
        echo '<h3><a href="'.$childPermalink.'">'.$childTitle.' &raquo;</a></h3>';
        echo '<p>'.$childExcerpt.' <a href="'.$childPermalink.'" class="more">View Our '.$childTitle.' '.$parentTitle.'&nbsp;&raquo;</a></p>';
        echo '</article>';

    endwhile;

    wp_reset_query(); // reset query
        
}
//
	
// Add a Flexslider Gallery	
function add_flexslider() {
	
    global $post; // don't forget to make this a global variable inside your function

    $attachments = get_children(array('post_parent' => $post->ID, 'order' => 'ASC', 'orderby' => 'menu_order',  'post_type' => 'attachment', 'post_mime_type' => 'image',));

    if ($attachments) { // see if there are images attached to posting

        echo '<div id="spotlight-home" class="flexslider">';
        echo '<ul class="slides">';

        foreach ( $attachments as $attachment ) { // create the list items for images with captions

            echo '<li>';
            echo wp_get_attachment_image($attachment->ID, 'full'); // get image size large
            echo '<span class="description">';
            echo get_post_field('post_content', $attachment->ID); // get image description field
            echo '</span>';
            echo '</li>';

        }

        echo '</ul>';
        echo '</div>';

    } // end see if images attached

} 
// 

// Get Featured Image with a Custom Link
function get_featured_image_with_link() {
	
    global $post;

    $theImage = get_the_post_thumbnail($page->ID, 'large');
    $theLink = get_post_meta($post->ID, 'featured-image-link', true);

    echo '<figure class="featured-image">';

    if ($theLink) { 

        echo '<a href="'.$theLink.'" target="_blank" title="View: '.$theLink.'">'.$theImage.'</a>';

    } else {

        echo $theImage;

    }

    echo '</figure>';
	
}
//

/* ------ Other Authors ----- */

// Remove Inline Styles from Captions
add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
add_shortcode('caption', 'fixed_img_caption_shortcode');
function fixed_img_caption_shortcode($attr, $content = null) {
	
    if (!isset( $attr['caption'])) {
        if (preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches )) {
            $content = $matches[1];
            $attr['caption'] = trim($matches[2]);
        }
    }

	$output = apply_filters('img_caption_shortcode', '', $attr, $content);
    
	if ($output != '')
		return $output;

	extract(shortcode_atts(array('id' => '', 'align' => 'alignnone', 'width' => '', 'caption' => ''), $attr));

	if (1 > (int) $width || empty($caption))
		return $content;

	if ($id) $id = 'id="'.esc_attr($id).'" ';

	return '<div '.$id.'class="wp-caption '.esc_attr($align).'" >'.do_shortcode( $content ).'<p class="wp-caption-text">'.$caption.'</p></div>';
}
//

//  Show Gravatars
function show_avatar($comment, $size) {	
			
	$email=strtolower(trim($comment->comment_author_email));
	$rating = "G"; // [G | PG | R | X]
	 
	if (function_exists('get_avatar')) {
		
		echo get_avatar($email, $size);
	
	} else {
  
	  $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=
		 ".md5($emaill)."&size=".$size."&rating=".$rating;
		 
	  echo "<img src='$grav_url'/>";
	  
	}
	
}
//

?>