<?php 
/**
 * Theme customizer
 * 
 * @package Rancak
 */

 function theme_customizer_function($wp_customize){
    $wp_customize->add_section('rancak-header-tools', array(
        'title' => 'Header Tools Options',
        'priority' => 30
    ));

    // Hide or show subscribe button
    $wp_customize->add_setting('subscribe_button', array(
        'type' => 'theme_mod',
        'default' => true,
        'sanitize_callback' => 'sanitize_checkbox'
    ));

    $wp_customize->add_control('subscribe_button', array(
        'label' => 'Hide / Show Subcribe Button',
        'type' => 'checkbox',
        'section' => 'rancak-header-tools',
    ));

    // Subscribe link
    $wp_customize->add_setting('subscribe_link', array(
        'type' => 'theme_mod',
        'default' => '#',
        'sanitize_callback' => 'esc_url'
    ));
    $wp_customize->add_control('subscribe_link', array(
        'title' => 'Subscribe Link',
        'section' => 'rancak-header-tools',
        'type' => 'url',
        'label' => 'Subscribe Link',
    ));
}

add_action('customize_register', 'theme_customizer_function');

function sanitize_checkbox( $checked ) {
    return ( ( isset( $checked ) && true === $checked ) ? true : false );
}