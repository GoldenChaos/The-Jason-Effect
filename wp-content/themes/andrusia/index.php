<?php get_header(); ?>
	<div id="ribbon"></div>
	<div id="featurewrap">
		<div id="featurewrap-left"></div>
		<div id="featurewrap-right"></div>
		<a class="slideprevious"></a><a class="slidenext"></a>
		<div class="recent-work centered">
			<div class="items">
				<div id="item1">
					<a href="http://www.thejasoneffect.net/2010/01/18/sedona-and-scottsdale/" title="Sedona and Scottsdale"><img src="http://www.thejasoneffect.net/wp-content/uploads/2007/07/sedonascottsdale-thumb.png" alt="Sedona and Scottsdale" /></a>
					<div id="info1" class="info">
						<h3>Sedona and Scottsdale</h3>
						<p>Take a look at the beautiful red rocks and stars of Sedona, and the spiny foliage of the botanical gardens in Phoenix.</p>
					</div>
				</div>
				<div id="item2">
					<a href="http://www.thejasoneffect.net/2009/08/17/soup-shoppe/" title="Soup Shoppe"><img src="http://www.thejasoneffect.net/wp-content/uploads/2009/08/soupshoppe-thumb.png" alt="Soup Shoppe" /></a>
					<div id="info2" class="info">
						<h3>Soup Shoppe</h3>
						<p>A website for the local eatery, Soup Shoppe. Cooked in a brick oven with a dash of salt, pepper, and good design.</p>
					</div>
				</div>
				<div id="item3">
					<a href="http://www.thejasoneffect.net/2009/08/17/soup-shoppe-photography/" title="Soup Shoppe Photography"><img src="http://www.thejasoneffect.net/wp-content/uploads/2007/07/soupshoppephoto-thumb.png" alt="Soup Shoppe Photography" /></a>
					<div id="info3" class="info">
						<h3>Soup Shoppe Photography</h3>
						<p>No restaurant's website is complete without some mouth-watering pictures of their creations, so I shot a full assortment of photos for Soup Shoppe.</p>
					</div>
				</div>
				<div id="item4">
					<a href="http://www.thejasoneffect.net/2009/07/28/macys-july-4th-fireworks/" title="Macy's July 4th Fireworks"><img src="http://www.thejasoneffect.net/wp-content/uploads/2007/07/fireworks-thumb.png" alt="Macy's July 4th Fireworks" /></a>
					<div id="info4" class="info">
						<h3>Macy's July 4th Fireworks</h3>
						<p>Macy’s 2009 fireworks were the first in years to be launched above the Hudson River. Spectacular, beautiful, and bright – and a photographer’s dream.</p>
					</div>
				</div>
				<div id="item5">
					<a href="http://www.thejasoneffect.net/2009/06/13/the-jason-effect/" title="The New TJE"><img src="http://www.thejasoneffect.net/wp-content/uploads/2009/06/tje-thumb.png" alt="The New TJE" /></a>
					<div id="info5" class="info">
						<h3>The New TJE</h3>
						<p>The Jason Effect has been reborn as my new portfolio (still under construction). Learn all about it by clicking on the image.</p>
					</div>
				</div>
				<div id="item6">
					<a href="http://www.thejasoneffect.net/2009/06/01/lehigh-choral-arts/" title="Lehigh Choral Arts"><img src="http://www.thejasoneffect.net/wp-content/uploads/2009/06/lehighchoir-thumb.png" alt="Lehigh Choral Arts" /></a>
					<div id="info6" class="info">
						<h3>Lehigh Choral Arts</h3>
						<p>Lehigh University's Choral Arts program gets a brand new look.</p>
					</div>
				</div>
			</div>
		</div>
		<ul class="slidenav">
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
			<li>6</li>
		</ul>
	</div>
	<div id="intro">
		<div id="welcome"></div>
		<p>The Jason Effect is more than just a portfolio. It's the daily happenings of Jason Rappaport (that's me), and then some. I love photography, design, writing, and music, and I pour my heart and soul into everything I do. So have a look around and smile - and while you're at it, why not find out a bit more about me?</p>
		<div id="fom-button"><a href="http://www.thejasoneffect.net/about/">Find out more &raquo;</a></div>
	</div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php static $ctr = 0; if ($ctr == "1") { break; } else { ?>	
	<div class="postwrapper mainpost">
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
			</div>
		</div>
	</div>
	<?php $ctr++; } ?>
	<?php endwhile; endif; ?>
</div> <!--end the content area div-->
<?php get_footer(); ?>