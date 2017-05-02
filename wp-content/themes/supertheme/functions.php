<?php

require get_template_directory() . '/inc/support.php';

/**
 * Register basic assets to head
 */
function add_basic_assets(){
    //Include main css
    wp_enqueue_style('theme-style',  get_template_directory_uri().'/style.css');

    //Include jQuery plugin
    wp_deregister_script( 'jquery' );
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery-3.1.1.min.js', array(), false, true);
    wp_enqueue_script('jquery-migrate', get_template_directory_uri().'/assets/js/jquery-migrate-3.0.0', array('jquery'), false, true);

    //Include main JS file
    wp_enqueue_script('canv-js', get_template_directory_uri().'/assets/js/canv.js', array( 'jquery' ), false, true);
    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/scripts.js', array( 'jquery' ), false, true);
}

add_action( 'wp_enqueue_scripts', 'add_basic_assets' );



/**
 * Add WP menu support
 */
function super_menu_register() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'super_menu_register' );

/**
 * Register basic widget
 */
function basic_widgets_init() {

    register_sidebar( array(
        'name'          => 'Header info widget',
        'id'            => 'header_info',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'basic_widgets_init' );