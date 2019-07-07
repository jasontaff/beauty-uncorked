<?php
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function add_theme_scripts() {
   
    //styles 
    wp_enqueue_style( 'main', get_template_directory_uri() . '/media/css/main.css', array ( ), 1.0, true);

    //scripts
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/media/js/bootstrap.min.js', array ( 'jquery' ), 1.0, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/media/js/main.js', array ( 'jquery' ), 1.0, true);
   
     
  }
