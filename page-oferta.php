<?php
/**
 * Template Name: oferta
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

	<div id="primary" class=" content-area">
		<main id="main" class="site-main">
			<!--zdjęcie główne banner-->
	        <div class="row noPadding col-lg-12 col-md-12 col-sm-12 col-xs-12">
	          <img class="imgHeader"  src="<?php header_image(); ?>"
	            height="<?php echo get_custom_header()->height; ?>"
	            width="<?php echo get_custom_header()->width; ?>"
	            alt=""/>
	       </div>
	       <div class="row timeOpenBox">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="titleOferta sidebar_contact widget_text col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<h1 class="toggle widget-title">
								<?php the_title(); ?>
							</h1>
							<div class="toggleBox">
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
						</div>
						<!--adress-->
						 <div class="sidebar_contact widget_text_adres col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="borderLeft">
						 		 <?php dynamic_sidebar('contact'); ?>
					  			<p class="button_homepage">
										<a href="#">Skontaktuj&nbsp;się&nbsp;+&nbsp;</a>
								 </p>
							 </div>
						 </div>

					 </div>

					</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
