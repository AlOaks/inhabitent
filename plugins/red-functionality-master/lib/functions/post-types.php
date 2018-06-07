<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
function custom_product_type_post() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'inhabitent-project-4' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'inhabitent-project-4' ),
		'menu_name'             => __( 'Products', 'inhabitent-project-4' ),
		'name_admin_bar'        => __( 'Products', 'inhabitent-project-4' ),
		'archives'              => __( 'Product Archives', 'inhabitent-project-4' ),
		'attributes'            => __( 'Product Attributes', 'inhabitent-project-4' ),
		'parent_item_colon'     => __( 'Parent Item:', 'inhabitent-project-4' ),
		'all_items'             => __( 'All Items', 'inhabitent-project-4' ),
		'add_new_item'          => __( 'Add New Item', 'inhabitent-project-4' ),
		'add_new'               => __( 'Add New', 'inhabitent-project-4' ),
		'new_item'              => __( 'New Item', 'inhabitent-project-4' ),
		'edit_item'             => __( 'Edit Item', 'inhabitent-project-4' ),
		'update_item'           => __( 'Update Item', 'inhabitent-project-4' ),
		'view_item'             => __( 'View Item', 'inhabitent-project-4' ),
		'view_items'            => __( 'View Items', 'inhabitent-project-4' ),
		'search_items'          => __( 'Search Item', 'inhabitent-project-4' ),
		'not_found'             => __( 'Not found', 'inhabitent-project-4' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'inhabitent-project-4' ),
		'featured_image'        => __( 'Featured Image', 'inhabitent-project-4' ),
		'set_featured_image'    => __( 'Set featured image', 'inhabitent-project-4' ),
		'remove_featured_image' => __( 'Remove featured image', 'inhabitent-project-4' ),
		'use_featured_image'    => __( 'Use as featured image', 'inhabitent-project-4' ),
		'insert_into_item'      => __( 'Insert into item', 'inhabitent-project-4' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'inhabitent-project-4' ),
		'items_list'            => __( 'Items list', 'inhabitent-project-4' ),
		'items_list_navigation' => __( 'Items list navigation', 'inhabitent-project-4' ),
		'filter_items_list'     => __( 'Filter items list', 'inhabitent-project-4' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'inhabitent-project-4' ),
		'description'           => __( 'Custom Post Type for Products', 'inhabitent-project-4' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'products', $args );

}
add_action( 'init', 'custom_product_type_post', 0 );

function custom_adventures_post() {

	$labels = array(
		'name'                  => _x( 'Adventures', 'Post Type General Name', 'inhabitent-project-4' ),
		'singular_name'         => _x( 'Adventure', 'Post Type Singular Name', 'inhabitent-project-4' ),
		'menu_name'             => __( 'Adventures', 'inhabitent-project-4' ),
		'name_admin_bar'        => __( 'Adventures', 'inhabitent-project-4' ),
		'archives'              => __( 'Adventure Archives', 'inhabitent-project-4' ),
		'attributes'            => __( 'Adventure Attributes', 'inhabitent-project-4' ),
		'parent_item_colon'     => __( 'Parent Item:', 'inhabitent-project-4' ),
		'all_items'             => __( 'All Items', 'inhabitent-project-4' ),
		'add_new_item'          => __( 'Add New Item', 'inhabitent-project-4' ),
		'add_new'               => __( 'Add New', 'inhabitent-project-4' ),
		'new_item'              => __( 'New Item', 'inhabitent-project-4' ),
		'edit_item'             => __( 'Edit Item', 'inhabitent-project-4' ),
		'update_item'           => __( 'Update Item', 'inhabitent-project-4' ),
		'view_item'             => __( 'View Item', 'inhabitent-project-4' ),
		'view_items'            => __( 'View Items', 'inhabitent-project-4' ),
		'search_items'          => __( 'Search Item', 'inhabitent-project-4' ),
		'not_found'             => __( 'Not found', 'inhabitent-project-4' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'inhabitent-project-4' ),
		'featured_image'        => __( 'Featured Image', 'inhabitent-project-4' ),
		'set_featured_image'    => __( 'Set featured image', 'inhabitent-project-4' ),
		'remove_featured_image' => __( 'Remove featured image', 'inhabitent-project-4' ),
		'use_featured_image'    => __( 'Use as featured image', 'inhabitent-project-4' ),
		'insert_into_item'      => __( 'Insert into item', 'inhabitent-project-4' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'inhabitent-project-4' ),
		'items_list'            => __( 'Items list', 'inhabitent-project-4' ),
		'items_list_navigation' => __( 'Items list navigation', 'inhabitent-project-4' ),
		'filter_items_list'     => __( 'Filter items list', 'inhabitent-project-4' ),
	);
	$argsad = array(
		'label'                 => __( 'Adventure', 'inhabitent-project-4' ),
		'description'           => __( 'Custom Post Type for Adventures', 'inhabitent-project-4' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'adventures', $argsad );

}
add_action( 'init', 'custom_adventures_post', 0 );