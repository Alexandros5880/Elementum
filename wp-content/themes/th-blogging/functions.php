<?php
// child style enqueue
function thblogging_styles() {
    $themeVersion = wp_get_theme()->get('Version');
    // Enqueue our style.css with our own version
    wp_enqueue_style('thblogging-style', get_template_directory_uri() . '/style.css',array(), $themeVersion);
   
}
add_action('wp_enqueue_scripts', 'thblogging_styles');
function wpb_add_google_fonts() {
 
wp_enqueue_style( 'wpb-google-fonts', '<link href="https://fonts.googleapis.com/css?family=Linden+Hill|Nova+Slim" rel="stylesheet">', false ); 
}
 add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
?>