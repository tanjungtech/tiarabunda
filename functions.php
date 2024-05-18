<?php
	// Custom functions and theme setup
	function my_custom_theme_setup() {
	    // Add theme support
	    add_theme_support('title-tag');
      add_theme_support('post-thumbnails');
      add_theme_support('wp-block-styles');

	    // Register menus
	    register_nav_menus(array(
	        'primary-menu' => 'Primary Menu',
	    ));
	}
	add_action('after_setup_theme', 'my_custom_theme_setup');
	

	// Enqueue stylesheets and scripts
	function my_custom_theme_scripts() {
	    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ), 'all');
	    // wp_enqueue_script('my-custom-theme-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
	}
  add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

?>