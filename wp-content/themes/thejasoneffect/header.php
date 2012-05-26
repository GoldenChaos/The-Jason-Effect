<html>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php wp_title('&raquo;', true, 'left'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<meta name="Copyright" content="Copyright 2005-2012 Jason Rappaport" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="viewport" content = "width = device-width, initial-scale = 1, user-scalable = no" />
<script type="text/javascript" src="http://use.typekit.com/qrk8zqs.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php wp_head(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-317947-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="stripe-vertical"></div>
<div id="stripe-horizontal"></div>
<div id="sidebar">
	<a id="logo" href="<?php bloginfo('url'); ?>">
		<div id="j-top"></div>
		<img id="j-bottom" src="<?php bloginfo('url'); ?>/wp-content/themes/thejasoneffect/j.svg" />
	</a>
	<div id="logo-wrap"></div>
	<div id="stripes">
		<?php
		for ($i = 1; $i <= 50; $i++) {
			echo '<div class="sidebar-stripe"></div>';
		}
		?>
	</div>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container' => '' ) ); ?>
	<div id="connectitude">
		<a class="connect-box" href="http://www.facebook.com/jasonrappaport" target="_blank">
			<img id="facebook" src="<?php bloginfo('url'); ?>/wp-content/themes/thejasoneffect/facebook.svg" height="34" />
		</a>
		<a class="connect-box" href="http://twitter.com/GoldenChaos" target="_blank">
			<img id="twitter" src="<?php bloginfo('url'); ?>/wp-content/themes/thejasoneffect/twitter.svg" height="34" />
		</a>
		<a class="connect-box" href="http://www.linkedin.com/in/goldenchaos" target="_blank">
			<img id="linkedin" src="<?php bloginfo('url'); ?>/wp-content/themes/thejasoneffect/linkedin.svg" height="30" />
		</a>
	</div>
	
</div>
<div id="content">
	<div id="header" style="background-image: url(<?php header_image(); ?>);">
		<div id="header-left"></div>
		<div id="header-inner">
			<div id="logo-text"><?php bloginfo('name'); ?></div>
			<p>I'm Jason Rappaport. I write about stuff and make pretty code and all that. I created a cool service called <a href="https://www.goodsemester.com/">GoodSemester</a>. I also own and operate <a href="http://www.zeldauniverse.net/">Zelda Universe</a> and <a href="https://www.zeldawiki.org">Zelda Wiki</a>. You should read this blog if you want to. Sometimes there's ice cream.</p>
		</div>
	</div>
	<div id="content-inner">