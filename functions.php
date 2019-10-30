<?php

	/*==============================================

		Add stylesheet and JS files

	===============================================*/

	function custom_theme_scripts() {

		// Bootstrap Integration
		wp_enqueue_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css");

		// Main CSS
		wp_enqueue_style("main-styles", get_stylesheet_uri());

		// JavaScript Files
		wp_enqueue_script("custom-js", get_template_directory_uri() . "/js/main.js");
		wp_enqueue_script("bootstrap-js", get_template_directory_uri() . "/js/bootstrap.min.js");
	}

	add_action("wp_enqueue_scripts", "custom_theme_scripts");



	/*********************************CUSTOM HEADER LOGO***************************************/

$custom_image_header = array(
	'width'  => 200,
	'height' => 200,
	'uploads' => true,
);

add_theme_support('custom-header', $custom_image_header);


	/*********************************ADD MENUS TO THEME***************************************/
function register_my_menu(){
	register_nav_menus(
		array(
		'top-menu' => __( 'Top Menu'),
		'footer-left' => __('Left footer menu'),
		'footer-middle' => __('Middle footer menu'),
		'footer-right' => __('Right footer menu'),
		)
	);
}

add_action('init', 'register_my_menu');

?>
