<?php get_header(); ?>

<!-- Begin Content -->
<div id="content">
    
    <article id="page-content-<?php the_ID(); ?>" class="page-content">    
    <h2>Search Results:</h2>
    <?php if (have_posts()) : ?>
    <p>Here's what we found for you...</p>
    <?php while (have_posts()) : the_post(); ?>
    <div class="page-excerpt" id="page-excerpt-<?php the_ID(); ?>">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?>&nbsp;&raquo;</a></h3>
    <p><?php echo get_the_excerpt(); // page excerpts ?>
    <a href="<?php the_permalink() ?>" class="more" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">View Result&nbsp;&raquo;</a></p>
    </div>
    <?php endwhile; ?>
    <ul class="post-navigation">
    <li class="post-navigation-previous"><?php previous_posts_link( '&laquo;&nbsp;Previous' ) ?></li>
    <li class="post-navigation-next"><?php next_posts_link( 'Next&nbsp;&raquo;'); ?></li>
    </ul>
   	<section class="search-again">
    <p>Still not satisfied... Try another search?</p>
    <?php get_search_form(); ?>
    </section>
    <?php else : ?>
    <p>No posts found. Try a different search?</p>
    <?php get_search_form(); ?>
    <?php endif; ?> 
    </article>
    
</div>
<!-- End Content -->

<?php get_footer(); ?>