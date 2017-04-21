<?php get_header(); ?>

<!-- Start Flexslider -->
<?php add_flexslider(); ?>
<!-- End Flexslider -->

<!-- Start Content -->
<div id="content" class="home">
    
    <!-- Start About Us Loop -->
    <h2><a href="about-2">About Us&nbsp;&raquo;</a></h2>
    <div id="seo-box">
        <div id="home-seo">  
        <?php rewind_posts(); // stop previous loop ?>
        <?php query_posts(); // show home page content ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(''); ?>
        <?php endwhile; endif; ?>
        </div>
        <ul id="home-social-icons">
        <li><a href="https://www.facebook.com/premiumdw"  target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ico-facebook.svg" alt="Visit Our Facbook Page"></a></li>
        <li><a href="https://twitter.com/premiumdw" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ico-twitter.svg" alt="Visit Our Twitter Feed"></a></li>
        <li><a href="https://www.youtube.com/channel/UCJkdeoIJ9lbsDOW0Ctiqsyw/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ico-youtube.svg" alt="Visit Our YouTube Channel"></a></li>
        </ul>
    </div>
    <!-- End About Us Loop -->
    
    <!-- Start Services Loop -->
    <h2><a href="services">Services&nbsp;&raquo;</a></h2>
    <div id="services-box">
    <?php rewind_posts(); // stop loop one ?>
    <?php query_posts(array('post_type' => 'page', 'posts_per_page' => -1, 'post_status' => 'publish','post_parent' => 185,'order' => 'ASC','orderby' => 'menu_order')); // show 5 latest posts ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="services-excerpt-<?php the_ID(); ?>" class="services-excerpt">
    <h3 id="post-<?php the_ID(); ?>" class="services-home"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?><br>Services</a></h3>
    </article>
    <?php endwhile; endif; ?>
    </div>
    <!-- End Services Loop -->

    <!-- Start Portfolio Loop -->
    <h2><a href="services">Portfolio&nbsp;&raquo;</a></h2>
    <div id="portfolio-box">
    <?php rewind_posts(); // stop loop one ?>
    <?php query_posts(array('post_type' => 'page', 'posts_per_page' => -1, 'post_status' => 'publish','post_parent' => 186,'order' => 'ASC','orderby' => 'menu_order')); // show 5 latest posts ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="portfolio-excerpt-<?php the_ID(); ?>" class="portfolio-excerpt">
    <h3 id="post-<?php the_ID(); ?>" class="services-home"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?><br>Portfolio</a></h3>
    </article>
    <?php endwhile; endif; ?>
    </div>
    <!-- End Portfolio Loop -->
    
    <!-- Start Blog Loop -->
    <h2><a href="blog">Blog&nbsp;&raquo;</a></h2>
    <div id="blog-box">
    <?php rewind_posts(); // stop loop one ?>
    <?php query_posts(array('posts_per_page' => 6 )); // show 6 latest podtings ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="blog-excerpt-<?php the_ID(); ?>" class="blog-excerpt">
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo get_the_post_thumbnail( $page->ID, 'thumbnail' ); ?></a><div class="blog-excerpt-text"><h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?>&nbsp;&raquo;</a></h3>
    <small><?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small>
    </div>
    </article>
    <?php endwhile; endif; ?>
    </div>    
    <!-- End Blog Loop --> 
    
</div>
<!-- End Content -->

<?php get_footer(); ?>