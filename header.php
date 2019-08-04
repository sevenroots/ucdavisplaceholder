<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ucdavisplaceholder
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('solid-back container-fluid'); ?>>
<div id="page" class="site container">
	<div class="row">
		<div class="col-xs-0 col-lg-2">
		</div>
		<div class="col-xs-12 col-lg-8 grid-back">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ucdavisplaceholder' ); ?></a>
	
	<header id="masthead" class="site-header">
		<hr class="diag-hr-above" />
		<div class="site-branding text-center">
			<?php
			the_custom_logo();
			?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
