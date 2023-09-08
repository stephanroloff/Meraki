<?php

namespace MerakiTheme;

if(! class_exists('MerakiTheme\RegisterBlockCategory')){
    class RegisterBlockCategory {
        
        function __construct(){
            if ( version_compare( get_bloginfo( 'version' ), '5.8', '>=' ) ) {
                add_filter( 'block_categories_all', array($this,'register_layout_category') );
            } else {
                add_filter( 'block_categories', array($this,'register_layout_category') );
            }
        }

        public function register_layout_category( $categories ) {
	
            $categories[] = array(
                'slug'  => 'merakistarter',
                'title' => 'Meraki Starter Blocks'
            );
        
            return $categories;
        }
    
    }
}
