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

namespace MerakiTheme;
require __DIR__ . '/vendor/autoload.php';

$CPT_Projects = new CPT_Projects();
$OptionsPage = new OptionsPage();
$EnqueueAssets = new EnqueueAssets();
$SomeFeatures = new SomeFeatures();
$BodyOpen = new BodyOpen();
$PreventUnlockingBlocks = new PreventUnlockingBlocks();
$RegisterBlockCategory = new RegisterBlockCategory();
$RegisterBlockPatternCategory = new RegisterBlockPatternCategory();
$ExtraStylesNativeBlocks = new ExtraStylesNativeBlocks();





