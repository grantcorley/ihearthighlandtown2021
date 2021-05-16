<?php

//get the child theme style sheets working
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    


        //enqueue JS
        wp_enqueue_script( 'fontawesome', get_theme_file_uri() . '/scripts.js', array ( 'jquery' ), 1.1, true);

        wp_enqueue_style( 'bootstrap-styles', get_theme_file_uri() . '/resources/bootstrap/css/bootstrap.min.css' );
        wp_enqueue_style('oswald', 'https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');

      //enqueue Bootstrap JS library
      wp_enqueue_script( 'bootstrap-scripts', get_theme_file_uri() . '/resources/bootstrap/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);

          //enqueue FontAwesome
          wp_enqueue_script( 'script', 'https://kit.fontawesome.com/1a661f228b.js', array ( 'jquery' ), 1.1, true);

          wp_enqueue_style( 'child-style', get_stylesheet_uri(),
          array( 'twenty-twenty-one-style' ), 
          wp_get_theme()->get('Version') // this only works if you have Version in the style header
        );

}






?>