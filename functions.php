<?php
function my_template_css() {
  wp_enqueue_script('jquery');
  wp_enqueue_script('bundle_js', get_theme_file_uri( '/assets/js/bundle.js' ) ,array() );
  wp_enqueue_style( 'my-styles', get_theme_file_uri( '/assets/css/styles.css' ) ,array() );
}
add_action( 'wp_enqueue_scripts', 'my_template_css' );