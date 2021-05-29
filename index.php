<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>



<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tianquiztli.jpg" class="d-block w-100" alt="Vendors at table in Highlandtown">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/htownArtGallery.jpg" class="d-block w-100" alt="Woman browsing art at gallery">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/performers.jpg" class="d-block w-100" alt="Performers at night club">
    </div>
	<div class="carousel-item">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fruity-bar.jpg" class="d-block w-100" alt="Mother and daughter running local cafe">
    </div>
	<div class="carousel-item">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bus_band.jpg" class="d-block w-100" alt="Musicians performing at bus stop on East Ave.">
    </div>
	<div class="carousel-item">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/barber.jpg" class="d-block w-100" alt="Barber shop">
    </div>
	<div class="carousel-item">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery.jpg" class="d-block w-100" alt="Women browsing at gallery">
    </div>
	
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="callouts">

	<div class="callout">
    <div class="bgimage"></div>
    <div class="content">
      <div class="lockup">
        <h2>shop</h2>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/highlandtown_logo.svg" alt="Highlandtown">
      </div><!--end lockup-->

      <div class="cta"> <!-- ==================== -->
        
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 356 355" style="enable-background:new 0 0 356 355;" xml:space="preserve">
          <style type="text/css">
            .st0{fill:#F38F1D;}
            .st1{fill:#FFFFFF;}
          </style>
          <g id="Layer_1" focusable="false">
            <g>
              <polygon class="st0" points="355.9,0 0.9,355 355.9,355 		"/>
            </g>
          </g>
          <g id="Layer_2">
            <path class="st1" d="M309.7,185.7h13.9c5.9,0,10.6,4.7,10.6,10.6l0,121.4c0,5.9-4.7,10.6-10.6,10.6H202.2
              c-5.9,0-10.6-4.7-10.6-10.6v-13.9c0-5.9,4.9-10.7,10.8-10.6l73.5,1.8l-89.8-89.8c-4.2-4.2-4.2-10.8,0-15l10-10
              c4.2-4.2,10.8-4.2,15,0l89.8,89.8l-1.8-73.5C298.9,190.6,303.7,185.7,309.7,185.7L309.7,185.7z"/>
          </g>
      </svg>

       </div> <!-- ==================== --> <!-- end cta -->

 </div> <!--end content -->
  </div><!--end callout-->

	<div class="callout">
    <div class="bgimage"></div>
    <div class="content">
      <div class="lockup">
        <h2>dine</h2>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/highlandtown_logo.svg" alt="Highlandtown">
      </div><!--end lockup-->

      <div class="cta"> <!-- ==================== -->
        
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 356 355" style="enable-background:new 0 0 356 355;" xml:space="preserve">
          <style type="text/css">
            .st0{fill:#F38F1D;}
            .st1{fill:#FFFFFF;}
          </style>
          <g id="Layer_1" focusable="false">
            <g>
              <polygon class="st0" points="355.9,0 0.9,355 355.9,355 		"/>
            </g>
          </g>
          <g id="Layer_2">
            <path class="st1" d="M309.7,185.7h13.9c5.9,0,10.6,4.7,10.6,10.6l0,121.4c0,5.9-4.7,10.6-10.6,10.6H202.2
              c-5.9,0-10.6-4.7-10.6-10.6v-13.9c0-5.9,4.9-10.7,10.8-10.6l73.5,1.8l-89.8-89.8c-4.2-4.2-4.2-10.8,0-15l10-10
              c4.2-4.2,10.8-4.2,15,0l89.8,89.8l-1.8-73.5C298.9,190.6,303.7,185.7,309.7,185.7L309.7,185.7z"/>
          </g>
      </svg>

       </div> <!-- ==================== --> <!-- end cta -->

 </div> <!--end content -->
  </div><!--end callout-->
	
	<div class="callout art">
    <div class="bgimage"></div>
    <div class="content">
      <div class="lockup">
        <h2>shop</h2>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/highlandtown_logo.svg" alt="Highlandtown">
      </div><!--end lockup-->

      <div class="cta"> <!-- ==================== -->
        
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 356 355" style="enable-background:new 0 0 356 355;" xml:space="preserve">
          <style type="text/css">
            .st0{fill:#F38F1D;}
            .st1{fill:#FFFFFF;}
          </style>
          <g id="Layer_1" focusable="false">
            <g>
              <polygon class="st0" points="355.9,0 0.9,355 355.9,355 		"/>
            </g>
          </g>
          <g id="Layer_2">
            <path class="st1" d="M309.7,185.7h13.9c5.9,0,10.6,4.7,10.6,10.6l0,121.4c0,5.9-4.7,10.6-10.6,10.6H202.2
              c-5.9,0-10.6-4.7-10.6-10.6v-13.9c0-5.9,4.9-10.7,10.8-10.6l73.5,1.8l-89.8-89.8c-4.2-4.2-4.2-10.8,0-15l10-10
              c4.2-4.2,10.8-4.2,15,0l89.8,89.8l-1.8-73.5C298.9,190.6,303.7,185.7,309.7,185.7L309.7,185.7z"/>
          </g>
      </svg>

       </div> <!-- ==================== --> <!-- end cta -->

 </div> <!--end content -->
  </div><!--end callout-->
	
	<div class="callout">
    <div class="bgimage"></div>
    <div class="content">
      <div class="lockup">
        <h2>live</h2>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/highlandtown_logo.svg" alt="Highlandtown">
      </div><!--end lockup-->

      <div class="cta"> <!-- ==================== -->
        
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 356 355" style="enable-background:new 0 0 356 355;" xml:space="preserve">
          <style type="text/css">
            .st0{fill:#F38F1D;}
            .st1{fill:#FFFFFF;}
          </style>
          <g id="Layer_1" focusable="false">
            <g>
              <polygon class="st0" points="355.9,0 0.9,355 355.9,355 		"/>
            </g>
          </g>
          <g id="Layer_2">
            <path class="st1" d="M309.7,185.7h13.9c5.9,0,10.6,4.7,10.6,10.6l0,121.4c0,5.9-4.7,10.6-10.6,10.6H202.2
              c-5.9,0-10.6-4.7-10.6-10.6v-13.9c0-5.9,4.9-10.7,10.8-10.6l73.5,1.8l-89.8-89.8c-4.2-4.2-4.2-10.8,0-15l10-10
              c4.2-4.2,10.8-4.2,15,0l89.8,89.8l-1.8-73.5C298.9,190.6,303.7,185.7,309.7,185.7L309.7,185.7z"/>
          </g>
      </svg>

       </div> <!-- ==================== --> <!-- end cta -->

 </div> <!--end content -->
  </div><!--end callout-->

</div>





<?php


if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
	}

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}

get_footer();
