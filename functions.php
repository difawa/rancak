<?php
/**
 * Theme functions.
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package Rancak
 */

function rancak_scripts() {
    /**
     * The function manages the stylesheets and scripts.
     */

    //  Registering stylesheets    
    wp_register_style('rancak-style', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ));
    wp_register_style('font-css', get_template_directory_uri().'/assets/font/font.css', [], false);
    // Registering scripts
    wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(get_template_directory().'/assets/js/main.js') );
    
    // Enqueue
    wp_enqueue_style('rancak-style');
    wp_enqueue_style('font-css');
    wp_enqueue_script('main-js');
}
add_action('wp_enqueue_scripts', 'rancak_scripts');

function rancak_setup() {
    add_theme_support( 'title-tag' );
    register_nav_menus( array(
		'header-menu' => __('Header menu'),
        'footer-menu' => __('Footer menu'),
	) );
}
add_action('after_setup_theme','rancak_setup');

