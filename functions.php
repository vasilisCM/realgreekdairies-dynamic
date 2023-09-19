<?php

// Customize the theme
function realgreekdairies_theme_support(){

    // Add <title> in the <head> dynamically
    add_theme_support('title-tag');

    // Enable the logo from the Customizer
    add_theme_support('custom-logo', array(
        
        'flex-width' => true,
        'flex-height' => true,
    ));

    // Enable Featured Image for Posts
    add_theme_support('post-thumbnails'); 
}

// Call the function on 'after_setup_theme' hook
add_action('after_setup_theme', 'realgreekdairies_theme_support');


// ACF option in dashboard - works only with pro acf
 if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
    acf_add_options_sub_page('Footer');
  }


// Register Menus
function realgreekdairies_menus() {

    $locations = array(
    'main-1' => "Main Menu 1",
    'main-2' => "Main Menu 2",
    'footer' => "Footer Menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'realgreekdairies_menus');

// Register Custom Post Type - product
function product_custom_post_type() {

    // Create post type
	register_post_type('product',
		array(
			'labels'      => array(
				'name'          => __('Product', 'textdomain'),
				'singular_name' => __('Product', 'textdomain'),
			),
				'public'      => true,
                'has_archive' => true,
                'supports'    => array('title', 'editor', 'excerpt', 'thumbnail'), 
		)
	);
}

// Call the function on 'init' hook
add_action('init', 'product_custom_post_type');


// Link CSS 
function realgreekdairies_register_styles() {
$version = wp_get_theme() -> get('Version'); 

// Temp or WP dedicated stylesheet
wp_enqueue_style('realgreekdairies-main', get_template_directory_uri(). "/dist/css/main.css", array(), $version, 'all');
// wp_enqueue_style('realgreekdairies-wp', get_template_directory_uri(). "/dist/css/wp.css", array(), $version, 'all');

}

add_action( 'wp_enqueue_scripts', 'realgreekdairies_register_styles');


// Link JS 
function realgreekdairies_register_scripts() {
    $version = wp_get_theme()->get('Version');

    // Images Loaded
    wp_enqueue_script( 'images-loaded-js', "https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js", array(), false, true );

    // GSAP library
    wp_enqueue_script( 'gsap-js', get_template_directory_uri(). "/dist/js/libraries/gsap.min.js", array(), false, true );

    // Inertia
    wp_enqueue_script( 'inertia-js', get_template_directory_uri(). "/dist/js/libraries/InertiaPlugin.min.js", array(), false, true );

    // Draggable
    wp_enqueue_script( 'draggable-js', get_template_directory_uri(). "/dist/js/libraries/Draggable.min.js", array(), false, true );


    // Main bundle.js file
    wp_enqueue_script('realgreekdairies-bundle', get_template_directory_uri(). "/dist/js/bundle.js", array(), false, true);

    // Temp or WP dedicated script
    // wp_enqueue_script('realgreekdairies-js', get_template_directory_uri() . "/dist/js/wp.js", array(), $version, true);

}
    
add_action( 'wp_enqueue_scripts', 'realgreekdairies_register_scripts');

// Remove Gutenberg editor
add_filter('use_block_editor_for_post', '__return_false', 10);
?>