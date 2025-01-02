<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bae_blog
 */

?>

<footer id="colophon" class="bg-gray-900 text-white py-8">

    <div class="container mx-auto px-4">

        <?php if (is_active_sidebar('sidebar-1')) : ?>
            <div class="widget-area grid grid-cols-1 lg:grid-cols-2 gap-4">
                <?php dynamic_sidebar('sidebar-1'); ?>
            </div>
        <?php endif; ?>

        <?php if (has_nav_menu('menu-2')) : ?>
            <nav aria-label="<?php esc_attr_e('Footer Menu', 'bae-blog'); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-2',
                        'menu_class' => 'footer-menu flex flex-wrap justify-center list-none',
                        'depth' => 1,
                    )
                );
                ?>
            </nav>
        <?php endif; ?>

        <div class="text-center mt-4">
            <?php
            $bae_blog_blog_info = get_bloginfo('name');
            if (!empty($bae_blog_blog_info)) :
                ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="text-xl font-bold"><?php bloginfo('name'); ?></a>
                <?php
            endif;

            /* translators: 1: WordPress link, 2: WordPress. */
            printf(
                '<p class="mt-2">%1$s <a href="%2$s" class="underline">%3$s</a>.</p>',
                esc_html__('Proudly powered by', 'bae-blog'),
                esc_url(__('https://wordpress.org/', 'bae-blog')),
                'WordPress'
            );
            ?>
        </div>

    </div><!-- .container -->

</footer><!-- #colophon -->
