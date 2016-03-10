<?php

function remove_nada_theme_font_style() {
	wp_deregister_style( 'fonts-style' );
	wp_dequeue_style( 'fonts-style' );
}
add_action( 'wp_enqueue_scripts', 'remove_nada_theme_font_style' );

function perspicacious_theme_styles() {

	wp_register_style( 'fonts-style-a', '//fonts.googleapis.com/css?family=Lato:300,300italic,700', array(), null, null );
	wp_register_style( 'fonts-style-b', '//fonts.googleapis.com/css?family=Montserrat:400,700', array(), null, null );

  wp_enqueue_style( 'fonts-style-a' );
	wp_enqueue_style( 'fonts-style-b' );

}

add_action('wp_enqueue_scripts', 'perspicacious_theme_styles');



function register_my_menu() {
  register_nav_menu( 'secondary', __( 'Secondary Menu', 'perspicacious' ) );
}

add_action( 'after_setup_theme', 'register_my_menu' );

//Making jQuery to load from Google Library
function replace_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, '1.11.3');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'replace_jquery');

?>
