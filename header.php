<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package a11ytoconf
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="description" content="An accessibility conference to connect people on digital accessibility solutions.">
<meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ) ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'a11ytoconf' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="logoContainer">
			<img src="<?php bloginfo('template_directory'); ?>/assets/a11yto_conf_logo-blue.png" alt="accessibility and inlcusive design meetup group">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'a11ytoconf' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->			
		</div>
		<div class="site-branding  text-wrapper">
			<?php
			if ( is_front_page()  ) : ?>
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description  subtitle"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; 
			endif; ?>

		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
