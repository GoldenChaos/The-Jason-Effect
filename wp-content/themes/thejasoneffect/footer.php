		<?php if(is_single() || is_page()): ?>
			<div class="comment-body" id="footer">
				<!-- Hiding this for now since it breaks the mobile layout and in general isn't pretty.
					<?php if(is_single()) {
						previous_post_link('<div class="post-nav alignleft" style="margin-left:0;">&laquo; %link</div>');
						next_post_link('<div class="post-nav alignleft">%link &raquo;</div>');
						}
					?>
				-->
				<span id="copyright">Copyright &copy; 2005-2013 Jason Rappaport</span>
				<div class="clear"></div>
			</div>
		<?php endif; ?>
	</div> <!-- /contentinner -->
</div> <!-- /content -->
<?php wp_footer(); ?>
</body>
</html>