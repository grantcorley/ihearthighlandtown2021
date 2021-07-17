<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * Template Name: Page: Art
 * 
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>


<div class="art">



<article class="page inventory art hardcoded type-page status-publish hentry entry">

<div class="layout">

			<header class="entry-header hardcoded alignwide">
				<h1 class="entry-title hardcoded">Art</h1>			
			</header><!-- .entry-header -->

			<div class="loop-no-header">
	<?php while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content/content-page' );
	endwhile; ?>
</div> <!-- end loop-no-header-->

</div> <!--end layout-->

</article>
	

<!-- THE LOOP-->
<h2 class="query-header">Featured Artists</h2>
<div class="loop-events">



<?php
 
// The Query
// $the_query = new WP_Query( array( 'category_name' => 'events' ) );

//----THIS IS ALL NEW----//
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 

$args = array(
	'category_name' => 'local-artists',
    'paged'           => $paged, 
    'posts_per_page'  => 10
);

$the_query = new WP_Query( $args );
//----------------------//
 
//The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        //get_template_part( 'template-parts/content/content-page' );
		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
		
	}
	//query PAGINATION
	//cq_pagination($the_query->max_num_pages);

} else {
    // no posts found
}

// cq_pagination($the_query->max_num_pages);

//the_posts_navigation();	
/* Restore original Post Data */
wp_reset_postdata();

?>
</div> <!-- end loop-events-->

<?php cq_pagination($the_query->max_num_pages); ?>


<!-- new code -->
<div class="holder">
	<iframe class="airtable-embed" src="https://airtable.com/embed/shrF6tNhwdNFjvLGC" frameborder="1" onmousewheel=""  height="750" style="background:transparent;"></iframe>	
</div> <!--end holder-->
	

</div> <!-- end page-business-support and custom-content -->






<?php
get_footer();
