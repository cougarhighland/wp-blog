<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bae_blog
 */

get_header();
?>

<div class="container mx-auto px-4">
    <div class="lg:flex -mx-4">
        <div id="primary" class="lg:w-2/3 px-4">
            <main id="main" class="site-main">
                <?php
                /* Start the Loop */
                while (have_posts()) :
                    the_post();

                    get_template_part('template-parts/content/content', 'page');

                    // If comments are open, or we have at least one comment, load
                    // the comment template.
                    if (comments_open() || get_comments_number()) {
                        comments_template();
                    }

                endwhile; // End of the loop.
                ?>
            </main><!-- #main -->
        </div><!-- #primary -->

        <aside id="secondary" class="lg:w-1/3 px-4">
            <?php get_sidebar(); ?>
        </aside><!-- #secondary -->
    </div><!-- .lg:flex -->
</div><!-- .container -->

<?php
get_footer();