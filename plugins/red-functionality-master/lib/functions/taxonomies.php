<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function custom_product_type_tax() {

	$labels = array(
		'name'                       => _x( 'Product Types', 'Taxonomy General Name', 'inhabitent-project-4' ),
		'singular_name'              => _x( 'Product Type', 'Taxonomy Singular Name', 'inhabitent-project-4' ),
		'menu_name'                  => __( 'Product Types', 'inhabitent-project-4' ),
		'all_items'                  => __( 'All Product Types', 'inhabitent-project-4' ),
		'parent_item'                => __( 'Parent Product Types', 'inhabitent-project-4' ),
		'parent_item_colon'          => __( 'Parent Product Types:', 'inhabitent-project-4' ),
		'new_item_name'              => __( 'New Product Type', 'inhabitent-project-4' ),
		'add_new_item'               => __( 'Add Product Type', 'inhabitent-project-4' ),
		'edit_item'                  => __( 'Edit Product Type', 'inhabitent-project-4' ),
		'update_item'                => __( 'Update Product Type', 'inhabitent-project-4' ),
		'view_item'                  => __( 'View Product Type', 'inhabitent-project-4' ),
		'separate_items_with_commas' => __( 'Separate Product Types with commas', 'inhabitent-project-4' ),
		'add_or_remove_items'        => __( 'Add or remove Product Types', 'inhabitent-project-4' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'inhabitent-project-4' ),
		'popular_items'              => __( 'Popular Product Types', 'inhabitent-project-4' ),
		'search_items'               => __( 'Search Product Types', 'inhabitent-project-4' ),
		'not_found'                  => __( 'Not Found', 'inhabitent-project-4' ),
		'no_terms'                   => __( 'No Product Types', 'inhabitent-project-4' ),
		'items_list'                 => __( 'Product Types list', 'inhabitent-project-4' ),
		'items_list_navigation'      => __( 'Product Types list navigation', 'inhabitent-project-4' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product_type', array( 'products' ), $args );

}
add_action( 'init', 'custom_product_type_tax', 0 );
