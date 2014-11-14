<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<!--  
Theme Name: Premium Design Works
Description: This is a theme your mom would be responsive to.
Version: 2.0
Author: Premium Design Works
Author URI: http://www.premiumdw.com/
-->
    
<!-- Start Title Tag -->
<title><?php if ( is_home() || is_archive() || is_front_page()) { bloginfo('description'); } elseif ( is_single() || is_page()) { the_title(); if ( is_page() && $post->post_parent ) { echo ' | '; echo get_the_title($post->post_parent); } } echo ' | '; bloginfo('name'); echo ' | '; echo 'Seattle, WA.'; ?></title>
<!-- End Title Tag -->
    
<!-- Start Meta -->
<meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<!-- End Meta -->
	
<!-- Begin Open Graph Meta for Facebook -->
<meta property="og:title" content="<?php the_title(); ?>"/>
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
<meta property="og:url" content="<?php the_permalink(); ?>"/>
<?php $fb_image = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'thumbnail'); ?>
<?php if ($fb_image) : ?>
<meta property="og:image" content="<?php echo $fb_image[0]; ?>" />
<?php endif; ?>
<meta property="og:type" content="<?php if (is_single() || is_page()) { echo "article"; } else { echo "website";} ?>"
/>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
<!-- End Open Graph Meta for Facebook -->
    
<!-- Start Links -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/icons/flaticon.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/flame.ico" />
<!-- End Links -->
    
<!-- Start Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/spotlight-page.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/toggle.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/flexslider.js"></script> 
<script type="text/javascript" charset="utf-8">
	$(window).load(function() {
		$('.flexslider').flexslider();
	});
</script>
<!-- End Scripts -->

<!--[if lt IE 9]><script type="text/javascript"> window.onload = function() { window.location = "http://www.premiumdw.com/articles/i-just-cant-support-you-any-longer-internet-explorer-8/" };</script><![endif]-->

<!-- Start WP Head -->
<?php wp_head(); ?> 
<!-- End WP Head -->

</head>
<body <?php body_class(); ?>>

<!-- Start Header -->
<div id="header">

	<!-- Begin Logo -->
    <h1 id="logo"><a href="<?php echo get_settings('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Premium Design Works" /></a></h1>
    <!-- End Logo -->
    
    <!-- Start Utility -->
    <div id="utility">
        <ul>
        <li><a href="http://www.sccc.premiumdw.com">Students</a></li>
        <li><a href="http://www.clients.premiumdw.com/">Clients</a></li>
        </ul>
    </div>
    <!-- End Utility -->
    
    <!-- Start Toggle -->
    <div id="toggle">
    	<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/img-toggle.png" /></a>
    </div>
    <!-- END Toggle -->
    
</div>
<!-- End Header -->

<!-- Start Main Menu -->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation' ) ); ?>
<!-- End Main Menu -->

<!-- Start Middle -->
<div id="middle">

	<?php if (!is_front_page()) { ?>
    
	<!-- Start Breadcrumbs -->
	<nav id="breadcrumbs">
	<?php bcn_display(); // display breadcrumb ?>
    </nav>
    <!-- End Breadcrumbs -->
    
    <?php } ?>
