<?php

function new_theme_scripts (){
    wp_enqueue_style('bootstrap' , get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'1','all' );
    wp_enqueue_style('new theme-main' , get_template_directory_uri().'/assets/css/main.css',array(),'1','all' );
   
  
}
add_action('wp_enqueue_scripts','new_theme_scripts');


if(! function_exists('xyz_setup')){
    function xyz_setup(){
        /**
         * comment section
         */

        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        register_nav_menus(
			array(
				'header_menu' => esc_html__( 'Header_Menu', 'xyz' ),
				'footer_menu' => esc_html__( 'Footer_Menu', 'xyz' ),
				
			)
		);
    }
    add_action('after_setup_theme','xyz_setup');
}

/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );