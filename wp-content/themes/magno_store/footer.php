<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer footer" role="contentinfo">
		<div class="footer-row container">
			<?php dynamic_sidebar('footer-widget-area'); ?>
		</div>
		<div class="footer-copyright">
			<div class="footer-row container">
				<div class="footer-copyright__text">
					<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
