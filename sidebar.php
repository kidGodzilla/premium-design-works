<!-- Start Sidebar -->
<link href="style.css" rel="stylesheet" type="text/css" />

<div id="sidebar">    

	<!-- Begin Home Page Tree -->
    <?php wp_reset_query(); if ( is_front_page() ) { ?>
		
        <div id="page-tree" class="widget">
            <h2>About</h2>
            <ul>
            <?php echo wp_list_pages("title_li=&child_of=184"); ?>
            </ul>
            <h2>Services</h2>
            <ul>
            <?php echo wp_list_pages("title_li=&child_of=185"); ?>
            </ul>
            <h2>Portfolio</h2>
            <ul>
            <?php echo wp_list_pages("title_li=&child_of=186"); ?>
            </ul>
        </div>
	
	<?php } ?>
	<!-- End Home Page Tree -->

    <!-- Begin Sub-Page Navigation -->
    <?php if($post->post_parent) {
			
		$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&exclude=106,729" ); 
		$parent_title = get_the_title($post->post_parent);
		
		} else {
			
		$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&exclude=106,729");
		$parent_title = get_the_title($post->post_parent);
		
		}
		
		if ( ($children) && ( !( is_404() || is_search() ) ) )  { ?>
		
        <div id="sub-navigation" class="widget">
            <h2 id="sub-navigation-head"><?php  echo $parent_title; ?></h2>
            <ul id="sub-navigation-items">
            <?php echo $children; ?>
            </ul>
        </div>
    
    <?php } ?>   
    <!-- End Sub- Page Navigation -->
        
    <!-- Begin Category Navigation -->
    <?php wp_reset_query(); if ( is_single() || is_archive() || is_home() || is_front_page() ) { ?>
    
        <div id="blog-categories" class="widget">
            <h2 id="blog-categories-head">Blog</h2>
            <ul id="blog-categories-items"><?php echo wp_list_categories("title_li=");?>
            </ul>
        </div>
        
    <?php } ?>
    <!-- End Category Navigation -->
    
    <!-- Begin Attachment Navigation -->
    <?php if (is_attachment()) { ?>
    
        <div id="attachment-navigation" class="widget">
            <h2>Portfolio</h2>
            <ul>
            <?php echo wp_list_pages("title_li=&child_of=186"); ?>
            </ul>
        </div>
		
	<?php } ?>
    <!-- End Attachment Navigation  -->
    
    <!-- Begin Widgets -->
    <?php if ( !(is_front_page() ) ) { dynamic_sidebar(); } ?>
    <!-- Begin Widgets -->
    
    <!-- Begin Contact -->
    <div id="contact-us" class="widget">
        <h2>Contact</h2>
        <ul id="contact-us-items">
        <li><a href="https://goo.gl/maps/saB70" target="_blank">13612 14th Ave S<br>Seattle, WA. 98168</a></li>
        <li>(206) 851-7636</li>
        <li><a href="mailto:info@premiumdw.com?subject=Help me Obi Wan Kanobi. You're my only hope.">info@premiumdw.com</a></li>
        </ul>
    </div>
    <!-- End Contact -->
    
    <!-- Begin Social 
    <div id="social-icons" class="widget">
    	<h2>Social</h2>
    	<a href="http://twitter.com/mikesinkula" title="Mike Sinkula's Twitter Feed" target="_blank"><img src="<?php/* bloginfo('template_directory');*/ ?>/images/img-twitter.png" alt="Mike Sinkula's Twitter Feed" /></a>
        <a href="http://www.facebook.com/msinkula?ref=profile"  title="Mike Sinkula's FaceBook Page" target="_blank"><img title="Mike Sinkula's FaceBook Page" src="<?php /*bloginfo('template_directory');*/ ?>/images/img-facebook.png" alt="Mike Sinkula's FaceBook Page"  /></a>
        <a href="http://www.linkedin.com/ppl/webprofile?action=vmi&amp;id=5408871&amp;pvs=pp&amp;authToken=C0zy&amp;authType=name&amp;trk=ppro_viewmore&amp;lnk=vw_pprofile" title="Mike Sinkula's LinkedIn Profile" target="_blank"><img title="Mike Sinkula's LinkedIn Profile" src="<?php /*bloginfo('template_directory');*/ ?>/images/img-linkedin.png" alt="Mike Sinkula's LinkedIn Profile"  /></a>
        <a href="http://www.youtube.com/user/mikesinkula/videos" title="Mike Sinkula's YouTube Channel" target="_blank"><img title="Mike Sinkula's YouTube Channel" src="<?php /*bloginfo('template_directory');*/ ?>/images/img-youtube.png" alt="Mike Sinkula's YouTube Channel"  /></a>
        <a href="http://www.flickr.com/photos/51088942@N05/" title="Mike Sinkula's Flickr Photo Stream" target="_blank"><img title="Mike Sinkula's Flickr Photo Stream" src="<?php /*bloginfo('template_directory');*/ ?>/images/img-flickr.png" alt="Mike Sinkula's Flickr Photo Stream"  /></a>
        </div>
        End Social -->
    
</div>
<!-- End Sidebar -->
