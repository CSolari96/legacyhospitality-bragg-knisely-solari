<?php

	/*==============================================

		Add stylesheet and JS files

	===============================================*/

	function custom_theme_scripts(){

		// Bootstrap Integration
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

		// Main CSS
		wp_enqueue_style('main-styles', get_stylesheet_uri());

		// JavaScript Files
		wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js');
		wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
	}

	add_action('wp_enqueue_scripts', 'custom_theme_scripts');



	/*********************************CUSTOM HEADER LOGO***************************************/

$custom_image_header = array(
	'width'  => 300,
	'height' => 182,
	'uploads' => true,
);

add_theme_support('custom-header', $custom_image_header);


	/*********************************ADD MENUS TO THEME***************************************/

function register_my_menu(){
	register_nav_menus(
		array(
		'top-menu' => ('Top Menu'),
		'footer-left' => ('Left footer menu'),
		'footer-middle' => ('Middle footer menu'),
		'footer-right' => ('Right footer menu'),
		)
	);
}

add_action('init', 'register_my_menu');



	/*********************************WIDGETS***************************************/

function blank_widgets_init(){
	register_sidebar(array(
		'name' => ('Right Footer'),
		'id'=> 'right-footer',
		'description' => 'Right widget area in footer',
		'before_widget' => '<div class="widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<p class="footer-widget-contact">',
		'after_title' => '</p>'
	));

	register_sidebar(array(
		'name' => ('Middle Footer'),
		'id'=> 'Middle-footer',
		'description' => 'Middle widget area in footer',
		'before_widget' => '<div class="widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<p class="footer-widget-contact">',
		'after_title' => '</p>'
	));

	register_sidebar(array(
		'name' => ('Company Motto'),
		'id'=> 'company-motto',
		'description' => 'Company motto heading on about page',
		'before_widget' => '<div class="knowledge-power-title">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="company-motto-widget-title">',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => ('Hero Image'),
		'id'=> 'hero-image',
		'description' => 'Hero image of Tony on the about page',
		'before_widget' => '<div class="widget-hero-image">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="hero-image-widget-title">',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => ('Title for What We Offer'),
		'id'=> 'title-what-we-offer',
		'description' => 'Title of what we offer Widget area on the about page',
		'before_widget' => '<div class="widget-title-what-we-offer">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="title-what-we-offer-widget-home">',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => ('What We Offer'),
		'id'=> 'what-we-offer',
		'description' => 'What we offer Widget area on the about page',
		'before_widget' => '<div class="widget-what-we-offer">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="what-we-offer-widget-home">',
		'after_title' => '</h3>'
	));


	register_sidebar(array(
		'name' => ('Contact Form'),
		'id'=> 'contact-form',
		'description' => 'Contact form widget area',
		'before_widget' => '<div class="widget-contact-form">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="contact-form-widget">',
		'after_title' => '</h3>'
	));
}

add_action('widgets_init', 'blank_widgets_init');

	/*********************************ADD FEATURED IMAGE CAPABILITY***************************************/

add_theme_support('post-thumbnails');

?>
