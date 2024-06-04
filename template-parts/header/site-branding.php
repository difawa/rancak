<?php 
/**
 * Site branding template. It is include site name, site description, or logo.
 * 
 * @package Rancak
 */

 ?>

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