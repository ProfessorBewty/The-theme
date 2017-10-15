<?php

function first_script_enqueue() {
	
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/practice.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/practice.js', array(), '1.0.0', 'true');
	
}

add_action('wp_enqueue_scripts', 'first_script_enqueue');

function first_theme_setup() {
	add_theme_support('menus');
}

add_action('init', 'first_theme_setup');
