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
?>
