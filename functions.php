<?php


// menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

// title
add_theme_support( 'title-tag' );
add_theme_support( 'custom-background' );

function mytheme_scripts() {
  // Theme stylesheet.
  wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );

/**
 * @package Sidekick
 * @since Sidekick 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 810;


function sidekick_widgets_uninit() {
	unregister_sidebar( 'sidebar-1' );
}
add_action( 'widgets_init', 'sidekick_widgets_uninit', 11 );


/**
 * Set up Sidekick specific setting.
 */
function sidekick_setup() {
	/**
	 * Declare textdomain for this child theme.
	 */
	load_child_theme_textdomain( 'sidekick', get_stylesheet_directory() . '/languages' );

	/**
	 * Remove Featured Content
	 */
	remove_theme_support( 'featured-content' );

	/**
	 * Add Panoramic image size
	 */
	add_image_size( 'sidekick-panoramic', 5000, 500, false );
}
add_action( 'after_setup_theme', 'sidekick_setup', 11 );


/**
 * Enqueue scripts and styles
 */
function sidekick_scripts() {
	wp_dequeue_script( 'superhero-script' );
	wp_dequeue_script( 'superhero-flex-slider' );
	wp_dequeue_style( 'superhero-flex-slider-style' );

	wp_enqueue_script( 'sidekick-script', get_stylesheet_directory_uri() . '/js/sidekick.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'sidekick_scripts', 11 );






/**   Google Map   **/

function rockable_googlemap($atts, $content = null) {
   extract(shortcode_atts(array(
               "width" => '940',
               "height" => '300',
               "src" => ''
   ), $atts));

return '<div>
         <iframe src="'.$src.'&output=embed" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="'.$width.'" height="'.$height.'"></iframe>
        </div>
       ';
}

add_shortcode("googlemap", "rockable_googlemap");








/**   Image thumbnails accueil   **/

add_theme_support( 'post-thumbnails' );




/**   Test Compteur mot excerpt   **/
function comogene_excerpt_length($length) {
     return 20;
}
add_filter('excerpt_length', 'comogene_excerpt_length');
function comogene_more( $more ) {
           return '... <a href="'. get_permalink( get_the_ID() ) . '">Lire la suite...</a>';
}
add_filter('excerpt_more', 'comogene_more');
