<?php get_header(); ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="post-wrap">
				<div class="post">
					<div class="post-content">
						<a class="title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>