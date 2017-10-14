<?php
/**
 * Template Name: kontakt
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Udeb
 */

get_header(); ?>

	<div id="primary" class="container-fluid content-area">
		<main id="main" class="site-main">
			<div class="sidebar_contact col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<iframe class="noPadding" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2440.5114194664297!2d4.83986651610137!3d52.28857147977109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e02359790171%3A0x9da5dade12323784!2sBinderij+3P%2C+1185+ZH+Amstelveen%2C+Holandia!5e0!3m2!1spl!2spl!4v1506172580454" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="row">
				<div class="noPadding col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="sidebar_contact col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', 'page' );
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile; // End of the loop.
						?>
					</div>
					<!--adress-->
		              <div class="sidebar_contact widget_text_adres col-lg-4 col-md-4 col-sm-4 col-xs-12">
		                <div class="borderLeft">

		               <?php dynamic_sidebar('contactform'); ?>
		               
		               </div>
		             </div>


				</div>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
