<?php 
/**
 * Navigation template.
 * 
 * @package Rancak
 */

wp_nav_menu( array(
    'theme_location' => 'header-menu',
    'container' => 'nav',
    'container_class' => 'col-lg-7',
    'container_id' => 'menu-header-container',
    'menu_class' => 'row relative'
));