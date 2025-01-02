<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bae_blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('bg-white shadow-md rounded-md overflow-hidden'); ?>>

    <header class="entry-header">
        <?php
        if (is_sticky() && is_home() && !is_paged()) {
            printf('<span class="inline-block px-2 py-1 bg-blue-500 text-white uppercase text-xs font-semibold tracking-wider">%s</span>', esc_html_x('Featured', 'post', 'bae-blog'));
        }
        if (is_singular()) :
            the_title('<h1 class="entry-title text-2xl font-bold">', '</h1>');
        else :
            the_title(sprintf('<h2 class="entry-title text-xl font-semibold"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
        endif;
        ?>
    </header><!-- .entry-header -->

    <?php bae_blog_post_thumbnail(); ?>

    <div <?php bae_blog_content_class('entry-content text-gray-700 text-lg leading-relaxed'); ?>>
        <?php
        the_content();

        wp_link_pages(array(
            'before' => '<div class="mt-4">' . __('Pages:', 'bae-blog'),
            'after'  => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer flex justify-between items-center p-4 bg-gray-100 border-t border-gray-300 rounded-b-md">
        <?php bae_blog_entry_footer(); ?>
    </footer><!-- .entry-footer -->

</article><!-- #post-${ID} -->