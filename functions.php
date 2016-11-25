<?php

function my_scripts_styles() {
	wp_enqueue_style("main_style", get_stylesheet_url());
}

add_action('wp_enqueue_scripts', 'my_scripts_styles');