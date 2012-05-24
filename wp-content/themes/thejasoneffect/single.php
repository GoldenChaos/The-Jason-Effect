<?php get_header(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post-wrap">
				<div class="post">
					<div class="post-toolkit">
						<?php comments_popup_link(
							'<div class="comments-box">
								<div class="comment-count">0</div>
								comments
							</div>',
							'<div class="comments-box">
								<div class="comment-count">1</div>
								comment
							</div>',
							'<div class="comments-box">
								<div class="comment-count">%</div>
								comments
							</div>');
						?>
						<div class="calendar-box">
							<div style="line-height:7px;margin-top:5px;"><?php the_time('F') ?></div>
							<div class="comment-count"><?php the_time('j') ?></div>
						</div>
					</div>
					<div class="post-content">
						<a class="title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
			<!-- the older/newer post buttons -->
		<?php else : ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
<?php get_footer(); ?>