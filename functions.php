<?php


function xyz_bootstrap(){
    wp_enqueue_style('xyz_bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array() ,'1','all');
    }
    add_action('wp_enqueue_scripts','xyz_bootstrap');


function xyz_bootstrap_js(){
    wp_enqueue_script('xyz_bootstrap_js', get_template_directory_uri() .'/assets/js/bootstrap.min.js', array() ,'1','all');
    }
    add_action('wp_enqueue_scripts','xyz_bootstrap_js');    


function xyz_main_css(){
wp_enqueue_style('main_css', get_template_directory_uri() .'/assets/css/main.css', array() ,'1','all');
}
add_action('wp_enqueue_scripts','xyz_main_css');



function xyz_main_js(){
wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js' , array(), '1' , 'all');

}
add_action('wp_enqueue_scripts','xyz_main_js');