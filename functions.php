<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function loadThemeStylesAScripts() {

  //wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '6.0.0' );
  wp_enqueue_style( 'googleFont', 'https://fonts.googleapis.com/css?family=Roboto' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/main.css' );
  wp_enqueue_style( 'fontAwesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css' );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'jqueryCustom', get_template_directory_uri() . '/js/jquery.js', array('jquery'), "1.0.0", true );

}
add_action( 'wp_enqueue_scripts', 'loadThemeStylesAScripts' );


function registerThemeMenus() {
  register_nav_menus( array(
    'primary-menu' => __('Primary Menu')
  ) );
}
add_action( 'init', 'registerThemeMenus' );
