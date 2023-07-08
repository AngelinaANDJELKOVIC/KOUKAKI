
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
<link rel="stylesheet" href="./node_modules/swiper/css/swiper.min.css">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
        <div class="menu-toggle">
            <a> Fleurs d'oranger & chats érrants </a>
                <button   aria-controls="primary-menu" aria-expanded="false">
<!-- MENU BURGER --> 
                    <div class="burger-open">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                    </div>
                    <div class="burger-close">
                        x
</div>
</button>
            </div>
            <ul>
            <div class="logomob logo1" >
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/photo/imagelogo.png" alt="logo">
            </div>
            <div class="logomob chat1 floating" >
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/photo/cat.png" alt="chat">
            </div>
            <div class="logomob fleur1" >
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/photo/Orchid.png" alt="fleur">
            </div>
            <div class="logomob fleur2" >
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/photo/Sunflower.png" alt="fleur">
            </div>
            <div class="logomob fleur3" >
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/photo/Random Flower.png" alt="fleur">
            </div>
            <div class="logomob fleur4" >
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/photo/Flower.png" alt="fleur">
            </div>
            <div class="logomob chat2 floating " >
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/photo/cat2.png" alt="chat">
            </div>
            <div class="logomob chat3 floating " >
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/photo/cat3.png" alt="chat">
            </div>
            <div class="logomob fleur5" >
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/photo/Hibiscusfleur.png" alt="fleur">
            </div>
            <div class="logomob sk" >
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/photo/Studio Koukaki.png" alt="logo">
            </div>
                <li><a class="menu1 size" href="#story">Histoire</a></li>
                <li><a class="menu2 size" href="#characters">Personnages</a></li>
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
                <li><a class="menu3 size" href="#place">Lieu</a></li>
                <li><a class="menu4 size" href="#studio">Studio Koukaki</a></li>
            </ul>


		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
