<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ltbp-wp
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Corben:400,700|Source+Sans+Pro:300,400">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ltbp-wp' ); ?></a>

	<header id="masthead" class="o-site-header site-header" role="banner">
		<nav id="site-navigation" class="o-row c-site-nav" role="navigation">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="screen-reader-text"><?php bloginfo( 'name' ); ?></h1>
        <a class="c-site-nav__go-home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="/wp-content/uploads/ltb-logo-white-2.png" alt="LTB Photography"></a>
			<?php else : ?>
        <a class="c-site-nav__go-home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="/wp-content/uploads/ltb-logo.png" alt="LTB Photography"></a>
			<?php
			endif; ?>

			<button class="c-button c-button--primary c-button--small c-site-nav__toggle menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'ltbp-wp' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'c-site-nav__list' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
