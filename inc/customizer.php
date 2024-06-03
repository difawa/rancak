<?php 
/**
 * Theme customizer
 * 
 * @package Rancak
 */

 function theme_customizer_function($wp_customize){
    $wp_customize->add_panel('header_option_panel', array(
        'title' => 'Header Options',
        'priority' => 30,
        'capability' => 'edit_theme_options',
    ));

    //Menu Settings
    $wp_customize->add_section('menu_options', array(
        'title' => 'Menu',
        'capability' => 'edit_theme_options',
        'panel' => 'header_option_panel',
        'priority' => 10,
    ));

    $wp_customize->add_setting('menu_settings', array(
        'capability' => 'edit_theme_options',
        'priority' => 1,
    ));
    $wp_customize->add_control('menu_settings', array(
        'type' => 'hidden',
        'label' => 'Menu',
        'section' => 'menu_options',
    ));
 }

 add_action('customize_register', 'theme_customizer_function');