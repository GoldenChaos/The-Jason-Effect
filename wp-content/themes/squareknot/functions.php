<!-- Custom comments styling -->
<?php function mytheme_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		extract($args, EXTR_SKIP);

		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
?>
		<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
		<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
			<div class="comment-arrow"></div>
			<?php if ( 'div' != $args['style'] ) : ?>
				<div id="div-comment-<?php comment_ID() ?>" class="postbit">
			<?php endif; ?>
				<div class="title">
					<?php printf(__('%s commented on'), get_comment_author_link()) ?>
					<span class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
						<?php
							/* translators: 1: date, 2: time */
							printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
						?>:
					</span>
				</div>
				<?php comment_text() ?>
				<div class="feed-button alignright">
					<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => '9'))) ?>
				</div>
		<?php if ( 'div' != $args['style'] ) : ?>
			</div>
			<div class="clear"></div>
		<?php endif; ?>
<?php
        }
?>