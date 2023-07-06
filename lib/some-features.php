<?php

#theme supoorts & register menu

function some_features(){
    add_theme_support( 'editor-styles' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'custom-spacing' );
    add_theme_support( 'appearance-tools' );
    add_theme_support( 'custom-units' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', 
        array(
            'width' => 70,
            'height' => 15,
            'flex-width' => true,
            'flex-height' => true,
        )
    );

    register_nav_menu('header-menu', 'Header Menu');
    register_nav_menu('footer-menu', 'Footer Menu');
}
 
add_action('after_setup_theme', 'some_features');


#register sidebar

// function pride_add_sidebar(){
//     register_sidebar(
//         array(
//             'name' => 'Footer-widget',
//             'id' => 'footer-widget',
//             'before_widget' => '',
//             'after_widget' => '',
//         )
//         );
// }
 
// add_action('widgets_init', 'pride_add_sidebar');
