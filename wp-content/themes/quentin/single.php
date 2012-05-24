<?php get_header(); ?>
<div id="s-content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="navigation">
<div class="n-left"><?php previous_post('&laquo; %','','yes') ?></div>
<div class="n-right"><?php next_post(' % &raquo;','','yes') ?></div>
</div>

<div class="post">
<h2  class="storytitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="storycontent">
<?php the_content('Read the rest of this entry &raquo;'); ?>
</div>

<div class="meta">Published in:
<?php the_category(', ') ?>
<?php edit_post_link(' (Edit) '); ?>
<strong> |</strong>
on <?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --> <strong>|</strong>
<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
</div>

<img src="<?php echo get_settings('siteurl'); ?>/wp-content/themes/quentin/images/printer.gif" width="102" height="27" class="s-pmark" alt=" " />




<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {

// Both Comments and Pings are open ?>
<div id="trackback">
<p>You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(display); ?>">trackback</a> from your own site.</p>
</div>
<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
// Only Pings are Open ?>
<div id="trackback">
<p>Responses are currently closed, but you can <a href="<?php trackback_url(display); ?> ">trackback</a> from your own site.</p>
</div>

<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
// Comments are open, Pings are not ?>
<div id="trackback">
<p>You can skip to the end and leave a response. Pinging is currently not allowed.</p>
</div>

<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
// Neither Comments, nor Pings are open ?>
<div id="trackback">
<p>Both comments and pings are currently closed.</p>
</div>

<?php } edit_post_link('Edit this entry.','',''); ?>
</div>

<?php comments_template(); ?>
	
<?php endwhile; else: ?>
	
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	
<?php endif; ?>
</div>

<?php get_footer(); ?>