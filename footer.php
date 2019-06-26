<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ucdavisplaceholder
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
		<div class="site-info">
		<hr class="diag-hr-above" />
			<img src="<?php echo get_template_directory_uri() . '/css/images/logo_main_reverse_1.png' ?>" />
			<div class="copyright text-center">	&copy; <?php echo date("Y"); ?> UC Davis Community Economic Development. All rights reserved.</div>
		<hr class="diag-hr-below" />
		</div><!-- .site-info -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
