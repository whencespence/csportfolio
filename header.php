<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
</head>

<body>

  <div class="main">

    <div class="nav_container">
        <nav class="large flex_container" role="navigation">
          <a href="<?php echo home_url( '/' ); ?>" rel="home">
            <?php the_field('nav_name'); ?>
          </a>
          <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'primary'
          )); ?>
        </nav>
    </div>
    <div class="side_nav">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
    </div>
    
    <div class="wrapper"> <!-- wrapper begins -->