<?php

//bessere art in methode
function add_theme_scripts(){
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/css/theme_css.css');
	wp_enqueue_script( 'my-great-script', get_template_directory_uri() . '/js/javascript_test.js');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

//wuerde auch gehen aber besser in methode packen
//wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/css/theme_css.css');


//Ajax 
function hook_ajax_script(){
         wp_enqueue_script( 'my_ajax_script', get_bloginfo('template_url')."/js/registration.js" );
		 
		 wp_localize_script( 'my_ajax_script', 'bob_unique', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'title' => get_the_title(),
    )
);
		 
}
//Actions für Backend und Frontend
add_action( 'wp_enqueue_scripts', 'hook_ajax_script' );
add_action( 'admin_enqueue_scripts', 'hook_ajax_script' );
//blabla
?>