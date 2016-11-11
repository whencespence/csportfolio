			<footer>
				<div class="flex_container">
					<div class="status_container">
						<h2><?php the_field('status_title','option'); ?></h2>
						<p class="light"><?php the_field('status_text','option'); ?></p>
					</div>
					<div class="social">
						<h2><?php the_field('social_title','option'); ?></h2>
						<?php get_template_part('/template_parts/social-media'); ?>
					</div>
				</div>
				<div class="copyright flex_container">
					<p class="light"><a href="<?php the_field('copyright_icon','option'); ?>"></a>
					<?php the_field('copyright','option'); ?></p>
					<p class="top"><a href="#" title="Back to top"><i class="fa fa-arrow-up" aria-hidden="true"></i> Top</a></p>
				</div>
			</footer>

		</div><!-- //end of .wrapper -->
	</main><!-- end of main -->
	
	<script>
	// scripts.js, plugins.js and jquery are enqueued in functions.php
	/* Google Analytics! */
	 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
	 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
	 s.parentNode.insertBefore(g,s)}(document,"script"));
	</script>

	<!-- <?php wp_footer(); ?> -->


</body>
</html>