<?php

function xyz_development_script (){
    wp_enqueue_style('bootstrap' , get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'1','all' );
    wp_enqueue_style('xyz-main' , get_template_directory_uri().'/assets/css/main.css',array(),'1','all' );
  
}
add_action('wp_enqueue_scripts','xyz_development_script');

if(!function_exists('xyz_setup')) {

    function xyz_setup() {
        /**
         * xyz theme setup
         * @scince 1.0
         * @return void
         */
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('image_450x300', 450, 300, true);

        register_nav_menus([
            'header_menu' => esc_html__( 'header menu', 'xyz' ),
            'footer_menu' => esc_html__( 'footer menu', 'xyz' ),
            'header_menu' => esc_html__( 'header menu', 'xyz' ),
        ]);



    }

    add_action('after_setup_theme', 'xyz_setup');
}
