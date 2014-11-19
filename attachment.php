<?php get_header(); ?>

<!-- Start Content -->
<div id="content" class="attachment">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    	<h2><?php the_title(); ?></h2>
        <?php echo wp_get_attachment_image($attachment_id, 'large');?>
        <ul class="post-navigation">
        <li class="post-navigation-previous"><?php previous_image_link(false, '&laquo; Previous'); ?></li>
        <li class="post-navigation-next"><?php next_image_link(false, 'Next &raquo;'); ?></li>
        </ul>
        <?php the_content(''); // get the attachment description ?>
	<?php endwhile; endif; ?>
 </div>
<!-- End Content -->

<?php get_footer(); ?>