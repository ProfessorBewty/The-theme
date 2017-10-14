<?php

function first_script_enqueue(){
	wp_enqueue_style('customstyle', /var/www/html/wordpress/wp-content/themes/practice-theme, array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'first_script_enqueue');