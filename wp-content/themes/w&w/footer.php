		<div class="push"></div>
		</div>
		<footer>
			<p>©2014 W &amp; W Structural Inc. All Rights Reserved.</p>
		</footer>
		<?php wp_enqueue_script( 'js-combo', get_bloginfo( 'template_directory' ) . '/js/script.js', array('jquery')); ?>
		<?php wp_footer(); ?><!-- required don't remove -->
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/grid.js"></script>
		<!-- Fallback for non-JavaScript people -->
		<noscript>
			<style type="text/css">
				section {/* Re-displays it by overriding the above */display: block;}
			</style>
		</noscript>
	</body>
</html>