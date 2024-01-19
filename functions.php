<?php
/**
 * Theme Functions
 * 
 * @package Radikal
 */

function radikal_enqueue_scripts() {
    wp_enqueue_style('radikal-styles', get_stylesheet_uri());
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main./js', [], '',true);
}

add_action('wp_enqueue_scripts', 'radikal_enqueue_scripts');

?>

