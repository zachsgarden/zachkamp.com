<?php

function theme_enqueues() {
    wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/custom.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'theme_enqueues');

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/custom.css' );
    wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/custom.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );