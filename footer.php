<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KN_WD_S
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<div class="wrap">

			<div class="site-info">
				<?php echo wp_kses_post( _kn_wd_s_get_copyright_text() ); ?>
			</div>

		</div><!-- .wrap -->
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
