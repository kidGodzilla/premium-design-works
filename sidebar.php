<!-- Start Sidebar -->
<div id="sidebar">    

	<!-- Begin Page Tree Navigation -->
    <?php wp_reset_query(); if (is_404() || is_search() ) { ?>
		
        <div id="page-tree" class="widget">
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

	if (!(is_404() || is_search())) { if ($children) {  // if isn't 404 or search and has children ?>

        <div id="sub-navigation" class="widget">
        <h2 class="sub-navigation-title"><?php echo $parentname; ?></h2>
        <ul class="sub-navigation-items">
        <?php echo $children; ?>
        </ul>
        </div>
        
    <?php } } ?> 
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
    <?php wp_reset_query(); if ( is_single() || is_archive() || is_home() || is_404() || is_search() ) { ?>
    
        <div id="blog-categories" class="widget">
            <h2 id="blog-categories-head">Blog</h2>
            <ul id="blog-categories-items"><?php echo wp_list_categories("title_li=");?>
            </ul>
        </div>
        
    <?php } ?>
    <!-- End Category Navigation -->
    
    <!-- Begin Widgets -->
    <?php dynamic_sidebar(); ?>
    <!-- Begin Widgets -->
    
</div>
<!-- End Sidebar -->