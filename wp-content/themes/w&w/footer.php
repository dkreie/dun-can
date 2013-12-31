		<div class="push"></div>
		</div>
		<footer>
			<p>copywrite</p>
		</footer>
		<?php wp_enqueue_script( 'js-combo', get_bloginfo( 'template_directory' ) . '/js/script.js', array('jquery')); ?>
		<?php wp_footer(); ?><!-- required don't remove -->
		<!-- Fallback for non-JavaScript people -->
		<noscript>
			<style type="text/css">
				section {/* Re-displays it by overriding the above */display: block;}
			</style>
		</noscript>
	</body>
</html>