<?php

namespace MerakiTheme;

if(! class_exists('MerakiTheme\ExtraStylesNativeBlocks')){
    class ExtraStylesNativeBlocks {
        
        function __construct(){
            add_action( 'init', array($this, 'default_theme_register_block_styles'));
        }

        function default_theme_register_block_styles() {

            //----GROUP-------------------------------------------------------------------
        
            register_block_style(
                'core/group',
                array(
                    'name'         => 'group-responsive-padding',
                    'label'        => __( 'Add Responsive Padding', 'textdomain' ),
                    'is_default'   => false,
                )
            );
        
            //----HEADING-------------------------------------------------------------------
        
            register_block_style(
                'core/heading',
                array(
                    'name'         => 'heading-responsive-padding',
                    'label'        => __( 'Padding Responsive', 'textdomain' ),
                    'is_default'   => false,
                )
            );
        
            //----PARAGRAPH-------------------------------------------------------------------
        
            register_block_style(
                'core/paragraph',
                array(
                    'name'         => 'paragraph-responsive-padding',
                    'label'        => __( 'Padding Responsive', 'textdomain' ),
                    'is_default'   => false,
                )
            );
        
            //----SPACER-------------------------------------------------------------------
        
            register_block_style(
                'core/spacer',
                array(
                    'name'         => 'spacer-responsive-50',
                    'label'        => __( 'Spacer Responsive 50', 'textdomain' ),
                    'is_default'   => false,
                )
            );
        }
    }
}
