<?php

namespace MerakiTheme;

if(! class_exists('MerakiTheme\OptionsPage')){
    class OptionsPage {
        
        function __construct(){
            add_action('init', array($this, 'init'));
        }

        public function init(){
            if( function_exists('acf_add_options_page') ) {
                acf_add_options_page(array(
                    'page_title'    => 'Masonry Galleries',
                    'menu_title'    => 'Masonry Galleries',
                    'menu_slug'     => 'masonry-galleries',
                    'capability'    => 'edit_posts',
                    'redirect'      => false
                ));
            }
        }
    
    }
}
