<?php

namespace MerakiTheme;

if(! class_exists('MerakiTheme\BodyOpen')){
    class BodyOpen {
        function __construct(){
            add_action('wp_body_open', array($this, 'body_open_scripts'));
        }

        function body_open_scripts(){
            ?>
            <!-- <h1>Google Analitics</h1> -->
            <?php
         }    
    }
}
