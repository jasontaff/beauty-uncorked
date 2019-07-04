<?php
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function add_theme_scripts() {
   
   

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/medida/js/bootstrap.min.js', array ( 'jquery' ), 1.0, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/media/js/main.js', array ( 'jquery' ), 1.0, true);
   
     
  }
