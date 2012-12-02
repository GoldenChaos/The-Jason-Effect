<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="greenbox">
			<?php echo get_avatar( get_the_author_meta('ID'), 130 ); ?>
			<div class="title-ticket">
				<div class="title-wrap">
					<a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
			</div>
			<div class="clear"></div>
			<?php the_content(); ?>
			<div class="post-footer">
				<div class="iconfont">i</div> Posted on <?php the_time('F'); ?> <?php the_time('j'); ?>
				<div class="iconfont">9</div> <?php comments_popup_link('No comments','1 comment','% comments'); ?>
			</div>
		</div>
	<?php endwhile; ?>
		<!-- the older/newer post buttons -->
	<?php else : ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
<?php get_footer(); ?>