<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter Theme
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<div class="wrap">

			<?php echo starter_theme_get_footer_social_links(); // WPCS: XSS OK. ?>

			<div class="site-info">
				<?php
					starter_theme_do_copyright_text();
					starter_theme_do_build_text();
				?>
			</div>

		</div><!-- .wrap -->
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php starter_theme_do_mobile_navigation_menu(); ?>

<?php wp_footer(); ?>

</body>
</html>
