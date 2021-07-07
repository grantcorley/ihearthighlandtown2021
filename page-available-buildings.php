<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * Template Name: Page: Available Buildings
 * 
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>

<!-- <div class="page-business-directory custom-content"> -->

<div class="available-buildings">

<article class="page hardcoded type-page status-publish hentry entry">

			<header class="entry-header hardcoded alignwide">
			<h1 class="entry-title hardcoded">Available Buildings</h1>			
			<!-- <figure class="post-thumbnail"> -->
			</header><!-- .entry-header -->
	
</article>
	

<!-- new code -->
<div class="holder">
<iframe class="airtable-embed" src="https://airtable.com/embed/shrY8PO4NbnTUQWwR?backgroundColor=pink&viewControls=on" frameborder="0" onmousewheel="" height="750" style="background:transparent; border: 1px solid #ccc;"></iframe>	
</div> <!--end holder-->
	

</div> <!-- end page-business-support and custom-content -->





<div class="loop-no-header">
<!-- <h2>Airtable embed goes here?</h2> -->
<?php
/* THE LOOP */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	 //If comments are open or there is at least one comment, load up the comment template.
	//if ( comments_open() || get_comments_number() ) {
		//comments_template();
	//}
endwhile; 
// End of the loop.

?>
</div> <!-- end loop-no-header-->
<?php
get_footer();
