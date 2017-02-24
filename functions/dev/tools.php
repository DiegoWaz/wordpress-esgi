<?php
/**
 * Tools functions
 */


/**
 * Return random number
 * Needs the length in attribut
 */
function randomNumberGenerator($length)
{
    $result = '';
    for ($i = 0; $i < $length; $i++) {
        $result .= mt_rand(0, 9);
    }
    return $result;
}

/**
 * Get logo url
 */
function logo_url()
{
    $custom_logo_id = get_theme_mod('custom_logo');
    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
    var_dump($image);
    return $image[0];
}

/**
 * Get Image uri
 */
function img_uri()
{
    $theme_uri = get_template_directory_uri() . '/assets/img/';
    return $theme_uri;
}

/**
 * Get Javascript uri
 */
function js_uri()
{
    $js_uri = get_template_directory_uri() . '/assets/js/';
    return $js_uri;
}

/**
 * Get Stylesheet uri
 */
function css_uri()
{
    $css_uri = get_template_directory_uri() . '/assets/css/';
    return $css_uri;
}

/**
 * Get Fonts uri
 */
function fonts_uri()
{
    $fonts_uri = get_template_directory_uri() . '/assets/fonts/';
    return $fonts_uri;
}