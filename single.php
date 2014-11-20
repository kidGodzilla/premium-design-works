<?php get_header(); ?>
	
<!-- Start Content -->
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" class="post">
    <h2><?php the_title(); ?></h2>
    <p><small>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small></p>
    <?php get_featured_image_with_link(); ?>
    <?php the_content(''); ?>
    <ul class="post-navigation">
        <li class="post-navigation-previous"><?php next_post('&laquo;&nbsp;%','', 'yes'); ?></li>
        <li class="post-navigation-next"><?php previous_post('%&nbsp;&raquo;','', 'yes'); ?></li>
    </ul>
    </article> 
    <?php comments_template(); ?>
    <?php endwhile; endif; ?>
</div>
<!-- End Content -->

<?php get_footer(); ?>
