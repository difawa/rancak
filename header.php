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
<!-- The script and the div for admin bar. -->
<?php wp_body_open(); ?>
<!-- Here the site -->
<div id="page-container">
    <!-- The header section -->
    <header>
        <div class="site-branding-text">
            <?php if (is_front_page() || is_home()) { ?>
            <h1 class="site-title">
                <a href="<?php echo esc_url(home_url( '/' )); ?>" rel="home"><?php echo esc_html(get_bloginfo('name')); ?></a>
            </h1>
            <?php } else { ?>
            <p class="site-title">
                <a href="<?php echo esc_url(home_url( '/' )); ?>" rel="home"><?php echo esc_html(get_bloginfo('name')); ?></a>
            </p>
            <?php } ?>
            <p class="site-description">
                <?php
                echo esc_html(get_bloginfo('description'));
                ?>
            </p>
        </div>

        <nav id="navbar-top">
        <?php $menu_args = array(
            'rancak' => 'primary-menu', // Lokasi tema dari menu yang ingin ditampilkan
            'container' => 'nav', // Jenis container HTML yang ingin digunakan
            'container_class' => 'main-menu', // Kelas CSS untuk container
            'menu_class' => 'menu', // Kelas CSS untuk menu
            'fallback_cb' => false // Mengabaikan callback jika menu tidak ada
        ); wp_nav_menu($menu_args); ?>
        </nav>
    </header>
