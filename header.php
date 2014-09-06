<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package pcurio
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo bloginfo( 'template_directory' ); ?>/images/favicon.ico" />

<?php wp_head(); ?>
</head>

<!-- Screenreader link -->
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'pcurio' ); ?></a>

<div class="fullBleed">
	<div class="container clearfix headerpad">
		<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
		<!-- #Masthead -->
		<header class="masthead" role="banner">
			<div class="site-branding ">
				<div class="site-logo ">
					<img src="<?php bloginfo('template_directory'); ?>/images/bell_logo.svg">
				</div>
				<h1 class="site-title "><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>

			<nav class="main-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'pcurio' ); ?></button>
				<div class="menu-container">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
	</div>
</div>	


	<div id="content" class="site-content">
