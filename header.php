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
    <header class="row w-100 align-items-center">
        <div class="site-branding-text col-lg-3">
            <?php if (is_front_page() || is_home()) { ?>
            <h1 class="site-title">
                <a href="<?php echo esc_url(home_url( '/' )); ?>" rel="home"><?php echo esc_html(get_bloginfo('name')); ?></a>
            </h1>
            <?php } else { ?>
            <p class="site-title">
                <a href="<?php echo esc_url(home_url( '/' )); ?>" rel="home"><?php echo esc_html(get_bloginfo('name')); ?></a>
            </p>
            <?php } ?>
            <p class="site-description my-0">
                <?php
                echo esc_html(get_bloginfo('description'));
                ?>
            </p>
        </div>

        <?php get_template_part('template-parts/header/nav'); ?>

        <div class="header-tools col-lg-2 row">
            <?php if (get_theme_mod('subscribe_button')) {  ?>
            <a class="subscribe-btn" href=" <?php echo get_theme_mod('subscribe_link') ?> " target="_blank">
                <i class="fas fa-bell"></i>
            </a>
            <?php } ?>
        </div>
    </header>
