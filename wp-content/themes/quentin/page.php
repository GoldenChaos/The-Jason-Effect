<?php get_header(); ?>

	<div id="content">


	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
				
<div class="post">
<h2  class="storytitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="storycontent">
<?php the_content('Read the rest of this entry &raquo;'); ?>
</div>


<div class="meta">Published in:

<?php the_category(', ') ?>
<?php edit_post_link(' (Edit)'); ?>
 <strong>|</strong>
on <?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --> <strong>|</strong>

<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>


</div>
<img src="<?php echo get_settings('siteurl'); ?>/wp-content/themes/quentin/images/printer.gif" width="102" height="27" class="pmark" alt=" " />

<!--
<?php trackback_rdf(); ?>
-->
</div>

	
<?php endwhile; ?>

		
<?php else : ?>

<h2 class="center">Not Found</h2>
<p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>

<?php endif; ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>