<?php get_header();  ?>

  <main>

<!--======== ABOUT SECTION =========-->
  
  <section id="about">

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php $image = get_field('about_image'); ?>
      <?php $image_sm = get_field('about_image_sm'); ?>

      <div class="about_image_container flex_container">
        <div class="about_image1">
          <img src="<?php echo $image['url'] ?>">
        </div>
        <div class="about_image2">
          <img src="<?php echo $image_sm['url'] ?>">
        </div>
      </div>

      <div class="about_text_container flex_container">

        <div class="about_text">
          <h2><?php the_field('about_title'); ?></h2>
          <p><?php the_field('about_text'); ?></p>
        </div>

        <div class="skills_container flex_container">

          <div class="skills">
            <h2><?php the_field('skills_title'); ?></h2>
            <?php the_field('skills'); ?>
          </div>

          <div class="tools_container">
            <h2><?php the_field('tools_title'); ?></h2>
            <div class="tools">
              <?php the_field('tools'); ?>
            </div>
          </div>

        </div>

      </div>

    <?php endwhile; // end the loop?>
  </section>


<!--========= WORK SECTION ==========-->

  <section id="work">

    <?php // Start the loop ?>

    <?php $query = new WP_Query( array( 'post_type' =>'portfolio'  ) ); ?>
      <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        
        <div class="work_container">

          <div class="work_inner_container">
            <div class="work_image_container">
              <?php while( have_rows('images') ): the_row(); ?>
                <?php $image = get_sub_field('image'); ?>
                <img src="<?php echo $image['url'] ?>">
              <?php endwhile; ?>
            </div>
          </div>

            <div class="work_text_container flex_container">

                <div class="half">
                  <h2><?php the_title(); ?></h2>
                </div>

                <div class="other_half">
                  <p><?php the_content(); ?></p>
                  <p class="skill_title"><?php the_field('skill_title'); ?></p>

                  <?php while( have_rows('skill_type') ): the_row(); ?>
                      <p class="skill_names"><?php the_sub_field('skill_names'); ?></p>
                  <?php endwhile; ?>
                  
                  <?php while( have_rows('portfolio_links') ): the_row(); ?>
                    <?php $link_name = get_sub_field('link_name'); ?>
                    <?php $link_url = get_sub_field('link_url'); ?>
                    <a href="<?php echo $link_url?>" target="_blank" class="button flex_container"><?php echo $link_name?></a>
                  <?php endwhile; ?>
                </div>

            </div>

      </div>

        
        
    <?php endwhile; // end the loop?>
    <?php wp_reset_query(); ?>

    <?php endif; ?>

  </section>

<!--======== CONTACT SECTION =========-->

  <section id="contact">

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <p class="contact_title"><?php the_field('contact_title'); ?></p>
    <h2><?php the_field('contact_intro'); ?></h2>
      <div class="contact_container flex_container">
        <?php echo do_shortcode( '[contact-form-7 id="49" title="Contact form 1"]' ); ?>
        <div class="contact_content">
          <p><?php the_field('skype_title'); ?></p>
          <p class="light"><?php the_field('skype'); ?></p>
          <p><?php the_field('email_title'); ?></p>
          
          <?php $email_url = get_field('email_url'); ?>
          <?php $email = get_field('email'); ?>
          <p class="light"><a href="mailto:<?php echo $email_url?>" target="_blank"><?php echo $email?></a></p>

        </div>
      </div>

    <?php endwhile; // end the loop?>
  </section>

<?php get_footer(); ?>