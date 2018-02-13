<?php
/***** formats des images***/

/* mes scripts */
function mes_scripts2() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'style-name', get_stylesheet_uri(),false,time() );
}
add_action( 'wp_enqueue_scripts', 'mes_scripts2' );

add_filter( 'wpseo_breadcrumb_links', 'wpse_100012_override_yoast_breadcrumb_trail' );

/**********************/
