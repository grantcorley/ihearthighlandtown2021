<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>

<?php if ( has_custom_logo() && $show_title ) : ?>
	<div class="site-logo"><?php the_custom_logo(); ?></div>
<?php endif; ?>


<div class="site-branding">

	<a href="<?php echo home_url( '/' ); ?>" aria-label="I Heart Highlandtown homepage">
						<img class="site-logo"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-main.svg"  alt="I Heart Highlandtown logo" />
					</a>

</div><!-- .site-branding -->