<?php

function create_post_type(){
	register_post_type('guide', array(
		'labels' => array(
			'name' => 'Guider',
			'singular_name' => 'Guide'
		),
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-location-alt'
	));
}

add_action('init' , 'create_post_type');