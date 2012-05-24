<?php get_header(); ?>
	<!--  <div class="navigation centered">
		<div class="nav-button alignleft"><?php previous_post_link('&laquo; Older Entries') ?></div>
		<div class="nav-button alignright"><?php next_post_link('Newer Entries &raquo;') ?></div>
	</div>
	<div id="searchwrapper" class="centered">
		<div id="searchwrapper-left"></div>
		<div id="searchwrapper-right"></div>
		<center>
			<form method="get" id="searchform" action="http://www.thejasoneffect.net/" >
				<input type="text" name="s" id="s" onfocus="if(this.value=='Search TJE')this.value='';" onblur="if(this.value=='')this.value='Search TJE';" value="Search TJE" />
				<input type="submit" id="searchsubmit" value="" />
			</form>	
		</center>
	</div> -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
	<div class="postwrapper">
		<div class="postwrapper-left"></div>
		<div class="postwrapper-right"></div>
		<div class="post">
			<div class="minical">
				<span class="date-month"><?php the_time('M') ?></span><br />
				<span class="date-day"><?php the_time('jS') ?></span>
			</div>
			<div class="minicomments">
				<?php comments_popup_link('<span class="comment-count">0</span><br /><span class="comment-text">comments</span>', '<span class="comment-count">1</span><br /><span class="comment-text">comment</span>', '<span class="comment-count">%</span><br /><span class="comment-text">comments</span>'); ?>
			</div>
			<div class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><p><b>filed under</b>: <?php the_tags( '', ', ', ''); ?></p></div>
			<div class="post-content">
				<?php the_content('<span class="button">Keep going &raquo;</span>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
			<?php edit_post_link('<span class="button">Edit this entry &raquo;</span>', '<p>', '</p>'); ?>
		</div>
	</div>
	<?php comments_template(); ?>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>