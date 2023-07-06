<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FSE
 * @since 1.0.0
 */

/**
 * Enqueue the style.css file.
 * 
 * @since 1.0.0
 */

require_once(__DIR__ . '/lib/enqueue-assets.php');  
require_once(__DIR__ . '/lib/some-features.php');  
require_once(__DIR__ . '/lib/body-open.php');  
require_once(__DIR__ . '/lib/extra-styles-native-blocks.php'); 
require_once(__DIR__ . '/lib/register-block-pattern-category.php'); 
require_once(__DIR__ . '/lib/register-block-category.php'); 
require_once(__DIR__ . '/lib/options-page.php'); 
require_once(__DIR__ . '/lib/custom-post-types.php'); 
require_once(__DIR__ . '/lib/prevent-unlocking-blocks.php'); 



