<?php
// title
add_theme_support( 'title-tag' );
// customizer BG
add_theme_support( 'custom-background' );
/**   Image thumbnails accueil   **/
// add_theme_support( 'post-thumbnails' );

// Custom Logo
function mytheme_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'mytheme_custom_logo_setup' );

// Choose Separator Title
function mytheme_title_separator () {
    return '|';
}
add_filter('document_title_separator', 'mytheme_title_separator');

// Create menu
function mytheme_menu() {
  register_nav_menu('header-menu','Header Menu');
}
add_action( 'init', 'mytheme_menu' );

// Custom css for width menu
require_once 'custom/nb_menu.php';
