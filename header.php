<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ios -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="Title">

  <!-- android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="#000">

  <title><?php bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <h1><?php bloginfo( 'name' ); ?></h1>
    <a href="<?php echo esc_url(home_url( '/' )); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></a>
    <?php
      $args = array(
        'theme_location' => 'primary-menu',
        'container' => 'nav',
        'container_class' => 'site-nav',
      );
      wp_nav_menu( $args );
    ?>
  </header>
