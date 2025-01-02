<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bae_blog
 */

get_header();
?>

<section id="primary" class="container mx-auto px-4 py-8">
    <main id="main" class="max-w-3xl mx-auto">

        <?php if (have_posts()) : ?>

            <?php if (is_home() && !is_front_page()) : ?>
                <header class="entry-header">
                    <h1 class="text-3xl font-bold"><?php single_post_title(); ?></h1>
                </header><!-- .entry-header -->
            <?php endif; ?>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content/content', get_post_format()); ?>
                <?php endwhile; ?>
            </div>

            <?php bae_blog_the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part('template-parts/content/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>