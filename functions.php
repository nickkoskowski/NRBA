<?php

add_theme_support('post-thumbnails');
add_theme_support('menus');

function resources() {
	//Stylesheets
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap' );
	wp_register_style( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'style' );


	//Scripts
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'resources' );


//Menus


register_nav_menus( array(
	'Header_Nav' => 'Header Navigation Area',
	'Member_Nav' => 'Footer Member Navigation Area',
	'Company_Nav' => 'Footer Company Navigation Area',
	'Support_Nav' => 'Footer Support Navigation Area',
	) );

//Woocommerce

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}


add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );
 
function woo_archive_custom_cart_button_text() {
 
        return __( 'Join Now', 'woocommerce' );
 
}

?>