<?php get_header(); ?>
	
<!-- Start Content -->
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <p><small>Posted on <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?></small></p>
    <?php the_content(''); ?>
    <?php comments_template(); ?>
    <?php endwhile; endif; ?>
</div>
<!-- End Content -->

<?php get_footer(); ?>
