<?php


add_action('wp_enqueue_scripts','beauty_uncorked_scripts');


function beauty_uncorked_scripts() {

     // StyleS
     wp_enqueue_style( 'css',   get_template_directory_uri() . '/scss/main.css');

     // Scripts
     wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/js/bootstrap.min.js');
     wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js');

  }
  
  