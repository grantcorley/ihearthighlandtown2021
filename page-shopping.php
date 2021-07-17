<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * Template Name: Page: Shopping
 * 
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>

<!-- <div class="page-business-directory custom-content"> -->

<div class="shopping">

<article class="page inventory shopping hardcoded type-page status-publish hentry entry">

	<div class="layout">

			<header class="entry-header hardcoded alignwide">
			<h1 class="entry-title hardcoded">Shopping</h1>			
			</header><!-- .entry-header -->

			<div class="loop-no-header">
			<?php while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content-page' );
			endwhile; ?>
		</div> <!-- end loop-no-header-->

		</div>	
	
</article>
	

<!-- new code -->
<div class="holder">
	<iframe class="airtable-embed" src="https://airtable.com/embed/shrKeDr1pL19NEo33" frameborder="1" onmousewheel=""  height="750" style="background:transparent;"></iframe>	
</div> <!--end holder-->


	

</div> <!-- end page-business-support and custom-content -->






<?php
get_footer();
