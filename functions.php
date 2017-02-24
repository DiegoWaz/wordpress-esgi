<?php
/**
 * Debug Functions
 */


/**
 * Get css url
 */
function css_uri(){
	return get_theme_file_uri('/assets/css/');
}

/**
 * Get js uri
 */
function js_uri(){
	return get_theme_file_uri('/assets/js/');
}

/**
 * Get img uri
 */
function img_uri(){
	return get_theme_file_uri('/assets/img/');
}

/**
 * Get logo url
 */
function logo_url(){
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	return $image[0];	
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */

function begreen_setup() {

	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'begreen' );
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'begreen' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add HTML5 theme support.
    add_theme_support( 'html5', array( 'search-form' ) );

	// Add thumbnail to product
	add_theme_support( 'post-thumbnails' );          
}

add_action( 'after_setup_theme', 'begreen_setup' );



/**
 * Create begreen product type
 */
add_action( 'init', 'create_product_type' );

function create_product_type() {
	// Post type
	register_post_type( 'begreen_product',
	    array(
	      'labels' => array(
	        'name' => __( 'Produits' ),
	        'singular_name' => __( 'Produit' )
	      ),
	      'public' => true,
	      'has_archive' => true,
	      'rewrite' => array('slug' => 'produits'),
	      'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' )
	    )
	);

	// taxonomy type
	register_taxonomy(
		'categories',
		'begreen_product',
		array(
			'label' => __( 'Categories' ),
			'rewrite' => array( 'slug' => 'category' ),
			'hierarchical' => true,

		)
	);
}


/**
 * Create begreen slide type
 */
add_action( 'init', 'create_slide_type' );

function create_slide_type() {
	// Post type
	register_post_type( 'begreen_slide',
	    array(
	      'labels' => array(
	        'name' => __( 'Slides' ),
	        'singular_name' => __( 'Slide' )
	      ),
	      'public' => true,
	      'has_archive' => true,
	      'rewrite' => array('slug' => 'slides'),
	      'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' )
	    )
	);

	// taxonomy type
	register_taxonomy(
		'slide_categories',
		'begreen_slide',
		array(
			'label' => __( 'Categories' ),
			'rewrite' => array( 'slug' => 'category_slide' ),
			'hierarchical' => true,

		)
	);
}


/**
 * Enqueue scripts and styles.
 */
function begreen_scripts() {
	// Theme stylesheets
	//dd(get_theme_file_uri('/assets/css/font-awesome.min.css'));
	wp_enqueue_style( 'bootstrap-style', css_uri() . 'bootstrap.min.css' );
	wp_enqueue_style( 'begreen-style', get_stylesheet_uri() );
	wp_enqueue_style( 'creemson-style', css_uri() . 'creemson.css' );
	
	// Font stylesheets
	wp_enqueue_style( 'font-awesome-style', get_theme_file_uri( '/assets/css/font-awesome.min.css') );
	wp_enqueue_style( 'font-awesome-style', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'slick-style', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css' );
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Montserrat:400,700' );
	wp_enqueue_style( 'google-font-2', 'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' );

	// Theme scripts
	wp_enqueue_script( 'begreen-jquery', js_uri() . 'jquery-3.1.1.min.js' , '3.1.1', true, '', true );
    //Bootstrap Core JavaScript
	wp_enqueue_script( 'begreen-bootstrap', js_uri() . 'bootstrap.min.js', array('begreen-jquery'), true, '', true );
    //Plugin JavaScript
	wp_enqueue_script( 'begreen-js-plugin', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', '1.3' , array('begreen-jquery'), true, '', true );
	wp_enqueue_script( 'begreen-js-slick', 'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', '1.3' , array('begreen-jquery'), true, '', true );
	wp_enqueue_script( 'begreen-jqBootstrapValidation', js_uri() . 'jqBootstrapValidation.js' , array('begreen-jquery', 'begreen-js-plugin') , true, '', true );
	wp_enqueue_script( 'begreen-script', js_uri() . 'script.js' , array('begreen-jquery', 'begreen-js-slick') , true, '', true );
    //Contact Form JavaScript
	//wp_enqueue_script( 'begreen-contact_me', js_uri() . 'contact_me.js'  );
    
    //Theme JavaScript
	wp_enqueue_script( 'begreen-freelancer.min', js_uri() . 'freelancer.min.js', array('begreen-jquery', 'begreen-js-plugin'), true, '', true );
	//wp_enqueue_script( 'begreen-freelancer', js_uri() . 'freelancer.js', array('begreen-jquery', 'begreen-js-plugin'), true );

}
add_action( 'wp_enqueue_scripts', 'begreen_scripts' );

/**
 * Register our sidebars and widgetized areas.
 */
function begreen_widgets_init() {

	register_sidebar( array(
		'name'          => 'Header right sidebar',
		'id'            => 'header_right',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );

}
add_action( 'widgets_init', 'begreen_widgets_init' );


/**
 * Get product by
 * attribut
 */
function cr_get_product($category, $nb = NULL, $offset = 0){

	$args = array(
		'posts_per_page'   => $nb,
		'offset'           => $offset,
		'orderby'          => 'date',
		'order'            => 'ASC',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'begreen_product',
		'post_status'      => 'publish',
		'suppress_filters' => true,
		'tax_query' => array(
		    array(
		      'taxonomy' => 'categories',
		      'field' => 'slug',
		      'terms' => $category // Where term_id of Term 1 is "1".
		    )
		  )
	);
	$posts_array = get_posts( $args );
	//vd($posts_array);
	return $posts_array;
}

/**
 * Get image product by
 */
function product_image_url($id){
	$src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'thumbnail_size' );
	$url = $src[0];
	
	return $url;
}

// Widgets
include('functions/widgets/social_link.php');
include('functions/widgets/contact_popup.php');
include('functions/widgets/widget_init.php');

/**
 * Get slides by
 * attribut
 */
function cr_get_slides($category, $nb = NULL, $offset = 0){

	$args = array(
		'posts_per_page'   => $nb,
		'offset'           => $offset,
		'orderby'          => 'date',
		'order'            => 'ASC',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'begreen_slide',
		'post_status'      => 'publish',
		'suppress_filters' => true,
		'tax_query' => array(
		    array(
		      'taxonomy' => 'slide_categories',
		      'field' => 'slug',
		      'terms' => $category // Where term_id of Term 1 is "1".
		    )
		  )
	);
	$posts_array = get_posts( $args );
	//vd($posts_array);
	return $posts_array;
}




/**
 * Get image slide by
 */
function slide_image_url($id){
	$src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'thumbnail_size' );
	$url = $src[0];
	
	return $url;
}
