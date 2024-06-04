<?php
/**
 * The header template.
 * 
 * @package Rancak
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header class="container flex-row align-items-center">
        <div class="ham-option me-auto d-lg-none">
            <div class="ham-btn">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        
        <?php get_template_part('template-parts/header/site-branding') ?>
        <?php get_template_part('template-parts/header/nav'); ?>
        <?php get_template_part('template-parts/header/tools') ?>


    </header>
