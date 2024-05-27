<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bae_blog
 */

?>

<header id="masthead" class="bg-gray-900 text-white py-4">

    <div class="container mx-auto px-4">

        <?php
        if (is_front_page()) :
            ?>
            <h1 class="text-2xl font-bold">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
            </h1>
        <?php
        else :
            ?>
            <p class="text-lg">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
            </p>
        <?php
        endif;

        $bae_blog_description = get_bloginfo('description', 'display');
        if ($bae_blog_description || is_customize_preview()) :
            ?>
            <p class="text-sm"><?php echo $bae_blog_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
        <?php endif; ?>
    </div>

    <nav id="site-navigation" class="container mx-auto px-4" aria-label="<?php esc_attr_e('Main Navigation', 'bae-blog'); ?>">
        <button class="text-white focus:outline-none" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'bae-blog'); ?></button>

        <?php
        wp_nav_menu(array(
            'theme_location' => 'menu-1',
            'container_id'   => 'primary-menu',
            'container_class' => 'hidden',
            'menu_class'     => 'hidden md:flex flex-wrap items-center list-none',
            'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="Main Menu">%3$s</ul>',
        ));
        ?>
    </nav><!-- #site-navigation -->

</header><!-- #masthead -->