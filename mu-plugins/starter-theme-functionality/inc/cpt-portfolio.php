<?php
/**
 * Custom Post Types: Portfolio
 */
function cptui_register_portfolio_cpt() {

	/**
	 * Post Type: Portfolio.
	 */

	$labels = array(
		'name' => __( 'Portfolio', 'starter-theme' ),
		'singular_name' => __( 'Portfolio Item', 'starter-theme' ),
	);

	$args = array(
		'label' => __( 'Portfolio', 'starter-theme' ),
		'labels' => $labels,
		'description' => '',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_rest' => false,
		'rest_base' => '',
		'has_archive' => true,
		'show_in_menu' => true,
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array( 'slug' => 'portfolio', 'with_front' => true ),
		'query_var' => true,
		'menu_icon' => 'dashicons-laptop',
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'portfolio', $args );
}

add_action( 'init', 'cptui_register_portfolio_cpt' );
