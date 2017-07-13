<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus() {

  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )
    )
  );

}

add_action( 'init', 'register_theme_menus' );

function ecascend_theme_styles(){

  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri().'/css/bootstrap.css' );
  wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Oswald:300,500,700' );
  wp_enqueue_style( 'main_css', get_template_directory_uri().'/style.css' );

}
add_action( 'wp_enqueue_scripts', 'ecascend_theme_styles' );


function esascend_theme_js() {

  wp_enqueue_style('font-awesome', '//use.fontawesome.com/7978a0b803.js');

}

add_action( 'wp_enqueue_scripts', 'esascend_theme_js' );

?>
