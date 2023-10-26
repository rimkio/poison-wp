<?php

/**
 * Use this file to register any custom post types you wish to create.
 */
if (!function_exists('poison_create_custom_post_type')) {
	// Register Custom Post Type
	function poison_create_custom_post_type()
	{
		register_post_type('events', array(
			'label'               => __('Events', 'poison'),
			'description'         => __('Events', 'poison'),
			//'labels'                => $labels,
			'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
			'taxonomies'          => array(''),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'		  => 'dashicons-calendar',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest'        => true,
		));

	}
	//sadd_action('init', 'poison_create_custom_post_type', 0); 
}

if (!function_exists('poison_create_custom_taxonomy')) {
	function poison_create_custom_taxonomy()
	{
		register_taxonomy('venues', array('events'), array(
			'labels'            => array(
				'name'          => _x('Venues', 'Taxonomy General Name', 'poison'),
				'singular_name' => _x('Venues', 'Taxonomy Singular Name', 'poison'),
				'menu_name'     => __('Venues', 'poison'),
				'all_items'         => __('All Venues', 'poison'),
				'edit_item'         => __('Edit Venues', 'poison'),
				'update_item'       => __('Update Venues', 'poison'),
				'add_new_item'      => __('Add New Venues', 'poison'),
			),
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_in_rest'      => true,

		));
	}

	//add_action('init', 'poison_create_custom_taxonomy', 0);
}
