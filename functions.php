<?php
/**
 * Theme Functions
 * 
 * @package Radikal
 */

function radikal_enqueue_scripts() {
    
    //Register Styles
    wp_register_style('radikal-styles', get_stylesheet_uri());
    wp_register_style('bootstrap-styles', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css');

    //Register Scripts
    wp_register_script('main-scripts', get_template_directory_uri() . '/assets/main.js', [], false, true);
    wp_register_script('bootstrap-scripts', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);

    //Enqueue Styles
    wp_enqueue_style('radikal-styles');
    wp_enqueue_style('bootstrap-styles');

    //enqueue Scripts
    wp_enqueue_script('main-scripts');
    wp_enqueue_script('bootstrap-scripts');
}

add_action('wp_enqueue_scripts', 'radikal_enqueue_scripts');

?>

