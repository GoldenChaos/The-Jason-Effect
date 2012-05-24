		<div id="footer" class="centered">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>
		</div>
		<div id="footerbg"></div>
		
		<!--some final scripts-->
		<script src="http://www.thejasoneffect.net/wp-content/themes/andrusia/js/jtools-config.js"></script>
		<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-317947-1");
		pageTracker._trackPageview();
		} catch(err) {}</script>
		<?php wp_footer() ?>
	</body>
</html>