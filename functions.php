<?php
/**
 * Theme Functions.
 * 
 * @package Rancak
 */

function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ), // Lokasi menu utama
            // Anda bisa menambahkan lokasi menu lainnya di sini
        )
    );
}
add_action( 'init', 'register_my_menus' );


function rancak_scripts() {
    /**
     * The function manages the stylesheets and scripts.
     */

    //  Registering stylesheets    
    wp_register_style('rancak-style', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ));
    wp_register_style('layout-style', get_template_directory_uri().'/assets/css/layout.css', [], filemtime( get_template_directory() . '/assets/css/layout.css' ));

    // Registering scripts
    wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(get_template_directory().'/assets/js/main.js') );
    
    // Enqueue
    wp_enqueue_style('rancak-style');
    wp_enqueue_style('layout-style');
    wp_enqueue_script('main-js');
}

add_action('wp_enqueue_scripts', 'rancak_scripts');

function rancak_setup(){
    /* Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
    add_theme_support( 'title-tag' );
}

add_action('after_setup_theme', 'rancak_setup');