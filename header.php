<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <meta name="viewport" content="with=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="container">
		<header>
			<?php
				if (get_theme_mod('custom_logo')) {
					the_custom_logo();
				} else {
	        echo '<a class="nav-brand" href="' . get_home_url() . '">' . get_bloginfo('name') . '</a>';
				}
			?>
				<nav id="nav" role="navigation">
					<a href="#nav" class="show" title="Ouvrir le menu">Menu</a>
					<a href="#" class="hide" title="Fermer le menu">X</a>
					<ul>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					</ul>
				</nav>
		</header>

		<div id="main" class="wrapper">
