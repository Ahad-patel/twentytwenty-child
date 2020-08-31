<?php 
	add_action('wp_enqueue_scripts','enqueue_parent_styles');

	function enqueue_parent_styles() {
		wp_enqueue_style('twentytwenty-style',get_template_directory_uri().'/style.css');
	}
 
 //My first custom post type

add_action('init','my_new_custom_post');
function my_new_custom_post() {
	$labels = array(
		'name'			     =>	'Shipment',
		'singular_name'      => 'Shipment',
		'add_new' 		     => 'Add new',
		'add_new_item'	     => 'Add New shipment',
		'edit_item'		     => 'edit shipment',
		'new_item' 		     => 'New Shipment',
		'view_item' 	     => 'view Shipment',
		'view_items' 	     => 'View Shipments',
		'not_found' 	     => 'No Shipments found',
		'not_found_in_trash' => 'Not found in trash',
		'all_items'			 => 'All Shipments',
		'attributes'		 => 'Shipment Attributes',
	);

	$args = array(

		'labels' => $labels,
		'description' => 'This is my new custom post on shipment',
		'public' => true,
		'menu_postion' => 5,
		'supports' => array('title','editor','thumbnail','excerpt','custom-feilds','post-formats'),
		'has_archive' => true,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,

	);
	register_post_type('article',$args);
}

 ?>

  