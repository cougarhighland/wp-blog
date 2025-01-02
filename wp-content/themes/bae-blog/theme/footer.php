<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bae_blog
 */

?>

    </div><!-- #content -->

    <?php get_template_part( 'template-parts/layout/footer', 'content' ); ?>

    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-4">
            <p class="text-center">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>