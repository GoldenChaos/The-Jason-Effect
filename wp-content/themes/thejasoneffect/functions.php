<?php 
	define('NO_HEADER_TEXT', true );
	define('HEADER_TEXTCOLOR', '');
	define('HEADER_IMAGE', '');
	define('HEADER_IMAGE_WIDTH', 1120);
	define('HEADER_IMAGE_HEIGHT', 245);
	
	function admin_header_style() {
	    ?><style type="text/css">
	        #headimg {
	            width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
	            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
	            background: no-repeat;
	        }
	    </style><?php
	}
	
	add_custom_image_header('header_style', 'admin_header_style');
	
	add_theme_support( 'menus' );
	
	add_theme_support( 'infinite-scroll', array(
		'container'  => 'content-inner',
		'footer'     => false,
		'render'     => 'infinite_scroll_render',
	) );
	
	function infinite_scroll_render() {
	    get_template_part( 'content' );
	}

?>