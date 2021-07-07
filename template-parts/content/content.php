<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<h1>Content.php</h1>

	<?php twenty_twenty_one_post_thumbnail(); ?>

	<div class="article-content">
			<header class="entry-header">
				<?php if ( is_singular() ) : ?>
					<?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
				<?php else : ?>
					<?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div id="entry-content">
				<?php
				the_content(
					twenty_twenty_one_continue_reading_text()
				);

				wp_link_pages(
					array(
						'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
						'after'    => '</nav>',
						/* translators: %: Page number. */
						'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
					)
				);

				?>
			</div><!-- .entry-content -->
	</div> <!--end article-content-->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
