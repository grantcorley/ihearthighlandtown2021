<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * Template Name: Page: Business Directory
 * 
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>

<div class="page-events custom-content">

<article class="page hardcoded type-page status-publish hentry entry">

			<header class="entry-header hardcoded alignwide">
			<h1 class="entry-title hardcoded">Events</h1>			
			<!-- <figure class="post-thumbnail"> -->
			</header><!-- .entry-header -->
	
</article>
		

</div> <!-- end page-events and custom-content -->



<!-- THE LOOP-->
<div class="loop-events">
<?php
 
// The Query
// $the_query = new WP_Query( array( 'category_name' => 'events' ) );

//----THIS IS ALL NEW----//
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 

$args = array(
	'category_name' => 'events',
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

<!-- </div>  -->
<?php
get_footer();
