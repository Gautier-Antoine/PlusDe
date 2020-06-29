<?php



function mytheme_nb_item_menu($MenuHandle) {
  $theme_location = $MenuHandle;
  $theme_locations = get_nav_menu_locations();
  $menu_obj = get_term( $theme_locations[$theme_location], 'nav_menu' );
  // Echo count of items in menu
  return $menu_obj->count;
}

function mytheme_register_assets() {
      wp_register_style('mystyle', get_template_directory_uri() . '/style.css');
      wp_enqueue_style('mystyle');
      wp_enqueue_style('menu-php', get_template_directory_uri() . '/custom/menu-css.php' );
      $nb_menu = mytheme_nb_item_menu('header-menu');
      $nb_menu_2 = round($nb_menu/2,0,PHP_ROUND_HALF_UP);
      $nb_menu_3 = round($nb_menu/3,0,PHP_ROUND_HALF_UP);
      if ($nb_menu <= 3){
        $custom_menu = "
          @media only screen and ( min-width: 420px ) {
             ul.menu > li {
                width: calc(100% / $nb_menu) !important;
                overflow: hidden;
              }
          }
        ";
      }
      elseif ($nb_menu <= 6) {
        $custom_menu = "
          @media only screen and ( min-width: 1200px ) {
             ul.menu > li {
                width: calc(100% / $nb_menu) !important;
                overflow: hidden;
              }
          }
          @media only screen and ( min-width: 992px )   and (max-width: 1200px ) {
            ul.menu > li {
                width: calc(100% / $nb_menu_2) !important;
            }
          }
          @media only screen and ( min-width: 768px )  and (max-width: 992px ) {
            ul.menu > li {
                width: calc(100% / $nb_menu_2) !important;
          }
        ";
      } elseif ($nb_menu <= 12) {
        $custom_menu = "
          @media only screen and ( min-width: 1200px ) {
             ul.menu > li {
                width: calc(100% / $nb_menu) !important;
                overflow: hidden;
              }
          }
          @media only screen and ( min-width: 992px )   and (max-width: 1200px ) {
            ul.menu > li {
                width: calc(100% / $nb_menu_2) !important;
            }
          }
          @media only screen and ( min-width: 768px )  and (max-width: 992px ) {
            ul.menu > li {
                width: calc(100% / $nb_menu_3) !important;
          }
        ";
      } elseif ($nb_menu > 12) {
       $custom_menu = "
         @media only screen and ( min-width: 1200px ) {
            ul.menu > li {
               width: calc(100% / $nb_menu_2) !important;
               overflow: hidden;
             }
         }
         @media only screen and ( min-width: 992px )   and (max-width: 1200px ) {
           ul.menu > li {
               width: calc(100% / $nb_menu_2) !important;
           }
         }
         @media only screen and ( min-width: 768px )  and (max-width: 992px ) {
           ul.menu > li {
               width: calc(100% / $nb_menu_3) !important;
         }
       ";
     }
    wp_add_inline_style( 'menu-php', $custom_menu );
};

add_action( 'wp_enqueue_scripts', 'mytheme_register_assets' );
