<?php
 

function xyz_bootstrap(){
    wp_enqueue_style('xyz_bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array() ,'1','all');
    wp_enqueue_style('xyz_main_css', get_template_directory_uri() .'/assets/css/main.css', array() ,'1','all');
    }
    add_action('wp_enqueue_scripts','xyz_bootstrap');


if(!function_exists('xyz_setup')){
    function xyz_setup() {

        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('image_200x200',200,200, true);
        register_nav_menus([
            'header_menu' => esc_html__('header menu','xyz'),
            'footer_menu' => esc_html__('footer menu','xyz'),
        ]);
    }
    add_action('after_setup_theme','xyz_setup');
}