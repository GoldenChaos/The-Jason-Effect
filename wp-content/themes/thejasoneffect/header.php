<html>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php wp_title('&raquo;', true, 'left'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<meta name="Copyright" content="Copyright 2005-2009 The Jason Effect." />
</head>
<body>
<div id="stripe-vertical"></div>
<div id="stripe-horizontal"></div>
<div id="sidebar">
	<a id="logo" href="#">
		<div id="j-top"></div>
		<img id="j-bottom" src="./images/j.svg" />
	</a>
	<div id="logo-wrap"></div>
	<div id="stripes">
		<?php
		for ($i = 1; $i <= 50; $i++) {
			echo '<div class="sidebar-stripe"></div>';
		}
		?>
	</div>
	<ul id="sidebar-nav">
		<li><a href="#">Home</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Projects</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">RSS Feed</a></li>
	</ul>
	<div id="connectitude">
		<a class="connect-box" href="#"></a>
		<a class="connect-box" href="#"></a>
		<a class="connect-box" href="#"></a>
	</div>
	
</div>
<div id="content">
	<div id="header" style="background-image: url(
	<?php
		// Check to see if the header image has been removed
		$header_image = get_header_image();
		if ( ! empty( $header_image ) ) :
	?>
	<?php
		// The header image
		// Check if this is a post or page, if it has a thumbnail, and if it's a big one
		if ( is_singular() &&
				has_post_thumbnail( $post->ID ) &&
				( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( HEADER_IMAGE_WIDTH, HEADER_IMAGE_WIDTH ) ) ) &&
				$image[1] >= HEADER_IMAGE_WIDTH ) :
			// Houston, we have a new header image!
			echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
		else : ?>
		<?php header_image(); ?>
	<?php endif; // end check for featured image or standard header ?>
	<?php endif; // end check for removed header image ?>);">
		<div id="header-left"></div>
		<div id="header-inner">
			<div id="logo-text">The Jason Effect</div>
			<p>I'm Jason Rappaport. I write about stuff and make pretty code and all that. I created a cool service called <a href="https://www.goodsemester.com/">GoodSemester</a>. I also own and operate <a href="http://www.zeldauniverse.net/">Zelda Universe</a> and <a href="https://www.zeldawiki.org">Zelda Wiki</a>. You should read this blog if you want to. Sometimes there's ice cream.</p>
		</div>
	</div>
	<div id="content-inner">