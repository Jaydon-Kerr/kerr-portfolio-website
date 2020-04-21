<?php
function post_types()
{
	// Project custom post type
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
		'show_in_rest' => true,
		'menu_icon' => 'dashicons-hammer',
		'rewrite' => array(
			'slug' => 'websites'
		)
	));
}
add_action('init', 'post_types');
?>