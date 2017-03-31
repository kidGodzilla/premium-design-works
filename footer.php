<?php wp_reset_query(); if ( !is_front_page() ) { get_sidebar(); } ?>

</div>
<!-- End Middle -->

<!-- Start Footer -->
<div id="footer">
    
    <!-- Begin Bottom Crop Marks -->
    <img id="bottom-left" src="<?php bloginfo('template_directory'); ?>/images/bottom-left.svg" />
    <img id="bottom-right" src="<?php bloginfo('template_directory'); ?>/images/bottom-right.svg" />
    <!-- End Bottom Crop Marks -->
    
    <!-- Begin Red Footer box -->
    <div id="footer-box">
    
        <!-- Start Footer Menu -->
        <?php wp_nav_menu( array('theme_location' => 'footer-menu','container' => 'div','container_id' => 'footer-menu')); ?>
        <!-- End Footer Menu -->
        
        <!-- Begin Social -->
        <div id="social-icons">
        <h2>Find Us</h2>
        <ul id="social-icons-items">
        <li><a href="https://www.facebook.com/premiumdw"  target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ico-facebook-white.svg" alt="Visit Our Facbook Page"></a></li>
        <li><a href="https://twitter.com/premiumdw" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ico-twitter-white.svg" alt="Visit Our Twitter Feed"></a></li>
        <li><a href="https://www.youtube.com/channel/UCJkdeoIJ9lbsDOW0Ctiqsyw/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/ico-youtube-white.svg" alt="Visit Our YouTube Channel"></a></li>
        </ul>
        </div>
        <!-- End Social -->
        
    </div>
    <!-- End Red Footer box -->
    
    <!-- Begin Copyright Info -->
    <div id="copyright">
        <p>&copy;1997-<?php print ("" . date ('Y') . ""); ?> Premium Design Works.<span class="login"><?php wp_loginout(); ?>. <?php wp_register('','.'); ?></span></p>
    </div>
    <!-- End Copyright Info -->
    
</div>
<!-- End Footer -->

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