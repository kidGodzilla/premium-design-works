<?php get_header(); ?>

<!-- Begin Content -->
<div id="content">
    <h2><?php if (is_category()) { single_cat_title(); } else { single_post_title(); } ?></h2>
    <p><?php get_seo(); ?></p>
    <?php while (have_posts()) : the_post(); ?>
    <article class="blog-excerpt">
    <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?>&nbsp;&raquo;</a></h3>
    <small>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small>
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo get_the_post_thumbnail( $page->ID, 'thumbnail' ); ?></a>
    <?php the_excerpt(); ?>
    <p class="full-story"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Full Story&nbsp;&raquo;</a></p>
    </article>
    <?php endwhile; ?>
    <ul class="post-navigation">
    <li class="post-navigation-previous"><?php previous_posts_link( '&laquo;&nbsp;Newer' ) ?></li>
    <li class="post-navigation-next"><?php next_posts_link( 'Older&nbsp;&raquo;'); ?></li>
    </ul>
</div>
<!-- End ContentT -->

<?php get_footer(); ?>
