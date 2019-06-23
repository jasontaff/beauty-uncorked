<?php


function add_theme_scripts() {
   
   
    //wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 1.0, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.0, true);
   
     
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );