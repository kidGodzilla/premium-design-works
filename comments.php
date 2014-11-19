<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				<p class="nocomments">This post is password protected. Enter the password to view comments.<p>
				<?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>

<!-- Begin Author Dedication -->
<p class="dedication"><a href="http://www.mikesinkula.com/" title="Link to: http://www.mikesinkula.com/" target="_blank"><img class="myface" src="<?php bloginfo('template_directory'); ?>/images/img-myface.jpg" /></a><?php echo get_the_author_meta('description'); ?><span class="social-icons"><a title="Mike Sinkula's Twitter Feed" href="http://twitter.com/#!/mikesinkula" target="_blank"><img title="Mike Sinkula's Twitter Feed" src="<?php bloginfo('template_directory'); ?>/images/ico-twitter.png" alt="Mike Sinkula's Twitter Feed"  /></a><a title="Mike Sinkula's FaceBook Page" href="http://www.facebook.com/msinkula?ref=profile" target="_blank"><img title="Mike Sinkula's FaceBook Page" src="<?php bloginfo('template_directory'); ?>/images/ico-facebook.png" alt="Mike Sinkula's FaceBook Page"  /></a><a title="Mike Sinkula's LinkedIn Profile" href="http://www.linkedin.com/ppl/webprofile?action=vmi&amp;id=5408871&amp;pvs=pp&amp;authToken=C0zy&amp;authType=name&amp;trk=ppro_viewmore&amp;lnk=vw_pprofile" target="_blank"><img title="Mike Sinkula's LinkedIn Profile" src="<?php bloginfo('template_directory'); ?>/images/ico-linkedin.png" alt="Mike Sinkula's LinkedIn Profile"  /></a><a title="Mike Sinkula's YouTube Channel" href="http://www.youtube.com/mikesinkula" target="_blank"><img title="Mike Sinkula's YouTube Channel" src="<?php bloginfo('template_directory'); ?>/images/ico-youtube.png" alt="Mike Sinkula's YouTube Channel"  /></a><a title="Mike Sinkula's Flickr Photo Stream" href="http://www.flickr.com/photos/51088942@N05/" target="_blank"><img title="Mike Sinkula's Flickr Photo Stream" src="<?php bloginfo('template_directory'); ?>/images/ico-flickr.png" alt="Mike Sinkula's Flickr Photo Stream"  /></a></span></p>
<!-- End Author Dedication -->

<!-- You can start editing here. -->
<div id="comments-box">
<?php if ( have_comments() ) : ?>
	<h3 id="comments-head"><a name="comments"><?php comments_number('0 Comments:', '1 Comment:', '% Comments:' );?></a></h3>
	<ol class="commentlist">
	<?php wp_list_comments(); ?>
	</ol>
	<div class="navigation">
		<div class="alignleft"><p><?php previous_comments_link() ?></p></div>
		<div class="alignright"><p><?php next_comments_link() ?></p></div>
	</div>			
 <?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>
	<?php endif; ?>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
<div id="respond">
<h3><?php comment_form_title( 'Leave a Comment:', 'Leave a Comment to %s' ); ?></h3>
<div class="cancel-comment-reply">
	<p><small><?php cancel_comment_reply_link(); ?></small></p>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

<?php else : ?>
<p>Don't forget to get your <a href="http://en.gravatar.com/" target="_blank">Globally Recognized Avatar</a>.</p>
<label for="author">Name: <?php /*if ($req) echo "(required)";*/ ?></label>
<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>"  tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />

<label for="email">Mail: <?php /*if ($req) echo "(required)";*/ ?></label>
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>"  tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />

<label for="url">Website:</label>
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>"  tabindex="3" />

<?php endif; ?>
<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
<label for="comment">Comment:</label>
<textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea>
<input name="submit" type="submit" class="submit" tabindex="5" value="Submit Comment" />
<?php comment_id_fields(); ?>
<?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; // If registration required and not logged in ?>
</div>
<?php endif; // if you delete this the sky will fall on your head ?>
</div>