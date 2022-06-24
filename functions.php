<?php
function xyz_scripts() {
    wp_enqueue_style('bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.min.css', array(), '1', 'all');
    wp_enqueue_style('xyz-menu', get_template_directory_uri(). '/assets/css/main.css', array(), '1', 'all');
}

add_action('wp_enqueue_scripts', 'xyz_scripts');

if(!function_exists('xyz_setup')){
    function xyz_setup(){
        // hello our coment
        /**
         * xyz theme setup
         * @scince 1.0
         * @return void
         */
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'image_300*300',300,300, true);

       register_nav_menus([
        'header_menu' => esc_html__('Header menu', 'xyz'),
        'footer_menu' => esc_html__('Footer menu', 'xyz'),
       ]);
    }
    add_action('after_setup_theme', 'xyz_setup');
}

