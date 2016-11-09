<?php get_header();  ?>

<div class="main">

  <div class="content">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>






    <?php endwhile; // end the loop?>
  </div> <!-- /,content -->

</div> <!-- /.main -->

<?php get_footer(); ?>