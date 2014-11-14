<?php get_header(); ?>

<!-- Start Content -->
<div id="content" class="attachment">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    	<h2><?php the_title(); ?></h2>
        <?php echo wp_get_attachment_image($attachment_id, 'full');?>
        <?php the_content(''); // get written page content ?>
          <ul class="post-navigation">
            <li class="post-navigation-previous"><?php previous_image_link(false, '&laquo; Previous'); ?></li>
            <li class="post-navigation-next"><?php next_image_link(false, 'Next &raquo;'); ?></li>
          </ul>
	<?php endwhile; endif; ?>
    <small>attachment.php</small>   
 </div>

<!-- End Content -->

<?php get_footer(); ?>