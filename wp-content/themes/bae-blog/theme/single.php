<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bae_blog
 */

get_header();
?>

<div class="container mx-auto px-4">

    <article id="post-<?php the_ID(); ?>" <?php post_class('my-8'); ?>>
        <header class="entry-header">
            <?php the_title('<h1 class="entry-title text-3xl font-bold">', '</h1>'); ?>
            <div class="entry-meta text-gray-600 text-sm">
                <?php
                bae_blog_posted_on();
                bae_blog_posted_by();
                ?>
            </div><!-- .entry-meta -->
        </header><!-- .entry-header -->

        <div class="entry-content mt-4">
            <?php
            the_content();

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'bae-blog'),
                    'after'  => '</div>',
                )
            );
            ?>
        </div><!-- .entry-content -->

		<footer class="entry-footer flex justify-between items-center p-4 bg-gray-100 border-t border-gray-300 rounded-b-md">
            <?php bae_blog_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </article><!-- #post-<?php the_ID(); ?> -->

    <nav class="post-navigation my-8 flex justify-between" role="navigation">
        <div class="previous-post">
            <?php previous_post_link('%link', '<span class="arrow">&larr;</span> %title'); ?>
        </div>
        <div class="next-post">
            <?php next_post_link('%link', '%title <span class="arrow">&rarr;</span>'); ?>
        </div>
    </nav><!-- .post-navigation -->

    <?php
    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) :
        comments_template();
    endif;
    ?>

</div><!-- .container -->

<?php
get_footer();