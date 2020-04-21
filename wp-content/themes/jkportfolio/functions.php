<?php

function get_scripts()
{
	
	wp_enqueue_style('reset_styles', (get_stylesheet_directory_uri() . "/reset.css"), null);
	wp_enqueue_style('main_styles', get_stylesheet_uri(), null);
	// wp_enqueue_script('main_js', get_stylesheet_directory_uri('scripts/main.js'), array('jquery'), true);
	wp_enqueue_script('main_js', (get_stylesheet_directory_uri() . "/scripts/main.js"), array('jquery') );
}
add_action('wp_enqueue_scripts', 'get_scripts');