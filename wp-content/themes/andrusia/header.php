<!DOCTYPE html>
<html lang="en">
<head>
<!--metatastic-->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php wp_title('&raquo;', true, 'left'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<meta name="Copyright" content="Copyright 2005-2009 The Jason Effect." />

<!--form + function-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="http://www.thejasoneffect.net/wp-content/themes/andrusia/js/jquery.easing.js"></script>
<script src="http://www.thejasoneffect.net/wp-content/themes/andrusia/js/jquery.tools.min.js"></script>
<script src="http://www.thejasoneffect.net/wp-content/themes/andrusia/js/jquery.lavalamp.min.js"></script>
<script src="http://www.thejasoneffect.net/wp-content/themes/andrusia/js/fancyzoom/js-global/FancyZoom.js"></script>
<script src="http://www.thejasoneffect.net/wp-content/themes/andrusia/js/fancyzoom/js-global/FancyZoomHTML.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> onload="setupZoom()">
	<div id="headerbg">
		<div id="header" class="centered">
			<div id="logo"><a href="http://www.thejasoneffect.net/"><img src="http://www.thejasoneffect.net/wp-content/themes/andrusia/images/logo.png" alt="" /></a></div>
			<ul id="social">
				<li id="twitter" class="trigger">
					<a href="http://www.twitter.com/goldenchaos/"><img src="http://www.thejasoneffect.net/wp-content/themes/andrusia/images/twitter-square.png" alt="" /></a>
					<div id="twittip" class="tooltip">follow me</div>
				</li>
				<li id="facebook" class="trigger">
					<a href="http://www.facebook.com/jasonrappaport"><img src="http://www.thejasoneffect.net/wp-content/themes/andrusia/images/facebook-square.png" alt="" /></a>
					<div id="fbtip" class="tooltip">friend me</div>
				</li>
				<li id="linkedin" class="trigger">
					<a href="http://www.linkedin.com/in/goldenchaos"><img src="http://www.thejasoneffect.net/wp-content/themes/andrusia/images/linkedin-square.png" alt="" /></a>
					<div id="lintip" class="tooltip">network with me</div>
				</li>
				<li id="contact" class="trigger">
					<a href="#get-in-touch"><img src="http://www.thejasoneffect.net/wp-content/themes/andrusia/images/contact-square.png" alt="" /></a>
					<div id="contacttip" class="tooltip">contact me</div>
				</li>
				<li id="rss" class="trigger">
					<a href="http://www.thejasoneffect.net/feed/"><img src="http://www.thejasoneffect.net/wp-content/themes/andrusia/images/rss-square.png" alt="" /></a>
					<div id="rsstip" class="tooltip">subscribe to me</div>
				</li>
			</ul>
		</div>
	</div>
	<div id="bluebar">
		<div id="speechbubble" class="centered">
			<div id="coolmessage"><?php bloginfo('description'); ?></div>
		</div>
		<ul id="main-navigation" class="centered">
			<?php if ( is_home() || is_search() ) : ?>
				<li class="current"><a href="http://www.thejasoneffect.net/" title="Home">Home</a></li>
				<?php else : ?>
				<li><a href="http://www.thejasoneffect.net/" title="Home">Home</a></li>
			<?php endif; ?>
			<?php if ( is_page('portfolio') || is_category('Portfolio') || in_category('Portfolio') ) : ?>
				<li class="current"><a href="http://www.thejasoneffect.net/portfolio/" title="Portfolio">Portfolio</a></li>
				<?php else : ?>
				<li><a href="http://www.thejasoneffect.net/portfolio/" title="Portfolio">Portfolio</a></li>
			<?php endif; ?>
			<?php if ( is_page('resume') ) : ?>
				<li class="current"><a href="http://www.thejasoneffect.net/resume/" title="Resume">Resume</a></li>
				<?php else : ?>
				<li><a href="http://www.thejasoneffect.net/resume/" title="Resume">Resume</a></li>
			<?php endif; ?>
			<?php if ( is_page('about') ) : ?>
				<li class="current"><a href="http://www.thejasoneffect.net/about/" title="About">About</a></li>
				<?php else : ?>
				<li><a href="http://www.thejasoneffect.net/about/" title="About">About</a></li>
			<?php endif; ?>
			<?php if ( is_category('Blog') || in_category('Blog') ) : ?>
				<li class="current"><a href="http://www.thejasoneffect.net/category/blog/" title="Blog">Blog</a></li>
				<? else : ?>
				<li><a href="http://www.thejasoneffect.net/category/blog/" title="Blog">Blog</a></li>
			<?php endif; ?>
			<?php if ( is_page('projects') ) : ?>
				<li class="current"><a href="http://www.thejasoneffect.net/projects/" title="Projects">Projects</a></li>
				<? else : ?>
				<li><a href="http://www.thejasoneffect.net/projects/" title="Projects">Projects</a></li>
			<?php endif; ?>
		</ul>
	</div>
	<div id="contentbg" class="centered">