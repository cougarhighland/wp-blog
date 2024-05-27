<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both
 * the current comments and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bae_blog
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="my-8">

    <?php
    if (have_comments()) :
        $comment_count = get_comments_number();
        ?>
        <h2 class="text-xl font-bold">
            <?php
            if ('1' === $comment_count) {
                echo esc_html__('One comment', 'bae-blog');
            } else {
                echo esc_html($comment_count) . ' ' . esc_html__('comments', 'bae-blog');
            }
            ?>
        </h2>

        <?php the_comments_navigation(); ?>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'callback'   => 'bae_blog_html5_comment',
                'short_ping' => true,
            ));
            ?>
        </ol>

        <?php the_comments_navigation();

        // If there are existing comments, but comments are closed, display a message.
        if (!comments_open()) :
            ?>
            <p class="text-gray-600"><?php esc_html_e('Comments are closed.', 'bae-blog'); ?></p>
        <?php
        endif;

    endif;

    comment_form();
    ?>

</div><!-- #comments -->