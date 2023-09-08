<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <title>My Document</title> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
   <?php 
   if ( function_exists( 'wp_body_open' ) ) {
      wp_body_open();
   } else {
      do_action( 'wp_body_open' );
   }
   ?>
   <div class="all-content">
      <header class="header-container"> 

         <div class="custom-logo">
            <?php 
            if (has_custom_logo()): the_custom_logo(); ?>
            <?php else: ?>
               <img src="<?php echo get_stylesheet_directory_uri();?>/src/assets/media/planet-earth.png" alt="LOGO">
            <?php endif; ?>
         </div>

         <div class="desktop-menu">
            <?php wp_nav_menu(array(
               'theme_location' => 'header-menu'
            )); ?>
         </div>

         <div class="burger-menu-container">
            <div class="burger-menu">
               <img src="<?php echo get_stylesheet_directory_uri();?>/src/assets/media/burger-menu.svg" alt="burger-menu">
            </div>
         </div>

         <div class="burger-menu-overlay hidden">
            <div class="close-button-wrapper">
               <div class="close-button-icon">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/src/assets/media/close-icon.svg" alt="close-icon">
               </div>
            </div>
            <div class="burger-menu-content">
               <?php wp_nav_menu(array(
                  'theme_location' => 'header-menu'
               )); ?>
            </div>
         </div>
      </header>
      <main class="main-container">