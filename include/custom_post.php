<?php 

//Custom Post Types
function homeo_cust_posttype(){

	/*$labels_team = array(
		'name'					=> __('Team'), 							//Custom Post Types for Team
		'singular_name'			=> __('team'),
		'menu_name'				=> __('Our Team'),
		'name_admin_bar'		=> __('Add Member'),
		'add_new'				=> __('Add New'),
		'add_new_item'			=> __('Add New Member'), 
		'edit_item'				=> __('Edit Member'),
    	'new_item'				=> __('New Member'), 
    	'view_item'				=> __('View Member'),
    	'search_items'			=> __('Search Member'), 
    	'not_found'				=> __('No Member found'),
    	'not_found_in_trash'	=> __('No Member found in Trash')
    );

	$args_team = array(
		'labels' 				=> $labels_team,
		'public'				=> true,
		'publicly_queryable'	=> true,
    	'show_ui'				=> true,
    	'query_var'				=> true,
    	'rewrite'				=> array('slug' => 'team'),
    	'capability_type'		=> 'post',
    	'menu_position'			=> 4,
    	'taxonomies'			=> array('category', 'post_tag'),
    	'menu_icon'				=> 'dashicons-businessman',
    	'supports'				=> array('title','editor', 'excerpt', 'thumbnail', 'page-attributes'),
    );
	register_post_type('our-team',$args_team);*/


	$labels_faqs = array(
		'name'					=> __('FAQs'), 							//Custom Post Types for FAQs
		'singular_name'			=> __('FAQ'),
		'menu_name'				=> __('All FAQs'),
		'name_admin_bar'		=> __('Add FAQ'),
		'add_new'				=> __('Add New'),
		'add_new_item'			=> __('Add New FAQ'), 
		'edit_item'				=> __('Edit FAQ'),
    	'new_item'				=> __('New FAQ'), 
    	'view_item'				=> __('View FAQ'),
    	'search_items'			=> __('Search FAQ'), 
    	'not_found'				=> __('No FAQ found'),
    	'not_found_in_trash'	=> __('No FAQ found in Trash')
    );

	$args_faqs = array(
		'labels' 				=> $labels_faqs,
		'public'				=> true,
		'publicly_queryable'	=> true,
    	'show_ui'				=> true,
    	'query_var'				=> true,
    	'rewrite'				=> array('slug' => 'faqs'),
    	'capability_type'		=> 'post',
    	'menu_position'			=> 5,
    	'taxonomies'			=> array('category', 'post_tag'),
    	'menu_icon'				=> 'dashicons-editor-help',
    	'supports'				=> array('title','editor', 'excerpt', 'page-attributes'),
    );
	register_post_type('our-faqs',$args_faqs);


	/*$testimonial_labels = array(
		'name'               => _x( 'Testimonial', 'post type general name' ),   //Custom Post for Testimonial
		'singular_name'      => _x( 'Testimonial', 'post type singular name' ),
		'menu_name'          => _x( 'Testimonials', 'admin menu' ),
		'name_admin_bar'     => _x( 'Testimonials', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'Testimonial' ),
		'add_new_item'       => __( 'Add New Testimonial' ),
		'new_item'           => __( 'New Testimonial' ),
		'edit_item'          => __( 'Edit Testimonial' ),
		'view_item'          => __( 'View Testimonial' ),
		'all_items'          => __( 'All Testimonial' ),
		'search_items'       => __( 'Search Testimonials' ),
		'parent_item_colon'  => __( 'Parent Testimonials:' ),
		'not_found'          => __( 'No Testimonials found.' ),
		'not_found_in_trash' => __( 'No Testimonials found in Trash.' )
	);

	$testimonial_args = array(
		'labels'             => $testimonial_labels,
        'description'        => __( 'Description.' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'exclude_from_search' => false,
		'hierarchical'       => false,
		'menu_position'      => 21,
		'supports'           => array( 'title', 'thumbnail', 'editor', 'page-attributes' )
	);

	register_post_type( 'testimonials', $testimonial_args );*/


	/*$product_labels = array(
		'name'               => _x( 'Product', 'post type general name' ),			//Custom Post for Products
		'singular_name'      => _x( 'Product', 'post type singular name' ),
		'menu_name'          => _x( 'Products', 'admin menu' ),
		'name_admin_bar'     => _x( 'Products', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'Product' ),
		'add_new_item'       => __( 'Add New Product' ),
		'new_item'           => __( 'New Product' ),
		'edit_item'          => __( 'Edit Product' ),
		'view_item'          => __( 'View Product' ),
		'all_items'          => __( 'All Product' ),
		'search_items'       => __( 'Search Products' ),
		'parent_item_colon'  => __( 'Parent Products:' ),
		'not_found'          => __( 'No Products found.' ),
		'not_found_in_trash' => __( 'No Products found in Trash.' )
	);

	$product_args = array(
		'labels'             => $product_labels,
        'description'        => __( 'Description.' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'				=> array('slug' => 'products'),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'exclude_from_search' => false,
		'hierarchical'       => false,
		'menu_position'      => 21,
		'supports'           => array( 'title', 'thumbnail', 'editor', 'page-attributes' )
	);

	register_post_type( 'product', $product_args );


	$labels_product_cat = array(
		'name'              => _x( 'Product Categories', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Product Category', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Product Categories', 'textdomain' ),
		'all_items'         => __( 'All Product Categories', 'textdomain' ),
		'parent_item'       => __( 'Parent Product Category', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Product Category:', 'textdomain' ),
		'edit_item'         => __( 'Edit Product Category', 'textdomain' ),
		'update_item'       => __( 'Update Product Category', 'textdomain' ),
		'add_new_item'      => __( 'Add New Product Category', 'textdomain' ),
		'new_item_name'     => __( 'New Product Category Name', 'textdomain' ),
		'menu_name'         => __( 'Product Category', 'textdomain' ),
	);

	$args_product_cat = array(
		'hierarchical'      => true,
		'labels'            => $labels_product_cat,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'product-category' ),
	);

	register_taxonomy( 'product_cat', array( 'product' ), $args_product_cat );*/

	$labels_ebook = array(
		'name'					=> __('eBooks'), 							//Custom Post Types for eBooks
		'singular_name'			=> __('ebook'),
		'menu_name'				=> __('Our eBooks'),
		'name_admin_bar'		=> __('Add eBook'),
		'add_new'				=> __('Add New'),
		'add_new_item'			=> __('Add New eBook'), 
		'edit_item'				=> __('Edit eBook'),
    	'new_item'				=> __('New eBook'), 
    	'view_item'				=> __('View eBook'),
    	'search_items'			=> __('Search eBook'), 
    	'not_found'				=> __('No eBook found'),
    	'not_found_in_trash'	=> __('No eBook found in Trash')
    );

	$args_ebook = array(
		'labels' 				=> $labels_ebook,
		'public'				=> true,
		'publicly_queryable'	=> true,
    	'show_ui'				=> true,
    	'query_var'				=> true,
    	'rewrite'				=> array('slug' => 'ebooks'),
    	'capability_type'		=> 'post',
    	'menu_position'			=> 6,
    	'taxonomies'			=> array('category', 'post_tag'),
    	'menu_icon'				=> 'dashicons-book-alt',
    	'supports'				=> array('title','editor', 'excerpt', 'thumbnail', 'page-attributes'),
    );
	register_post_type('our-ebooks',$args_ebook);
}
add_action('init', 'homeo_cust_posttype');