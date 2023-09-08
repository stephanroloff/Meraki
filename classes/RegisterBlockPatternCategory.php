<?php

namespace MerakiTheme;

if(! class_exists('MerakiTheme\RegisterBlockPatternCategory')){
    class RegisterBlockPatternCategory {
        
        function __construct(){
            if ( function_exists( 'register_block_pattern_category' ) ) {
                register_block_pattern_category(
                  'patrones',
                  array( 'label' => __( 'PATRONES', 'text-domain' ) )
               );
            }
        }
    
    }
}
