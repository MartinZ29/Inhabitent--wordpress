<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-container">
					<div class="contact-info">
						<h2>contanct info</h2>
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<a href="info@inhabitent.com"> info@inhabitent.com</a>
						</p>
						<p>
							<i class="fa fa-phone" aria hiddern="true"></i>
							<a href="tel:778-456-7891"> 778-456-7891</a>
						</p>
						<p>
							<i class="fa fa-facebook-square" aria-hidden="true"></i>
							<i class="fa fa-twitter-square" aria-hidden="true"></i>
							<i class="fa fa-google-plus-square" aria-hidden="true"></i>
						</p>
					</div>
					<div class="business-hour">
						<h2>business hours</h2>
						<p><span>Monday-Friday</span> 9am to 5am</p>
						<p><span>Saturday</span> 10am to 2pm</p>
						<p><span>Sunday</span> Closed</p>
					</div>
					<div class="footer-logo">
						<a href="#"><img class="footer-img-logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg" alt="inhabitent-footer-logo"></a>
					</div>
				</div>
				<div class="site-info">
					Copyright &copy; 2016 Inhabitent
					<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
