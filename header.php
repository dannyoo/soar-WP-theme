<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Soar
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'soar' ); ?></a>

	<?php
	if ( is_dynamic_sidebar('aboveheader') ) {
		dynamic_sidebar('aboveheader');
	}
	?><!-- Widget location to hold social icons -->

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="screen-reader-text">Main Navigation</h1>
			<div class="navicon closed"><i class="fa fa-navicon"></i></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 2 ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<?php 
	if ( is_front_page() && !is_paged() && is_dynamic_sidebar('abovecontent') ) {
		dynamic_sidebar('abovecontent');
	}
	?><!-- Widget location to hold slider -->

	<div id="content" class="site-content">
