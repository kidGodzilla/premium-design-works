<!-- Start Sidebar -->
<div id="sidebar">    

	<!-- Begin Home Page Tree Navigation -->
    <?php wp_reset_query(); if (is_front_page() || is_404() || is_search() ) { ?>
		
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
	<!-- End Home Page Tree Navigation -->
    
    <!-- Begin Sub-Page Navigation -->
    <?php	
	
	if ($post->post_parent) { // if has a post parent
            
		$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0" ); 
		$parentname = get_the_title($post->post_parent);

	} else { // if does not have a post parent

		$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0" ); 
		$parentname = get_the_title($post->ID);
	
	}

	if ($children && !(is_404)) { // if has children ?>

        <div id="sub-navigation" class="widget">
        <h2 class="sub-navigation-title"><?php echo $parentname; ?></h2>
        <ul class="sub-navigation-items">
        <?php echo $children; ?>
        </ul>
        </div>
        
    <?php }	?> 
    <!-- End Sub-Page Navigation -->
    
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
        
    <!-- Begin Category Navigation -->
    <?php wp_reset_query(); if ( is_single() || is_archive() || is_home() || is_front_page() || is_404() || is_search() ) { ?>
    
        <div id="blog-categories" class="widget">
            <h2 id="blog-categories-head">Blog</h2>
            <ul id="blog-categories-items"><?php echo wp_list_categories("title_li=");?>
            </ul>
        </div>
        
    <?php } ?>
    <!-- End Category Navigation -->
    
    <!-- Begin Widgets -->
    <?php if (!(is_front_page())) { dynamic_sidebar(); } ?>
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
    
</div>
<!-- End Sidebar -->