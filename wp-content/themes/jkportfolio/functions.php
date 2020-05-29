<?php

function get_scripts()
{
	
	wp_enqueue_style('reset_styles', (get_stylesheet_directory_uri() . "/reset.css"), null);
	wp_enqueue_style('main_styles', get_stylesheet_uri(), null);
	wp_enqueue_script('jquery.jcarousel.js', (get_stylesheet_directory_uri() . "/scripts/jquery.jcarousel.js"), array('jquery') );
	wp_enqueue_script('main.js', (get_stylesheet_directory_uri() . "/scripts/main.js"), array('jquery') );
	// Google CSE
	// wp_enqueue_script('searchEngine.js', (get_stylesheet_directory_uri() . "/scripts/searchEngine.js"), array('jquery') );
	// jService
	// wp_enqueue_script('searchEngine.js', (get_stylesheet_directory_uri() . "/scripts/jservice.js"), array('jquery') );
	// YouTube
	// wp_enqueue_script('searchEngine.js', (get_stylesheet_directory_uri() . "/scripts/searchYoutube.js"), array('jquery') );
}
add_action('wp_enqueue_scripts', 'get_scripts');