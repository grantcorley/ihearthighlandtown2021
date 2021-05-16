<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="site-navigation" class="primary-navigation custom" role="navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>">
	<div class="menu-button-container">


			<button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
				<span class="dropdown-icon open"><?php esc_html_e( 'Menu', 'twentytwentyone' ); ?>
					<?php echo twenty_twenty_one_get_icon_svg( 'ui', 'menu' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
				</span>
				<span class="dropdown-icon close"><?php esc_html_e( 'Close', 'twentytwentyone' ); ?>
					<?php echo twenty_twenty_one_get_icon_svg( 'ui', 'close' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
				</span>
			</button><!-- #primary-mobile-menu -->
		</div><!-- .menu-button-container -->

		<div class="menu-header">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bang.svg"  alt="Highlandtown logo" />
		</div>

		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => 'menu-wrapper',
				'container_class' => 'primary-menu-container',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>

		<!-- social-media-icons -->
			<div class="social-media-icons">
			<a href="https://www.facebook.com/highlandtownmainstreet/" target="_blank" aria-label="Facebook">
				<img class="social-media-icon" title="Facebook" src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook-icon.svg"  alt="Facebook icon" />
			</a>
							
			<a href="https://www.instagram.com/highlandtownmainstreet/" target="_blank" aria-label="Instagram">
			<img class="social-media-icon" title="Facebook" src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram-icon.svg"  alt="Instagram icon" />
			</a> 
			<!-- end social-media-icons -->					
		</div>

			
		<?php echo do_shortcode('[ivory-search id="1885" title="Default Search Form"]') ?>

	</nav><!-- #site-navigation -->
<?php endif; ?>
