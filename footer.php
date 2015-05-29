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

<!-- Begin Facebook Script 
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=107007926016124";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End Facebook Script -->

<!-- Start Analytics -->
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-3981006-1";
urchinTracker();
</script>
<!-- End Analytics -->

<!-- Start WP Footer -->
<?php wp_footer(); ?>
<!-- End WP Footer -->

</body>
</html>