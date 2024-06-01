<?php 
/**
 * Navigation template.
 * 
 * @package Rancak
 */

?>

<nav id="navbar-top" class="col-lg-7 mx-auto">
    <?php $menu_args = array(
        'rancak' => 'primary-menu', // Lokasi tema dari menu yang ingin ditampilkan
        'container' => 'nav', // Jenis container HTML yang ingin digunakan
        'container_class' => 'main-menu', // Kelas CSS untuk container
        'menu_class' => 'menu', // Kelas CSS untuk menu
        'fallback_cb' => false // Mengabaikan callback jika menu tidak ada
    ); wp_nav_menu($menu_args); ?>
</nav>