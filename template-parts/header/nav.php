<?php 
/**
 * Navigation template.
 * 
 * @package Rancak
 */

//  The default fallback_cb for wp_nav_menu is wp_page_menu. This theme use custom fallback based on wp_nav_menu. With this fallback, the HTML structure of empty menu (page list in default) is similar.
 function rancak_page_menu( $args = array() ) {
	$defaults = array( 'sort_column'  => 'menu_order, post_title', 'menu_id'      => '', 'menu_class'   => 'menu', 'container'    => 'div', 'echo'         => true, 'link_before'  => '', 'link_after'   => '', 'before'       => '<ul>', 'after'        => '</ul>', 'item_spacing' => 'discard', 'walker'       => '', );
	$args     = wp_parse_args( $args, $defaults );

	if ( ! in_array( $args['item_spacing'], array( 'preserve', 'discard' ), true ) ) {
		// Invalid value, fall back to default.
		$args['item_spacing'] = $defaults['item_spacing'];
	}

	if ( 'preserve' === $args['item_spacing'] ) {
		$t = "\t";
		$n = "\n";
	} else {
		$t = '';
		$n = '';
	}

	/**
	 * Filters the arguments used to generate a page-based menu.
	 *
	 * @since 2.7.0
	 *
	 * @see wp_page_menu()
	 *
	 * @param array $args An array of page menu arguments. See wp_page_menu()
	 *                    for information on accepted arguments.
	 */
	$args = apply_filters( 'rancak_page_menu_args', $args );

	$menu = '';

	$list_args = $args;

	// Show Home in the menu.
	if ( ! empty( $args['show_home'] ) ) {
		if ( true === $args['show_home'] || '1' === $args['show_home'] || 1 === $args['show_home'] ) {
			$text = __( 'Home' );
		} else {
			$text = $args['show_home'];
		}
		$class = '';
		if ( is_front_page() && ! is_paged() ) {
			$class = 'class="current_page_item"';
		}
		$menu .= '<li ' . $class . '><a href="' . esc_url( home_url( '/' ) ) . '">' . $args['link_before'] . $text . $args['link_after'] . '</a></li>';
		// If the front page is a page, add it to the exclude list.
		if ( 'page' === get_option( 'show_on_front' ) ) {
			if ( ! empty( $list_args['exclude'] ) ) {
				$list_args['exclude'] .= ',';
			} else {
				$list_args['exclude'] = '';
			}
			$list_args['exclude'] .= get_option( 'page_on_front' );
		}
	}

	$list_args['echo']     = false;
	$list_args['title_li'] = '';
	$menu                 .= wp_list_pages( $list_args );

	$container = sanitize_text_field( $args['container'] );

	// Fallback in case `wp_nav_menu()` was called without a container.
	if ( empty( $container ) ) {
		$container = 'div';
	}

	if ( $menu ) {

		// wp_nav_menu() doesn't set before and after.
		if ( isset( $args['fallback_cb'] ) &&
			'rancak_page_menu' === $args['fallback_cb'] &&
			'ul' !== $container ) {
			$args['before'] = "<ul class='flex-row position-relative'>{$n}";
			$args['after']  = '</ul>';
		}

		$menu = $args['before'] . $menu . $args['after'];
	}

	$attrs = '';
	if ( ! empty( $args['container_id'] ) ) {
		$attrs .= ' id="' . esc_attr( $args['container_id'] ) . '"';
	}

	if ( ! empty( $args['container_class'] ) ) {
		$attrs .= ' class="' . esc_attr( $args['container_class'] ) . '"';
	}

	$menu = "<{$container}{$attrs}>" . $menu . "</{$container}>{$n}";

	/**
	 * Filters the HTML output of a page-based menu.
	 *
	 * @since 2.7.0
	 *
	 * @see wp_page_menu()
	 *
	 * @param string $menu The HTML output.
	 * @param array  $args An array of arguments. See wp_page_menu()
	 *                     for information on accepted arguments.
	 */
	$menu = apply_filters( 'rancak_page_menu', $menu, $args );

	if ( $args['echo'] ) {
		echo $menu;
	} else {
		return $menu;
	}
}

function rancak_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) ){$args['show_home'] = true;}
    $args['menu_id'] .= 'oke';
	return $args;
}
add_filter( 'rancak_page_menu_args', 'rancak_page_menu_args' ); 



wp_nav_menu( array(
    'theme_location' => 'header-menu',
    'container' => 'nav',
    'container_class' => 'col-lg-7 d-lg-block none',
    'container_id' => 'top-nav',
    'menu_class' => 'flex-row position-relative',
    'fallback_cb'=> 'rancak_page_menu'
));



