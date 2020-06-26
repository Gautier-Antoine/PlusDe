<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<meta name="viewport" content="width=device-width"/>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
			<?php
			/*
			<meta property="og:title" content="Le site de santé" />
			<meta property="og:description" content="Le site de santé" />
			<title>+2Santé.net | <?php wp_title(' | ', true, 'right'); ?></title>
			<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
				*/
			?>
	<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
	<div id="container">
		<header>
			<a href="<?php bloginfo( 'url' ); ?>">
				<div id="logo">
					<h1>+2Vie</h1>
					<?php /*
					<img src="<?php bloginfo('template_directory'); ?>/images/Plus-De-Vie.png" class="logo" alt="+2Vie">
					*/ ?>
				</div>
			</a>
				<nav id="nav" role="navigation">
					<a href="#nav" class="show" title="Ouvrir le menu">Menu</a>
					<a href="#" class="hide" title="Fermer le menu">X</a>
					<ul>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					</ul>
				</nav>
		</header>

	<div id="main" class="wrapper">
