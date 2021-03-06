<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="site-info">
				
		<div class="container">

		<div class="footer-logos">
						<div class="col01">
							<a href="<?php echo home_url( '/' ); ?>" aria-label="I Heart Highlandtown homepage">
								<img class="ihh-logo-footer" width="150" height="auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/htown-main-street-footer.svg"  alt="I Heart Highlandtown logo" />
							</a>
						</div><!--end col01-->
					<div class="col02">
						<a href="<?php echo home_url( '/' ); ?>" aria-label="Highlandtown Arts District homepage">
							<img class="ha-logo-footer" width="100" height="auto" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ha-logo-footer.svg"  alt="Highlandtown Arts District logo" />
						</a>
					</div><!--end col02-->
				</div>

			  					
				<div class="footer-names">			
					<div class="brand">
					<h3>Highlandtown Main Street</h3>
					<a href="https://www.facebook.com/highlandtownmainstreet/" target="_blank" aria-label="Facebook Highlandtown Main Street">
							<i class="fab fa-facebook fa-2x" aria-hidden="true" title="Facebook"></i>
						</a>
						<a href="https://www.instagram.com/highlandtownmainstreet/" target="_blank" aria-label="Instagram Highlandtown Main Street">
							<i class="fab fa-instagram fa-2x" aria-hidden="true" title="Instagram"></i>
						</a>
					</div><!--end brand-->

					<div class="brand">
					<h3>HA! Arts District</h3>
					<a href="https://www.facebook.com/highlandtownarts/" target="_blank" aria-label="Facebook Highlandtown Arts">
							<i class="fab fa-facebook fa-2x" aria-hidden="true" title="Facebook"></i>
						</a>
						<a href="https://www.instagram.com/highlandtownarts/" target="_blank" aria-label="Instagram Highlandtown Arts">
							<i class="fab fa-instagram fa-2x" aria-hidden="true" title="Instagram"></i>
						</a>
					</div><!--end brand-->

					
					
				</div><!-- end footer names -->

				<div class="row">
    					<div class="col">
      								
					<div class="contact-info">			
						<address>
							3323 Eastern Ave, Suite 200<br>
							Baltimore MD 21224<br>
							phone: 410-342-3234 ext 26<br>
						</address>
						<p class="email"><a href="mailto:amanda@southeastcdc.org">amanda@southeastcdc.org</a></p>

						<!-- <div class="social-media-icons">
							<a href="https://www.facebook.com/highlandtownmainstreet/" target="_blank" aria-label="Facebook">
							<i class="fab fa-facebook fa-2x" aria-hidden="true" title="Facebook"></i>
						</a>
							

							<a href="https://www.instagram.com/highlandtownmainstreet/" target="_blank" aria-label="Instagram">
							<i class="fab fa-instagram fa-2x" aria-hidden="true" title="Instagram"></i>
						</a>
							
						</div> -->

					</div>	  <!--end contact-info-->		
					
    					</div> <!-- end column 1 -->
    				
						<div class="col-lg footer-nav">
						<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
				<ul class="footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
		<?php endif; ?>
    					</div>
    					
						<div class="col-lg footer-about">
      						<p>The official website of the Highlandtown Main Street Business District and Highlandtown Arts District, located in historic Southeast Baltimore, Maryland.</p>
    					</div>
  						
					</div>

					</div>

		</div><!-- .site-info -->
	
	
		<p class="copyright">&copy; <?php echo date('Y'); ?> Southeast Community Development Corporation</p>
	
		<p class="credit">Website by <a href="http://www.grantcorley.com" target="_blank">Grant Corley Design</a></p>


		<!-- Begin Constant Contact Inline Form Code -->
			<!-- <div class="ctct-inline-form" data-form-id="db2cb570-d1f3-42dd-ae0c-2dcc2894e785"></div> -->
		<!-- End Constant Contact Inline Form Code -->


	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
