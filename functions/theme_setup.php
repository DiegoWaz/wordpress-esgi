<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function foodbynight_setup()
{

    /*
     * Make theme available for translation.
     */
    load_theme_textdomain('foodbynight');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    add_image_size('foodbynight-thumbnail-avatar', 100, 100, true);


    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5');

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
        'top' => __('Top Menu', 'foodbynight'),
        'footer' => __('Footer Menu', 'foodbynight')
    ));

    // Add theme support for Custom Logo.
    add_theme_support('custom-logo', array(
        'width' => 250,
        'height' => 250,
        'flex-width' => true
    ));

    // Add HTML5 theme support.
    add_theme_support('html5', array('search-form'));
}

add_action('after_setup_theme', 'foodbynight_setup');


/**
 * Enqueue scripts and styles.
 */
function foodbynight_scripts()
{
    // Theme stylesheet.
    //wp_register_style('styles', get_stylesheet_directory_uri() . '/assets/css/styles.css');

    wp_enqueue_style('global-style', get_template_directory_uri() . '/assets/css/global.css');
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme.css');
    wp_enqueue_style('widgets-style', get_template_directory_uri() . '/assets/css/widgets.css');
    wp_enqueue_style('font-awesome-style', get_template_directory_uri() . '/assets/css/font-awesome.css');
    wp_enqueue_style('layerslide-style', get_template_directory_uri() . '/assets/css/layerslide.css');
    wp_enqueue_style('pretty-style', get_template_directory_uri() . '/assets/css/prettyPhoto.css');
    wp_enqueue_style('colorpicker-style', get_template_directory_uri() . '/assets/css/colorpicker.css');

    // Theme scripts
    wp_enqueue_script('foodbynight-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js', '', '3.1.0', true);

}

add_action('wp_enqueue_scripts', 'foodbynight_scripts');
