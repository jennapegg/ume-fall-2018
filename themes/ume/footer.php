<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
					<!-- <a href="<?php //echo esc_url( 'https://wordpress.org/' ); ?>"><?php //printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
					<img src="<?php echo get_template_directory_uri() . '/images/ume-logo-primary.png' ?>" alt="">
				<div class="site-info">
					<p><a href="#">Terms of Use</a></p>
					<p><a href="#">Privacy Policy</a></p>
					<p>&copy; UME Arcade 2018</p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
