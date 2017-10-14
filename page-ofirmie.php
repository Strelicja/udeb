<?php
/**
 * The template Name: O firmie
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Udeb
 */

get_header(); ?>

	<div id="primary" class="content-area ">
		<main id="main" class="site-main">
			<div class="row timeOpenBox">

				<div class="">
		<!-- o firmie-->
					<div class="tabsBox col-lg-12 col-md-12 col-sm-12 col-xs-12 sidebar_aboute ">
							<?php
								$wpb_all_query = new WP_Query(array(
									'post_type'=>'post',
									'post_status'=>'publish',
									'cat' => '6',
									'posts_per_page'=>99
								));
							?>
							<?php if ( $wpb_all_query->have_posts() ) : ?>
							<div class="tabsList ">
								<div class="tabsList col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<ul>
										<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();?>
												<li class="tabsListTitle"><?php the_title(); ?></li>
										<?php endwhile; ?>
									</ul>
										<!-- end of the loop -->
								</div>
								<div class="tabsListFull col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
										<div>
											<!-- <img src="' . get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') . '" alt="" /></a> -->
											<div class="tabsListContent">
												<p class="tabsImg"><?php  the_post_thumbnail('thumbnail');?></p>
												<div class="tabsContent"><?php the_content(); ?></div></div>
										</div>

										<?php endwhile; ?>
										<!-- end of the loop -->
								</div>
							</div>
							    <?php wp_reset_postdata(); ?>

							<?php else : ?>
							    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>
						</div>
					</div>
					</div>

	<!--o firmie-->
		<div class=" row article_box article_box2 ">
				<div class="  col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="noMargin sidebar_contact col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
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
						<div class="borderLeft borderLeft2">
					 <?php dynamic_sidebar('contact'); ?>
					 <p class="button_homepage">
						<a href="/wordpress/kontakt/">Skontaktuj&nbsp;się&nbsp;+&nbsp;</a>
					 </p>
					 </div>
				 </div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
