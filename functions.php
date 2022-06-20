<?php

function new_theme_scripts (){
    wp_enqueue_style('bootstrap' , get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'1','all' );
  
}
add_action('wp_enqueue_scripts','new_theme_scripts');
