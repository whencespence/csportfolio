<?php get_header();  ?>

  <main>

<!--======== ABOUT SECTION =========-->

  <section id="about">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php $image = get_field('about_image'); ?>
      <?php $image_sm = get_field('about_image_sm'); ?>

      <div class="about_image_container flex_container">
          <div class="about_image1">
              <img src="<?php echo $image['url'] ?>">
          </div>
          <div class="inner_about flex_container">
              <div class="about_image2">
               <p class="about">This is me!</p>
              </div>
              <div class="about_image3">
                <img src="<?php echo $image_sm['url'] ?>">
              </div>
          </div>
      </div>

      <div class="about_text_container flex_container">
        <h2>About</h2>
        <div>
          <?php the_field('about_text'); ?>
        </div>
      </div>

      <div class="skills flex_container">
        <?php while( have_rows('skill') ): the_row(); ?>
            <?php get_sub_field('skill_icon'); ?>
            <?php  ?>
          <?php endwhile; ?>
      </div>
  
    <?php endwhile; // end the loop?>
  </section>


<!--========= WORK SECTION ==========-->


  <section id="work">

    <div class="work_container">
    <?php // Start the loop ?>

    <?php $query = new WP_Query( array( 'post_type' =>'portfolio'  ) ); ?>
      <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="flex_container">
       
            <div class="work_image_container">
              <?php while( have_rows('images') ): the_row(); ?>
                <?php $image = get_sub_field('image'); ?>
                <img src="<?php echo $image['url'] ?>">
                <?php get_sub_field('caption'); ?>
              <?php endwhile; ?>
            </div>
            <div class="work_text_container">
              <h3><?php the_title(); ?></h3>
              <p><?php the_field('short_desc'); ?></p>
              <span class="link"><a href=""><?php the_field('github'); ?></a>
            </div>
          
        </div>

    <?php endwhile; // end the loop?>
    <?php wp_reset_query(); ?>

    <?php endif; ?>
    </div><!-- end of work_container -->

    <h2>Work</h2>

  </section>


<!--======== CONTACT SECTION =========-->


  <section id="contact">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <p class="contact_header"><?php the_field('contact_title'); ?></p>
      <div class="contact_container flex_container">
        <?php echo do_shortcode( '[contact-form-7 id="49" title="Contact form 1"]' ); ?>
        <div class="contact_content">
          <p><?php the_field('skype'); ?></p>
          <p><?php the_field('email'); ?></p>
        </div>
      </div>

    <?php endwhile; // end the loop?>
  </section>

<?php get_footer(); ?>