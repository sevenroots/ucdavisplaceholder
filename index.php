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
                <div class="col-xs-0 col-sm-4">
				    <img class="book-cover" src="<?php echo get_template_directory_uri() . '/css/images/taylor_wind_des_cov_lg_cmyk.jpg' ?>" />
					<a class="btn btn-warning btn-block clr-white mt-1" target="_blank" href="https://wvupressonline.com/node/782">Get the book here!</a>
                </div>
				<div class="col-xs-12 col-sm-8">
					<h2 class="text-uppercase clr-white">Governing the wind energy commons</h2>
					<p>In his new book, Governing the Wind Energy Commons, Dr. Keith Taylor, asks: “Who owns wind energy development, and does it matter for rural livelihoods?” Taylor’s book reveals a sleeping giant in the electricity sector, composed of close to a thousand electric co-ops generating over $42 billion in annual revenue – co-ops owned and governed by 42 million rural Americans. </p>
<p>This book is of vital importance, in light of climate change, but also in holding energy developers responsible for benefiting the communities hosting them. Take the case of PG&E’s recent bankruptcy; why aren’t California policymakers engaging with the electric co-op sector for the future of California energy and economic development policy? Taylor seeks to use the book to intervene in today’s discourse around energy, climate change, economic development, and environmental justice, by revealing how community ownership of renewable energy can benefit rural American livelihoods. </p>
                    <div class="text-center">
			            <strong id="website-message" class="text-uppercase clr-white mb-0 mt-2">New website coming soon!</strong>
                    </div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
