<?php 
/**
 * Navigation template.
 * 
 * @package Rancak
 */

wp_nav_menu( array(
    'theme_location' => 'header-menu',
    'container' => 'nav',
    'container_class' => 'col-lg-7 d-lg-block none',
    'menu_class' => 'flex-row position-relative navbar'
));