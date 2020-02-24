<?php

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function theme_scripts() {
    wp_enqueue_style( 'main-css', get_template_directory_uri() . './style/main.css' );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . './js/main.js', null, false );
    wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js' );
}

add_theme_support( 'menus' );

add_theme_support( 'post-thumbnails' );
