<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package udeb
 */
?>

    <?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php get_template_part( 'template-parts/page-head'); ?>

            <?php
            while ( have_posts() ) : the_post();
             the_content();
             endwhile;
             wp_reset_query();
        ?>
        </main>
        <!-- .site-main -->
    </div>
    <!-- .content-area -->
    <?php get_footer(); ?>
