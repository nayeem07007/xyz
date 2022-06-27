<?php 

// theme default setup

if(!function_exists('xyz_setup')){
    function xyz_setup(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        set_post_thumbnail(1568, 9999);
        add_image_size('image_300*300', 300, 300, true);

        register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
				'footer'  => esc_html__( 'Secondary menu', 'twentytwentyone' ),
			)
		);

    }
}
add_action('after_setup_theme', 'xyz_setup');


// enqueue style

if(!function_exists('xyz_enqueue_scripts')){
    function xyz_enqueue_scripts(){
        wp_enqueue_style('bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.min.css', array(), wp_get_theme()->get( 'version'), 'all');
    }
}
add_action('wp_enqueue_scripts', 'xyz_enqueue_scripts');


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
