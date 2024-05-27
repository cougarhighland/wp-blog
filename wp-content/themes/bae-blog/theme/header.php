<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bae_blog
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="flex flex-col min-h-screen">
  <a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', 'bae-blog' ); ?></a>

  <header id="site-header">  <nav class="flex items-center justify-between px-4 py-2 bg-gray-800 text-white">  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-xl font-bold"><?php bloginfo( 'name' ); ?></a>  <?php
        // Create a navigation menu using wp_nav_menu()
        wp_nav_menu( array(
			'menu' => 'categories',
          'theme_location' => 'primary-menu',  // Replace 'primary-menu' with your actual menu location
          'container_class' => 'flex items-center',  // Adjust container classes as needed
          'menu_class' => 'nav-list flex space-x-4',  // Adjust menu classes as needed
        ) );
      ?>
    </nav>
  </header>

  <div id="content">