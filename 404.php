<?php get_header(); ?>

<!-- Start Content -->
<div id="content" class="page">

	<article id="page-content-<?php the_ID(); ?>" class="page-content">
	<h2>404 Error:</h2>
    <p>The page you are looking for does not exist... Try a search?</p>
    <?php get_search_form(); ?>
    </article>
        
</div>
<!-- End Content -->

<?php get_footer(); ?>