<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Swiper carrousel -->
    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
        <nav id="nav" >
            <h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>

            <ul>
                <li class=imglogo></li>
                <li class="his"><a href="#story">Histoire</a></li>
                <li class="per"><a href="#characters">Personnages</a></li>
                <li class="lie"><a href="#place">Lieu</a></li>
                <li class="stu"><a href="#studio">Studio Koukaki</a></li>
                <li class="stud"><a href="#studio">Studio Koukaki</a></li>
            </ul>
            <button id="icons">

            </button>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->


    