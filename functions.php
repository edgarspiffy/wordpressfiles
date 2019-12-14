<?php

function university_files() {
  // Loading JS is a bit different, you call it with a function and you pass in 3 arguments, first does thie file depend on something else, second is the version (answer doesn't matter), last it ask if you want this to load on footer oppose to header


  //to avoid caching we're going ot add a microtime function to the version number so the browser will always reload a file
  wp_enqueue_script('main-university-js',get_theme_file_uri('/js/scripts-bundled.js'),NULL,microtime(),true);
  wp_enqueue_style('Google-Fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  //Load Font Awesome, first parameter is just a name doesn't matter
  wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',NULL, microtime());
  // Loads Main Styles
  wp_enqueue_style('university_main_styles',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','university_files');

function university_features(){
  add_theme_support('title-tag');
}

//second argument is name of function
add_action('after_setup_theme','university_features');

?>