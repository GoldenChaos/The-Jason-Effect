<?php
if ( function_exists('register_sidebar') )
    register_sidebar();

function widget_quentin_search() {
?>
</li> 
<li id="search">
<form id="searchform" method="get" action="<?php echo $PHP_SELF; ?>">
<input type="text" name="s" id="s" size="8" /> <input type="submit" name="submit" value="<?php _e('Search'); ?>" id="sub" />
</form>
</li>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_quentin_search');

function widget_quentin_calendar() {
?>
<li id="calendar">
	<?php get_calendar(); ?>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Calendar'), 'widget_quentin_calendar');
?>