<?php

namespace MerakiTheme;

if(! class_exists('MerakiTheme\SomeFeatures')){
    class SomeFeatures {
        
        function __construct(){
            add_action('after_setup_theme', array($this, 'some_features'));
        }

        public function some_features(){
            add_theme_support( 'editor-styles' );
            add_theme_support( 'wp-block-styles' );
            add_theme_support( 'custom-spacing' );
            add_theme_support( 'appearance-tools' );
            add_theme_support( 'custom-units' );
            add_theme_support( 'responsive-embeds' );
            add_theme_support( 'title-tag' );
            add_theme_support( 'post-thumbnails' );
            add_theme_support( 'custom-logo', 
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
    
    }
}
