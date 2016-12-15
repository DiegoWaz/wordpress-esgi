<?php

function my_scripts_styles(){
	wp_enqueue_style("main_style", get_stylesheet_uri());
	wp_enqueue_style("bootstrap-css", get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style("bootstrap-js", get_template_directory_uri().'/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts', 'my_scripts_styles');


function my_menus(){
	register_nav_menu('main_menu', "Menu principal");
	register_nav_menu('footer_menu', "Menu de pied de page");
}

add_action('init', 'my_menus');

// function my_sidebars() {
// 	register_sidebar(array(
// 		'name' => 'Barre latérale',
// 		'description' => 'Cette colonne s\'affiche sur toutes les pages, pour l\'instant...',
// 		'id' => 'sidebar-1'		
// 	));
// }

function my_sidebars() {
	register_sidebar(array(
		'name' => __('Main_Sidebar', 'montheme'),
		'id' => 'sidebar-1',
		'description' => __('Widgets in this area will be shown ')
		));

	register_sidebar(array( 
		'name'=>'footer-ABOUT', 
		'id' => 'sidebar-2',
		'before_widget' => '<li>', 
		'after_widget' => '</li>', 
		'before_title' => '<h2>', 
		'after_title' => '</h2>', 
	)); 

	register_sidebar(array( 
		'name'=>'footer-NETWORKS', 
		'id' => 'sidebar-3',
		'before_widget' => '<li>', 
		'after_widget' => '</li>', 
		'before_title' => '<h2>', 
		'after_title' => '</h2>', 
	));

	register_sidebar(array( 
		'name'=>'footer-HELP', 
		'id' => 'sidebar-4',
		'before_widget' => '<li>', 
		'after_widget' => '</li>', 
		'before_title' => '<h2>', 
		'after_title' => '</h2>', 
	));
}

add_action('widgets_init', 'my_sidebars');

add_theme_support('custom-header');

add_theme_support('post-thumbnails');

add_theme_support('custom-background');

add_action('after_setup_theme', 'wpdocs_theme_setup');

function wpdocs_theme_setup() {
	add_image_size('banner', 1240, 150, true);
}

function colors($init) {
	$couleurs = '
	"000000", "Black",
	"993300", "Burnt orange",
	"333300", "Dark olive",
	"003300", "Dark green",
	"003366", "Dark azure",
	"000080", "Navy Blue",
	"333399", "Indigo",
	"333333", "Very dark gray",
	"800000", "Maroon",
	"FF6600", "Orange",
	"808000", "Olive",
	"008000", "Green",
	"008080", "Teal",
	"0000FF", "Blue",
	"666699", "Grayish blue",
	"808080", "Gray",
	"FF0000", "Red",
	"FF9900", "Amber",
	"99CC00", "Yellow green",
	"339966", "Sea green",
	"33CCCC", "Turquoise",
	"3366FF", "Royal blue",
	"800080", "Purple",
	"999999", "Medium gray",
	"FF00FF", "Magenta",
	"FFCC00", "Gold",
	"FFFF00", "Yellow",
	"00FF00", "Lime",
	"00FFFF", "Aqua",
	"00CCFF", "Sky blue",
	"993366", "Red violet",
	"FFFFFF", "White",
	"FF99CC", "Pink",
	"FFCC99", "Peach",
	"FFFF99", "Light yellow",
	"CCFFCC", "Pale green",
	"CCFFFF", "Pale cyan",
	"99CCFF", "Light sky blue",
	"CC99FF", "Plum"
	';
	
	// COULEUR PERSONNALISABLE ICI
	$custom_couleurs = '
	"ff7f0f", "Orange DF",
	"323232", "Gris foncé DF",
	"f5f7f6", "Gris Clair DF"
	';
	$init['textcolor_map'] = '['.$custom_couleurs.','.$couleurs.']';
	$init['textcolor_rows'] = 6;
	return $init;
}


add_action('init', 'custom_post_type');

function custom_post_type() {
	register_post_type('events', 
		array(
			'labels' => array(
				'name' => __('Events'),
				'singular_name' => __('Events')
			),
			'public' => true
			)
		);
}
