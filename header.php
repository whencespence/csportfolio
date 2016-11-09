<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--======== HEADER SECTION =========-->

  <header id="top">
    <nav class="flex_container">
      <p><?php the_field('nav_name', 'option'); ?></p>
      <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary'
        ),'option'); ?>
    </nav>
    <h1><?php the_field('main_header'); ?></h1>
  </header>

  <li><a href="http://christinaspencer.ca/#about">about</a></li>

<!--======== ABOUT SECTION =========-->

  <section class="about"></section>

  