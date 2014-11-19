<?php /* Template Name: Home Page */ ?>

<?php get_header(); ?>

<!-- Start Flexslider -->
<?php add_flexslider(); ?>
<!-- End Flexslider -->

<!-- Start Content -->
<div id="content">

    <!-- Start Loop 01 -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_content(''); ?>
	<?php endwhile; endif; ?>
    <!-- End Loop 01 -->
        
    <!-- Start Loop 02 -->
    <?php rewind_posts(); // stop loop one ?>
    <?php query_posts('showposts=5'); // show 5 latest posts ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="page-excerpt-<?php the_ID(); ?>" class="page-excerpt">
    <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?>&nbsp;&raquo;</a></h3>
    <small>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small>
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo get_the_post_thumbnail( $page->ID, 'thumbnail' ); ?></a>
    <?php the_excerpt(); ?>
    <p class="full-story"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Full Story&nbsp;&raquo;</a></p>
    </article>
    <?php endwhile; endif; ?>
    
    <!-- End Loop 02 -->  
         
    <ul class="post-navigation">
    <li class="post-navigation-next"><a href="../blog/page/2/">More From The Blog&nbsp;&raquo;</a></li>
    <?php /*if(function_exists('wp_pagenavi')) { wp_pagenavi();} */ ?>
    </ul>
    
</div>
<!-- End Content -->

<?php get_footer(); ?>