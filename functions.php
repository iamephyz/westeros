<?php
//Setup styles and scripts
/*
	==========================================
	 Include scripts
	==========================================
*/
function westeros_script_enqueue(){
     //css
    wp_enqueue_style('westeros-style', get_template_directory_uri().'/css/westeros.css',array(),'1.0.0','all');
    wp_enqueue_style('westeros-bootrstrap', get_template_directory_uri().'/css/bootstrap.min.css',array(),'3.3.4','all');
//js
    wp_enqueue_script('westeros_script', get_template_directory_uri().'/js/westeros.js',array(),'1.0.0', true);
    wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);


}
add_action('wp_enqueue_scripts','westeros_script_enqueue');

//Setup Menu Function
/*
	==========================================
	 Activate menus
	==========================================
*/
function westeros_theme_setup(){
    add_theme_support('menus');

    register_nav_menu('primary','Primary Header Navigation');
    register_nav_menu('secondary','Footer Navigation');
}
add_action('init','westeros_theme_setup');


/*
	==========================================
	 Setup custom logo for theme
	==========================================
*/
function westeros_theme_logo_setup(){
    $defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'westeros_theme_logo_setup' );


/*
	==========================================
	 Theme Support Functions
	==========================================
*/
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));
//add_theme_support('widgets');


/*
	==========================================
	 Sidebar Function
	==========================================
*/
function westeros_widget_setup(){
    
    register_sidebar(
        array(
            'name' => 'sidebar',
            'id' => 'sidebar-1',
            'class' => 'custom',
            'description' => 'standard sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        )
        );
}
add_action('widgets_init','westeros_widget_setup');


//Setup support for widgets
/*
	==========================================
	 Include scripts
	==========================================
*/

