<?php

namespace MerakiTheme;

if(! class_exists('MerakiTheme\EnqueueAssets')){
    class EnqueueAssets {
        
        function __construct(){
            //Just Frontend
            // add_action('wp_enqueue_scripts', array($this, 'scripts_and_styles'));
            
            //Frontend & Editor
            add_action('enqueue_block_assets', array($this, 'scripts_and_styles'));
            
            //Just Editor
            // add_action('enqueue_block_editor_assets', 'scripts_and_styles_editor');
        }

        function scripts_and_styles(){
   
            wp_enqueue_style('main_style', get_theme_file_uri('/build/index.css'));
            wp_enqueue_script('main_js', get_theme_file_uri('/build/index.js'), array('jquery','wp-blocks'), '1.0', false );  // Si lo pongo en false puedo hacer transitions
         }
         
         function scripts_and_styles_editor(){   
         //    wp_enqueue_style('main_style', get_theme_file_uri('/build/editor.scss.css'));
         }
    
    }
}
