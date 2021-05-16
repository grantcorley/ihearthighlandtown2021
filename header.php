<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

	<!-- favicon -->
	<link rel="icon" type="image/png" href="< ?php echo get_stylesheet_directory_uri();?>/images/favicon.png">
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.svg" sizes="any" type="image/svg+xml">

	<meta name="description" content="The official website of the business district and arts district of Baltimore's historic Highlandtown neighborhood">

<!-- social media links -->
	<meta property="og:title" content="IHeartHighlandtown">
	<meta property="og:description" content="The official website of the business district and arts district of Baltimore's historic Highlandtown neighborhood">
	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-social.png">
	<meta property="og:url" content="http://ihearthighlandtown.com">
	<meta name="twitter:card" content="summary_large_image">

	<!--  non-essential, but recommended -->
	<meta property="og:site_name" content="I Heart Highlandtown">
	<meta name="twitter:image:alt" content="I Heart Highlandtown logo">

	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
	<!-- <script src="https://kit.fontawesome.com/1a661f228b.js" crossorigin="anonymous"></script> -->

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<div class="google-translate">
		<?php echo do_shortcode('[gtranslate]'); ?>
	</div>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
