<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> onload="setupZoom()">
<!-- <div id="headlines" class="centered"></div>
<div id="headlines-text">
	Headlines go here when the script actually works.
</div> -->
<div id="musicstand">
<div id="musicstand-back" class="centered">
	<div id="booklet">
		<h3 id="nav-title">Navigation</h3>
		<ul id="navigation1">
			<li><a href="http://lehighchoralarts.com/concerts">Concert Schedule</a><p class="subtitle">for 2009-2010</p></li>
			<li><a href="http://lehighchoralarts.com/archives.php">Media Archives</a></li>
			<li><a href="http://lehighchoralarts.com/students">New Students</a></li>
			<li><a href="http://lehighchoralarts.com/alumni">Alumni Portal</a></li>
		</ul>
		<ul id="navigation2">
			<li><a href="http://stevensametz.com/" target="_blank">Steven Sametz</a><p class="subtitle">Director</p></li>
			<li><a href="http://debrafield.com/" target="_blank">Debra Field</a><p class="subtitle">Assistant Director</p></li>
			<li><a href="http://lehighchoralarts.com/scholarship">Scholarships</a></li>
			<li><a href="http://lehighchoralarts.com/store">Online Store</a></li>
			<li><a href="http://lehighchoralarts.com/news">News &amp; Updates</a></li>
		</ul>
	</div>
	<div id="lca"></div>
	<div id="batonandpipe"></div>
</div>
<div id="musicstand-front" class="centered"></div>
<div id="content-bg-fluid" class="centered">
<div class="papertexture">
	<div id="menubarcover"></div>
	<div id="menubar">
		<?php if ( is_page('welcome') ) : ?>
			<a class="menutitle selected-left alignleft" href="http://lehighchoralarts.com/">Welcome</a>
			<?php else : ?>
			<a class="menutitle alignleft" href="http://lehighchoralarts.com/">Welcome</a>
		<?php endif; ?>
		<img class="menubar-div" src="http://lehighchoralarts.com/wp-content/themes/lca/images/divider.png" alt="" />
		<ul class="dropdown">
			<?php if ( is_tree('5') ) : ?>
				<li class="menutitle selected"><?php else : ?><li class="menutitle">
			<?php endif; ?>
			Choral Union</li>
			<div class="fancydiv centered"></div>
			<center><p>~ Ensemble Information ~</p></center>
			<li class="subitem"><a href="http://lehighchoralarts.com/choral-union/introduction">Introduction</a></li>
			<li class="subitem"><a href="http://lehighchoralarts.com/choral-union/how-to-join">How to Join</a></li>
			<center><p>~ Current Members ~</p></center>
			<li class="subitem"><a href="http://lehighchoralarts.com/choral-union/membership-calendar">Membership Calendar</a></li>
			<li class="subitem"><a href="http://lehighchoralarts.com/choral-union/practice-materials">Practice Materials</a></li>
		</ul>
		<img class="menubar-div" src="http://lehighchoralarts.com/wp-content/themes/lca/images/divider.png" alt="" />
		<ul class="dropdown">
			<?php if ( is_tree('8') ) : ?>
				<li class="menutitle selected"><?php else : ?><li class="menutitle">
			<?php endif; ?>
			University Choir</li>
			<div class="fancydiv centered"></div>
			<center><p>~ Ensemble Information ~</p></center>
			<li class="subitem"><a href="http://lehighchoralarts.com/university-choir/introduction">Introduction</a></li>
			<li class="subitem"><a href="http://lehighchoralarts.com/university-choir/how-to-join">How to Join</a></li>
			<center><p>~ Current Members ~</p></center>
			<li class="subitem"><a href="http://lehighchoralarts.com/university-choir/membership-calendar">Membership Calendar</a></li>
			<li class="subitem"><a href="http://lehighchoralarts.com/university-choir/practice-materials">Practice Materials</a></li>
		</ul>
		<img class="menubar-div" src="http://lehighchoralarts.com/wp-content/themes/lca/images/divider.png" alt="" />
		<ul class="dropdown dropglee">
			<?php if ( is_tree('11') ) : ?>
				<li class="menutitle selected"><?php else : ?><li class="menutitle">
			<?php endif; ?>
			Glee Club</li>
			<div class="fancydiv centered"></div>
			<center><p>~ Ensemble Information ~</p></center>
			<li class="subitem"><a href="http://lehighchoralarts.com/glee-club/introduction">Introduction</a></li>
			<li class="subitem"><a href="http://lehighchoralarts.com/glee-club/how-to-join">How to Join</a></li>
			<center><p>~ Current Members ~</p></center>
			<li class="subitem"><a href="http://lehighchoralarts.com/glee-club/membership-calendar">Membership Calendar</a></li>
			<li class="subitem"><a href="http://lehighchoralarts.com/glee-club/practice-materials">Practice Materials</a></li>
		</ul>
		<img class="menubar-div" src="http://lehighchoralarts.com/wp-content/themes/lca/images/divider.png" alt="" />
		<ul class="dropdown dropdolce">
			<?php if ( is_tree('12') ) : ?>
				<li class="menutitle selected-right" style="text-align:right;"><?php else : ?><li class="menutitle" style="text-align:right;">
			<?php endif; ?>
			Dolce</li>
			<div class="fancydiv centered"></div>
			<center><p>~ Ensemble Information ~</p></center>
			<li class="subitem"><a href="http://lehighchoralarts.com/dolce/introduction">Introduction</a></li>
			<li class="subitem"><a href="http://lehighchoralarts.com/dolce/how-to-join">How to Join</a></li>
			<li class="subitem"><a href="http://lehighchoralarts.com/dolce/photos">Photos</a></li>
			<center><p>~ Current Members ~</p></center>
			<li class="subitem"><a href="http://lehighchoralarts.com/dolce/membership-calendar">Membership Calendar</a></li>
			<li class="subitem"><a href="http://lehighchoralarts.com/dolce/practice-materials">Practice Materials</a></li>
		</ul>
	</div>
	<div id="navdivider"></div>
	<div id="contentwrapper">
		<div id="content" class="centered">