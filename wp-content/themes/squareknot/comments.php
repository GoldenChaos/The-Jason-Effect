<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
<?php if ( have_comments() ) : ?>
	<div class="bluedots">
		<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
	</div>
	<ul class="commentlist">
		<?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
	</ul>
 <?php else : // this is displayed if there are no comments so far ?>
	<?php if ( comments_open() ) : // comments are open, but there are no comments ?>
		<div class="bluedots">
			<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
		</div>
		<div class="empty">
			Looks like nobody's commented yet.<br />Why not be the first?
		</div>
	<?php else : // comments are closed ?>
		<!-- leave it empty -->
	<?php endif; ?>
<?php endif; ?>
<div class="clear"></div>
<div class="comment-reply-box">
	<?php global $userdata; get_currentuserinfo(); echo get_avatar( $userdata->ID, 50 ); ?>
	<div class="alignleft comment" id="newreply">
		<div class="comment-arrow"></div>
		<div class="postbit">
			<?php if ( comments_open() ) : ?>
				<div class="title" id="respond-title">
					<?php comment_form_title( '', 'Leave a Reply to %s' ); ?>
					<span class="cancel-comment-reply">
						<?php cancel_comment_reply_link('(Cancel)<div style="margin-bottom:16px;"></div>'); ?>
					</span>
				</div>
				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
					<input class="button" name="submit" type="submit" id="submit" tabindex="5" value="Post Comment" />
					<?php if ( is_user_logged_in() ) : ?>
						<textarea style="height:138px !important;margin-top:-3px;" name="comment" id="comment-loggedin" cols="100%" tabindex="4" placeholder="Type your comment here"></textarea>
					<?php else : ?>
						<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" placeholder="name" />
						<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" placeholder="email" />
						<input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" placeholder="website" />
						<textarea name="comment" id="comment" cols="100%" tabindex="4" rows="100%" placeholder="Type your comment here"></textarea>
					<?php endif; ?>
					
					<?php comment_id_fields(); ?>
					<?php do_action('comment_form', $post->ID); ?>
				</form>
			<?php endif; // if you delete this the sky will fall on your head ?>
			<div class="clear"></div>
		</div>
	</div>
</div>
<div class="clear"></div>