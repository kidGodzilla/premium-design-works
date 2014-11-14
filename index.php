<?php get_header(); ?>

<!-- BEGIN CONTENT -->
<div id="content">
    <h2>Blog</h2>
    <p>Premium Design Works specializes in delivering the brand of your business, organization or artistic endeavor to new clientele via: <a title="Logo Portfolio" href="http://www.premiumdw.com/portfolio/logos/">logos</a>, <a title="Print Portfolio" href="http://www.premiumdw.com/portfolio/print/">print</a>, and <a title="Websites Portfolio" href="http://www.premiumdw.com/portfolio/websites/">websites</a>.</p>
    <?php while (have_posts()) : the_post(); ?>
    <article class="blog-excerpt">
    <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?> &raquo;</a></h3>
    <small>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small>
    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo get_the_post_thumbnail( $page->ID, 'thumbnail' ); ?></a>
    <?php the_excerpt(); ?>
    <p class="full-story"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Full Story &raquo;</a></p>
    </article>
    <?php endwhile; ?>
    <nav class="post-navigation">
    <span class="post-navigation-previous"><?php previous_posts_link('&laquo; Newer Postings'); ?></span>
    <span class="post-navigation-next"><?php next_posts_link('Older Postings &raquo;'); ?></span>
	</nav>
</div>
<!-- END CONTENT -->

<?php get_footer(); ?>
