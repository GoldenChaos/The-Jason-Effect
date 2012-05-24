<?php
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<div class=footer-sidebar>',
		'after_widget' => '</div>'
	));
?>