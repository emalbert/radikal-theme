<?php 
/**
 * Header template
 * 
 * @package Radikal
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <?php
        //Verifica compatibilidad con versiones anteriores de Wordpress
        if (function_exists('wp_body_open')) {
            wp_body_open();
        }
    ?>

    <header></header>

