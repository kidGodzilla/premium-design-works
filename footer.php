<?php get_sidebar(); ?>

</div>
<!-- End Middle -->

<!-- Start Footer Menu -->
<?php wp_nav_menu( array('theme_location' => 'footer-menu','container' => 'div','container_id' => 'links')); ?>
<!-- End Footer Menu -->

<!-- Start Footer -->
<div id="footer">
	<p>&copy;1997-<?php print ("" . date ('Y') . ""); ?> Premium Design Works.<span class="login"><?php wp_loginout(); ?>. <?php wp_register('','.'); ?></span></p>
</div>
<!-- End Footer -->

<!-- START ANALYTICS 
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-3981006-1";
urchinTracker();
</script>
 END ANALYTICS -->

<!-- Start WP Footer -->
<?php wp_footer(); ?>
<!-- End WP Footer -->


</body>
</html>