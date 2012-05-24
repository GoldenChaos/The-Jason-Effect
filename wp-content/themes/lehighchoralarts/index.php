<!-- ***************************************
* Lehigh University Choral Arts Website    *
* Painstakingly created by Jason Rappaport *
* for the loving and appreciative choir    *
*                                          *
* Version 1.5 ~ February 2010              *
**************************************** -->

<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

	<div class="newsframe"><div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<div class="subtitle">
			<?php the_time('F jS, Y') ?> | <?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
		</div>
		<div class="entry">
			<?php the_content('Read the rest of this entry &raquo;'); ?>
			<h2>~ <?php the_author() ?></h2>
		</div>
	</div></div>
	
	<?php endwhile; ?>
	
	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>
	
	<?php else : ?>
	
	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php get_search_form(); ?>

<?php endif; ?>

<?php get_footer(); ?>
