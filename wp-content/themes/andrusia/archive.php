<?php get_header(); ?>	
	<!-- <div class="navigation centered">
		<div class="nav-button alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="nav-button alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
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
	
	<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<center><h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2></center>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<center><h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2></center>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<center><h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2></center>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<center><h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2></center>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<center><h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2></center>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<center><h2 class="pagetitle">Author Archive</h2></center>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<center><h2 class="pagetitle">Blog Archives</h2></center>
 	  <?php } ?>
 	  
	<?php while (have_posts()) : the_post(); ?>
	<div class="postwrapper">
		<div class="postwrapper-left"></div>
		<div class="postwrapper-right"></div>
		<div class="post">
			<div class="minical">
				<div class="date">
					<font size="5"><?php the_time('M') ?></font><br />
					<font size="4"><?php the_time('jS') ?></font>
				</div>
			</div>
			<div class="minicomments">
				<div class="comment-count">
					<?php comments_popup_link('<font size="6">0</font><br /><font size="1">comments</font>', '<font size="6">1</font><br /><font size="1">comment</font>', '<font size="6">%</font><br /><font size="1">comments</font>'); ?>
				</div>
			</div>
			<div class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><p><b>filed under</b>: <?php the_tags( '', ', ', ''); ?></p></div>
			<div class="post-content">
				<?php the_content('<span class="button">Keep going &raquo;</span>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
		get_search_form();

	endif;
?>
</div>
<?php get_footer(); ?>