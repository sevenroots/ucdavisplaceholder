<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ucdavisplaceholder
 */

get_header();
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main">
			<div class="row">
				<img class="col-sm-3" src="<?php echo get_template_directory_uri() . '/css/images/taylor_wind_des_cov_lg_cmyk.jpg' ?>" />
				<div class="col-sm-9">
					<h2 class="text-uppercase clr-white">Governing the wind energy commons</h2>
					<p>Keep an eye out for my new book about lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<a class="btn btn-warning btn-block clr-white" href="#">Get the book here!</a>
					<p id="website-message" class="text-uppercase text-center clr-white">New website coming soon!</p>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
