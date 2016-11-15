<?php get_header(); ?>

<div class="main">

	<section class="search">
		<?php if ( have_posts() ) : ?>

			<h3>Search Results for: <?php echo get_search_query(); ?></h3>
			<?php get_template_part( 'loop', 'search' ); ?>

		<?php else : ?>

			<p>Sorry, nothing matched your search criteria. Try searching with some keywords, or send me an email at <a href="mailto:hello@christinaspencer.ca">hello[at]christinaspencer.ca</a>.</p>
			
			<?php get_search_form(); ?>

		<?php endif; ?>
	</section>

</div> <!-- /.main -->

<?php get_footer(); ?>
