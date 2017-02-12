<?php

require_once( 'enqueue.php' );
require_once( 'more_articles.php' );
require_once( 'library/action/action_ajax.php');

function sl_sidebar() {
    $args = array(
        'id'            => 'neue_sidebar', 
        'name'          => __( 'Sidebar Test', 'text_domain' ),
        'description'   => __( 'Sidebar Test', 'text_domain' ),
        'before_title'  => '<h3 class="classh3">',
        'after_title'   => '</h3>',
        'before_widget' => '<section class="eigeneclass">',
        'after_widget'  => '</section>',
    );
    register_sidebar( $args );
}

add_action( 'widgets_init', 'sl_sidebar' );


?>