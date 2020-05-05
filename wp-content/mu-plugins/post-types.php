<?php
function post_types()
{
	// Website custom post type
	register_post_type('website', array(
		'labels' => array(
			'name' => 'Websites',
			'add_new_item' => 'Add New Website',
			'edit_item' => 'Edit Website',
			'all_items' => 'All Websites',
			'singular_name' => 'Website'
		),
		'description' => 'Website custom content type',
		'public' => true,
		'menu_icon' => 'dashicons-admin-site-alt2',
		'rewrite' => array(
			'slug' => 'websites'
		)
	));
	// javascript custom post type
	register_post_type('javascript', array(
		'labels' => array(
			'name' => 'JavaScript',
			'add_new_item' => 'Add New JavaScript',
			'edit_item' => 'Edit JavaScript',
			'all_items' => 'All JavaScript',
			'singular_name' => 'JavaScript'
		),
		'description' => 'JavaScript custom content type',
		'public' => true,
		'menu_icon' => 'dashicons-media-code',
		'rewrite' => array(
			'slug' => 'javascript'
		)
	));
	// Graphic custom post type
	register_post_type('graphic', array(
		'labels' => array(
			'name' => 'Graphics',
			'add_new_item' => 'Add New Graphic',
			'edit_item' => 'Edit Graphic',
			'all_items' => 'All Graphics',
			'singular_name' => 'Graphic'
		),
		'description' => 'Graphic custom content type',
		'public' => true,
		'menu_icon' => 'dashicons-format-image',
		'rewrite' => array(
			'slug' => 'graphics'
		)
	));
}
add_action('init', 'post_types');
?>