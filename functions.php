<?php
/**
 * Astra-Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra-Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

/** add in thumbnail support */
add_theme_support( 'post-thumbnails' );
/** set_post_thumbnail_size( 50, 50 ); // 50 pixels wide by 50 pixels tall, box resize mode */


/** remove inline css (added)
function astra_force_remove_style() {
    add_filter( 'print_styles_array', function($styles) {

        // Set styles to remove.
        $styles_to_remove = array('astra-theme-css', 'astra-addon-css');
        if(is_array($styles) AND count($styles) > 0){
            foreach($styles AS $key => $code){
                if(in_array($code, $styles_to_remove)){
                    unset($styles[$key]);
                }
            }
        }
        return $styles;
    }); 
}
add_action('wp_enqueue_scripts', 'astra_force_remove_style', 99); */