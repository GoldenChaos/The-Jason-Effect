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
	<div class="comment-wrap">
		<span id="comments"><?php comments_number('', '1 person had something to say', '% people had something to say' );?></span>
		<ul class="commentlist">
			<?php wp_list_comments(); ?>
		</ul>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>
	<?php if ( comments_open() ) : // comments are open, but there are no comments ?>
	<?php else : // comments are closed ?>
		<p class="nocomments">Comments have been disabled on this post.</p>
	<?php endif; ?>
<?php endif; ?>
			
<div class="post-wrap">
	<div class="post">
		<div class="post-content">
			<?php if ( comments_open() ) : ?>
				<div class="title" id="respond-title"><?php comment_form_title( 'Leave a Comment', 'Leave a Reply to %s' ); ?></div>
				<div class="cancel-comment-reply">
					<small><?php cancel_comment_reply_link(); ?></small>
				</div>
				<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
					<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
				<?php else : ?>
					<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
						<?php if ( is_user_logged_in() ) : ?>
							<div class="label"><p>Logged in as <b><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a></b>. <b><a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></b></p></div>
							<p><textarea name="comment" id="comment-loggedin" cols="100%" tabindex="4"></textarea></p>
						<?php else : ?>
							<div class="label"><p><label for="author"><b>Name</b> <i><?php if ($req) echo "(required)"; ?></i></label></p></div><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" />
							<div class="label"><p><label for="email"><b>Mail</b> <i>(will not be published) <?php if ($req) echo "(required)"; ?></i></label></p></div><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" />
							<div class="label"><p><label for="url"><b>Website</b></label></p></div><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
							<p><textarea name="comment" id="comment" cols="100%" tabindex="4" rows="100%"></textarea></p>
						<?php endif; ?>
						<input name="submit" type="submit" id="submit" tabindex="5" value="Post Comment" />
						<?php comment_id_fields(); ?>
						<?php do_action('comment_form', $post->ID); ?>
					</form>
				<?php endif; // If registration required and not logged in ?>
			<?php endif; // if you delete this the sky will fall on your head ?>
			<div class="clear"></div>
		</div>
	</div>
</div>